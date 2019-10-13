# How the project have been setup

In *bootstrap/app.php* uncomment :

For blade templates :
```
$app->withFacades();
```

Eloquent database interaction :
```
$app->withEloquent();
```

Authentication features :
```
$app->register(App\Providers\AuthServiceProvider::class);
```

Service and fix migration :
```
$app->register(App\Providers\AppServiceProvider::class);
```

Then add in *AppServiceProvider* :
```
use Illuminate\Support\Facades\Schema;

public function boot(){
Schema::defaultStringLength(191);
}
```

Set the .env value APP_KEY with a 32 byte string

## Authentification

Tutorial:
https://medium.com/codeartisan/users-authentication-with-vue-js-lumen-5e58ec9e6f7e