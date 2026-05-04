.PHONY: install brain-games

install:
	@composer install

brain-games:
	.bin/brain-games.php

validate:
	composer validate
