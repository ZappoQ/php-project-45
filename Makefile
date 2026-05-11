.PHONY: install brain-games

install:
	@composer install

brain-games:
	php bin/brain-games

validate:
	composer validate

lint:
	@composer exec --verbose phpcs -- --standard=PSR12 /Users/dom/php-project-45

brain-even:
	php bin/brain-even

brain-calc:
	php bin/brain-calc

brain-gcd:
	php bin/brain-gcd

