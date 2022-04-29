composer:
	composer validate
	composer install --no-interaction --prefer-dist

cs:
	vendor/bin/phpcs app/ --standard=vendor/pd/coding-standard/src/PeckaCodingStandard/ruleset.xml
	vendor/bin/phpcs app/ --standard=vendor/pd/coding-standard/src/PeckaCodingStandardStrict/ruleset.xml

phpstan:
	vendor/bin/phpstan analyse app/ --level 1 -c phpstan.neon --no-progress
