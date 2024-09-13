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
