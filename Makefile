PHP_IMAGE ?= php
DOCKER_COMPOSE ?= docker compose
DOCKER_RUN = ${DOCKER_COMPOSE} run --rm ${DOCKER_RUN_ARGS}
DOCKER_RUN_PHP = ${DOCKER_RUN} ${PHP_IMAGE}
TESTS = make tests
TEST = make test

help: ## Show this help message.
	@echo 'usage: make [target] ...'
	@echo
	@echo 'targets:'
	@egrep '^(.+)\:(.+)?\ ##\ (.+)' ${MAKEFILE_LIST} | column -t -c 2 -s ':#'

up: ## Start up services
	$(DOCKER_COMPOSE) up -d \
		php \
	;

down: ## Shut down services
	$(DOCKER_COMPOSE) down
phpstan: ## Run static code analysis
	$(DOCKER_COMPOSE) run --rm php php vendor/bin/phpstan analyse -l 9 src tests
test-all: ## Run application tests
	$(DOCKER_COMPOSE) run --rm php php ./vendor/bin/phpunit tests
test-f: ## Run application tests
	$(DOCKER_COMPOSE) run --rm php php ./vendor/bin/phpunit tests --stop-on-failure
test-e: ## Run application tests
	$(DOCKER_COMPOSE) run --rm php php ./vendor/bin/phpunit tests --stop-on-error
test: ## Run application tests
	$(DOCKER_COMPOSE) run --rm php php ./vendor/bin/phpunit tests --filter=$(filter)
cs-fix: ## Coding standards fixer
	$(DOCKER_COMPOSE) run --rm php php ./vendor/bin/php-cs-fixer fix src -vvv
##
## Setup & installing
##
install: install-composer ## Installs all dependencies for this service
install-composer: ## Installs Composer dependencies
	$(DOCKER_RUN_PHP) composer install --optimize-autoloader