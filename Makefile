check:
	find src -name '*.php' -exec php -l {} \;
	find src -name '*.php' -exec ./vendor/bin/phpcs --standard=PSR2 {} \;
	./vendor/phpunit/phpunit/phpunit.php -c phpunit.xml