#!/usr/bin/make -f

composer.phar:
	curl -sS https://getcomposer.org/installer | php

sql:
	php ./test/src/sql.php

lint:
	find src -name '*.php' -exec php -l {} \;
	find test/src -name '*.php' -exec php -l {} \;

update: composer.phar
	./composer.phar install

pux: update
	vendor/corneltek/pux/pux compile -o route/compiled.php route/mux.php

check: pux lint
	find src -name '*.php' -exec ./vendor/bin/phpcs --standard=PSR2 {} \;
	find test/src -name '*.php' -exec ./vendor/bin/phpcs --standard=PSR2 {} \;

test: sql update
	./vendor/phpunit/phpunit/phpunit.php -c phpunit.xml

.PHONY: check update pux
