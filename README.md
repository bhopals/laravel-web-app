### Steps to setup project from scratch

#### laraval-web-app

1. `composer create-project laravel/laravel laravel-web-app`

2. `cd laravel-web-app`

3. `php artisan serve`

4. `composer require bref/laravel-bridge --update-with-dependencies`
   REFER - https://github.com/brefphp/laravel-bridge

5. `php artisan vendor:publish --tag=serverless-config`
   REFER - https://bref.sh/docs/runtimes/https://bref.sh/docs/runtimes/
   Update the layer versions to latest - ${bref:layer.php-81} / ${bref:layer.php-81-fpm}

6. `serverless deploy`
   Output of this command will return API URL - https://283iupsgdl.execute-api.us-west-2.amazonaws.com
