### Eloquent Models

#### Setup

### Eloquent Models

Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database

#### Generating Model Class

-   Make sure you add some dummy records in your Table - `clients` (For Demo)

```
INSERT INTO apps.clients (name,code,active,`desc`,created_at,updated_at,country) VALUES
	 ('Client 1','AA','Y','First Client',NULL,NULL,'IN'),
	 ('Client 2','BB','Second Client','Second Client',NULL,NULL,'CA');
```

-   Create a Model called `Client`
    `php artisan make:model Client`

    This should create a Model named `Client` in `app/Models` directory

#### Mapping the Model to Database Table

-   Once the model is created, we need to connect that model with the TABLE

        `protected $table = 'clients';`

#### Routing

-   Add Routing in `routes/web.php`
-   Retrieve all - `/clients` mapped to ClientController's `index` method
-   Retrieve By Id - `/client/{id}` mapped to ClientController's `show` method
-   Retrieve By code - `/client/code/{code}` mapped to ClientController's `where` method

```
Route::get('/test', function() {
    $clients = [
        ['name'=> 'Client 11', 'code' => '11'],
        ['name'=> 'Client 22', 'code' => '22'],
        ['name'=> 'Client 33', 'code' => '33'],
        ['name'=> 'Client 44', 'code' => '44']
    ];
    return view('test', [
        'clients' => $clients
    ]);
});

Route::get('/clients', 'App\Http\Controllers\ClientController@index');
Route::get('/clients/{id}', 'App\Http\Controllers\ClientController@show');
Route::get('/clients/code/{code}', 'App\Http\Controllers\ClientController@where');
```

#### Controller

-   Create a Controller
    `php artisan make:controller ClientController`
    It will create a Controller in `Http/Controllers/`

-   Create Two methods (`index` and `show`)
    `public function index(){...}`
    `public function show(id){...}`
    `public function where(code){...}`

-   Import Model (`Client`)
    `use App\Models\Client;`

    `$clients = Client::all();`
    `Client::where('code', $code)->get();`
    `Client::orderBy('code', 'asc')->get();`
    `Client::orderBy('code', 'asc')->get();`
