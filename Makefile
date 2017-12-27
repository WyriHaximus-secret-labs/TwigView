all: cs unit
travis: cs unit-travis

init:
	if [ ! -d vendor ]; then COMPOSER_ROOT_VERSION=`git describe --abbrev=0` composer install; fi;

cs: init
	./vendor/bin/phpcs --standard=PSR2 src/

unit: init
	./vendor/bin/phpunit --coverage-text --coverage-html covHtml

unit-travis: init
	./vendor/bin/phpunit --coverage-text --coverage-clover ./build/logs/clover.xml

travis-coverage: init
	if [ -f ./build/logs/clover.xml ]; then wget https://scrutinizer-ci.com/ocular.phar && php ocular.phar code-coverage:upload --format=php-clover ./build/logs/clover.xml; fi
