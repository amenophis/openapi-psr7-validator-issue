# OpenAPI validator issue reproducer

Tests are located inside `tests/SchemaTests.php`

## Run the reproducer

The test should all pass, but it is not the case. 

```shell
composer install
vendor/bin/phpunit tests/SchemaTests.php
```