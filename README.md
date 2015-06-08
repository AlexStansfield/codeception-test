codeception-test
================

Steps to reproduce issue:

1. clone this repo
2. composer install
3. php app/console doctrine:database:create
4. php app/console doctrine:schema:create
5. bin/codecept run

First test runs fine, second fails.