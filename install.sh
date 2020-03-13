#! /usr/bin/env bash

# We need to install the project dependecies
composer install
composer dump-autoload --optimize

# Check the classes/ folder 
vendor/bin/ecs check classes
vendor/bin/ecs check classes --fix

# Check the interface/ folder 
vendor/bin/ecs check interface
vendor/bin/ecs check interface --fix

# Check the abstract/ folder 
vendor/bin/ecs check abstract
vendor/bin/ecs check abstract --fix

# Check the models/ folder 
vendor/bin/ecs check models
vendor/bin/ecs check models --fix