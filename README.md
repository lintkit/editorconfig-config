# LintKit: EditorConfig Config

Opinionated configuration for editor config

## Usage

Install the dependency:

```bash
composer require --dev lintkit/editorconfig-config
```

Add the scripts:

```json
"scripts": {
    "editorconfig:dry-run": "ec --finder-config vendor/lintkit/editorconfig-config/ec-cli-config.php",
    "editorconfig:fix": "@editorconfig:dry-run --fix",
},
```

## Custom Overriding

It may be you wish to add and/or remove stuff from the [default finder config](./ec-cli-config.php), in which case, make a `ec-cli-config.php` in your project root with something like the following:

```php
<?php

$finder = include 'vendor/lintkit/editorconfig-config/ec-cli-config.php';

$finder
    ->notPath('html/_assets')
;

return $finder;
```

Update your `composer.json` to use `--finder-config ./ec-cli-config.php`