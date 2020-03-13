#! /usr/bin/env bash
composer install
composer dump-autoload --optimize
ls .git
ls .git/hooks
mv .git/hooks/prepare-commit-msg.sample .git/hooks/prepare-commit-msg
chmod +x .git/hooks/prepare-commit-msg
cat pre-commit.sh >> .git/hooks/prepare-commit-msg
./pre-commit.sh
git status -s
