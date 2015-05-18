all: gulp

gulp: composer npm
	gulp

npm:
	npm install

composer:
	[ -x composer.phar || (curl -sS https://getcomposer.org/installer | php)
	php composer.phar update
