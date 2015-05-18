var inputContext = null;
var keyboardElement;

function d(text) {
    var b = document.createElement('button');
    b.setAttribute('class', 'key');
    b.appendChild(document.createTextNode(text));

    var line = document.querySelector('#d');
    line && line.appendChild(b);
}

function init() {
    keyboardElement = document.getElementById('keyboard');

    window.navigator.mozInputMethod.oninputcontextchange = function() {
        inputContext = navigator.mozInputMethod.inputcontext;
        resizeWindow();
    };

    window.addEventListener('resize', resizeWindow);

    //var alwaysUpDiv = buildLine(alwaysUp);
    //keyboardElement.appendChild(alwaysUpDiv);
    //
    //// Append alpha panel
    //var k = keyboards['en_us'];
    //['alpha', '123', '123_alt_1'].forEach(function (name) {
    //    var panel = document.createElement('div');
    //    panel.setAttribute('class', 'panel');
    //    panel.setAttribute('data-panel', name);
    //
    //    var definition = keyboardConvert(k[name]['keys']);
    //    definition.forEach(function (line) {
    //        lineDiv = buildLine(line);
    //        panel.appendChild(lineDiv);
    //    });
    //
    //    keyboardElement.appendChild(panel);
    //});
    //
    //var alwaysDownDiv = buildLine(alwaysDown);
    //keyboardElement.appendChild(alwaysDownDiv);

    keyboardElement.addEventListener('mousedown', function onMouseDown(evt) {
        // Prevent loosing focus to the currently focused app
        // Otherwise, right after mousedown event, the app will receive a focus event.
        evt.preventDefault();
    });

    var menuTimeout = 0;

    var getModifiers = function (keep) {
        var toggled = document.querySelectorAll('*[data-toggle="1"], *[data-toggle="2"]');
        var modifiers = 0;
        for (var i=0; i<toggled.length; i++) {
            var item = toggled.item(i);
            var modifier = item.getAttribute('data-modifier');
            modifiers |= parseInt(modifier);

            if (!keep && '1' == item.getAttribute('data-toggle')) {
                item.setAttribute('data-toggle', '0');
            }
        }

        return modifiers;
    };

    var sendKeyCode = function (keyCode) {
        //d(getModifiers());
        //d(keyCode);
        inputContext.sendKey(keyCode, 0, getModifiers());
    };

    var sendCharCode = function (charCode) {
        var modifiers = getModifiers();
        if (modifiers & 0x0004 && charCode >= 'a'.charCodeAt('0') && charCode <= 'z'.charCodeAt(0)) {
            charCode -= 0x20;
        }
        inputContext.sendKey(0, charCode, modifiers);
    };

    /**
     * @type NodeList nodeList
     */
    var applyToNodeList = function (nodeList, callback) {
        for (var i=0; i<nodeList.length; i++) {
            var item = nodeList.item(i);
            callback(item);
        }
    };

    window.setTimeout(function () {
        // Find switch element
        var switchElement = document.querySelector('.key[data-name="world"]');
        switchElement.addEventListener('click', function switchHandler() {
            var mgmt = navigator.mozInputMethod.mgmt;
            mgmt.next();
        });

        // long press to trigger IME menu
        switchElement.addEventListener('touchstart', function longHandler() {
            menuTimeout = window.setTimeout(function menuTimeout() {
                var mgmt = navigator.mozInputMethod.mgmt;
                mgmt.showAll();
            }, 700);
        });

        switchElement.addEventListener('touchend', function longHandler() {
            clearTimeout(menuTimeout);
        });

        var alphaToggles = document.querySelectorAll('.key[data-name="123"], .key[data-name="abc"]');
        applyToNodeList(alphaToggles, function (item) {
            item.addEventListener('click', function () {
                var activePanel = keyboardElement.getAttribute('data-active-panel');
                if ('alpha' == activePanel) {
                    keyboardElement.setAttribute('data-active-panel', '123');
                } else {
                    keyboardElement.setAttribute('data-active-panel', 'alpha');
                }
            });
        });

        var numberToggles = document.querySelectorAll('.key[data-name="panel_123"], .key[data-name="panel_123_alt_1"]');
        applyToNodeList(numberToggles, function (item) {
            item.addEventListener('click', function () {
                var activePanel = keyboardElement.getAttribute('data-active-panel');
                if ('123' == activePanel) {
                    keyboardElement.setAttribute('data-active-panel', '123_alt_1');
                } else {
                    keyboardElement.setAttribute('data-active-panel', '123');
                }
            });
        });

        /* @type NodeList */
        var keys = document.querySelectorAll('.key');
        for (var i = 0; i < keys.length; i++) {
            var key = keys.item(i);
            key.addEventListener('click', function () {
                if (this.hasAttribute('data-keycode')) {
                    var keyCode = parseInt(this.getAttribute('data-keycode'));
                    sendKeyCode(keyCode);
                } else if (this.hasAttribute('data-charcode')) {
                    var charCode = parseInt(this.getAttribute('data-charcode'));
                    sendCharCode(charCode);
                }

                if (this.hasAttribute('data-toggle')) {
                    var toggle = this.getAttribute('data-toggle');
                    toggle = (toggle + 1) % 3;
                    this.setAttribute('data-toggle', toggle);

                    var modifiers = getModifiers(true) & 0x0004; // SHIFT
                    keyboardElement.setAttribute('data-shift', modifiers ? '1' : '0');
                }
            });
        }

        window.setTimeout(resizeWindow, 1000);
    }, 100);
}

function resizeWindow() {
    window.resizeTo(window.innerWidth, keyboardElement.clientHeight);
}

/*
function sendKey(keyCode) {
    switch (keyCode) {
        case KeyEvent.DOM_VK_BACK_SPACE:
        case KeyEvent.DOM_VK_RETURN:
            if (inputContext) {
                inputContext.sendKey(keyCode, 0, 0);
            }
            break;

        default:
            if (inputContext) {
                inputContext.sendKey(0, keyCode, 0);
            }
            break;
    }
}
*/
window.addEventListener('load', init);
