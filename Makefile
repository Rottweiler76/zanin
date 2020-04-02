dockerc := docker-compose -f .docker/php-cli/docker-compose.yml --env-file=.docker/php-cli/.env

cli:
	@$(dockerc) run php-cli bash

server:
	@$(dockerc) run -p 8000:8000 php-cli php -S 0.0.0.0:8000 -t /var/www/app/public