#!/usr/bin/make -f

composer.phar:
	curl -sS https://getcomposer.org/installer | php

sql:
	php ./test/src/sql.php

update: composer.phar
	./composer.phar install

pux: update
	vendor/corneltek/pux/pux compile -o route/compiled.php route/mux.php

check: pux
	find src -name '*.php' -exec php -l {} \;
	find src -name '*.php' -exec ./vendor/bin/phpcs --standard=PSR2 {} \;
	./vendor/phpunit/phpunit/phpunit.php -c phpunit.xml

.PHONY: check update pux
