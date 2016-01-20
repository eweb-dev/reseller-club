# ResellerClub PHP Api - Framework Integration
In this documents, you can see what framework can use this package natively

## Laravel
Laravel is framework for web artisan. For you who love using this framework, i already provided some Facades and Service Provider. After you run installation phase, you should run this step.

### Modify Service Provider collections
Add `Gufy\ResellerClub\ResellerClubServiceProvider::class` to your service providers in `config/app.php`

### Configure ResellerClub API Config
Publish the configuration file:
```bash
php artisan vendor:publish --provider="Gufy\ResellerClub\ServiceProvider" --tag="config"
```

It will publish a config file and will be located at `config/resellerclub.php`. Modify that file, and input your `auth-userid` and `api-key` from ResellerClub.

*Note:* You can also call `new Gufy\ResellerClub\ResellerClub(<userid>, <api-key>);` instead of using the config file.

### Simple usage using facades
```php
<?php
  $domains = ResellerClub::where('no-of-records', 50)
    ->where('status','Active')
    ->get('domains/search.json');
```