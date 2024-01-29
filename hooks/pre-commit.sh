#!/bin/bash

# Exécuter les tests PHPUnit
docker compose exec php bin/phpunit

# Exécuter PHPStan pour l'analyse statique
docker compose exec php vendor/bin/phpstan analyze

# Exécuter PHPCS pour le contrôle de la qualité du code
docker compose exec php vendor/bin/phpcs

# Exécuter les tests unitaires avec PHPUnit
docker compose exec php bin/phpunit --testsuite unit
