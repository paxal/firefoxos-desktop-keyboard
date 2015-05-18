# Firefox OS Desktop Keyboard

Desktop Keyboard for Firefox OS.

This is useful when you use it with a SSH/VNC/RDP client.

## Build

To build, you will need `php>=5.5` (for html generation), node (for assets generation) 
and make (optional, for automatization).

### Manual install

Install npm dependencies : `npm install`

Install php dependencies with [composer](http://getcomposer.org/) : `php ./composer.phar install`

Run the gulp command : `./node_modules/.bin/gulp`

## Install

To install it from source, use Firefox :)

## Create custom keyboard

You can create a custom keyboard by add a new Keyboard PHP File under the `tools/Boards` directory. Then, add it to the 
`tools/twig.php` file to generate a new html file, and add a new entry in the `src/app/manifest.webapp` file.
