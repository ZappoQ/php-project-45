.PHONY: install brain-games

install:
	@composer install

brain-games:
	.bin/brain-games.php

validate:
	composer validate

lint:
	@composer exec --verbose phpcs -- --standard=PSR12 /Users/dom/php-project-45

brain-even:
	./bin/brain-even

brain-calc:
	php bin/brain-calc
