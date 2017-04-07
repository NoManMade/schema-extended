How to install
--------------

Add package to `package.json`
```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/nomanmade/schema-extended"
    }
],
"require": {
    "laravel/framework": "5.4.*",
    "nomanmade/schema-extended": "~1.0"
},
```

Do not forget to run `composer install` or `composer update rafis/schema-extended` after modifying `package.json`.

Replace "alias" in the configuration file `config/app.php`:
```php
'aliases' => array(
    ...
    // 'Schema' => 'Illuminate\Support\Facades\Schema',
    'Schema'    => 'SchemaExtended\Schema',
),
```
