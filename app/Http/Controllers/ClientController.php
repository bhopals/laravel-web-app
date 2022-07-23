<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

  //  public function __construct(){
  //     $this->middleware('auth');
  //  }
        
    public function index() {
        //$clients = Client::orderBy('code', 'asc')->get();
        $clients = Client::all();
        return view('clients', ['clients' => $clients]);
    }

    public function create() {
        return view('create');
    }

  public function store() {

    $client = new Client();
    $client->active = 'Y';
    $client->name = request('name');
    $client->code = request('code');
    $client->desc = request('desc');
    $client->country = request('country');

    $client->save();
    return redirect('/clients')->with('mssg', 'Thanks for your doing business with us!');

  }

  public function destroy($id) {
    $client = Client::findOrFail($id);
    $client->delete();
    return redirect('/clients');
  }

    public function where($code) {
        $clients = Client::where('code', $code)->get();
        return view('clients', ['clients' => $clients]);
    }

     public function show($id) {
        $client = Client::findOrFail($id);
        return view('show', ['client' => $client]);
    }

    public function metadata(Request $request) {
        $cookie = cookie('test', 'testeststset', 100000);

        $request->session()->put('Developer', 'Bhopal Singh');
        $metadatas = [
            ['id'=> '------', 'value' => '----METADATA---------------------'],
            ['id'=> '', 'value' => ''],
            ['id'=> '------', 'value' => '----Host / URL Details---------------------'],
            ['id'=> 'host', 'value' => $request->host()],
            ['id'=> 'httpHost', 'value' => $request->httpHost()],
            ['id'=> 'schemeAndHttpHost', 'value' => $request->schemeAndHttpHost()],
            ['id'=> 'url', 'value' => $request->url()],
            ['id'=> 'fullUrl', 'value' => $request->fullUrl()],
            ['id'=> 'header', 'value' => $request->header('X-Header-Name')],
            ['id'=> 'bearerToken', 'value' => $request->bearerToken()],
            ['id'=> 'ip', 'value' => $request->ip()],
            ['id'=> '', 'value' => ''],
            ['id'=> '------', 'value' => '----HEADERS---------------------'],
            ['id'=> 'Headers', 'value' => print_r($request->header(), TRUE)],
            ['id'=> '', 'value' => ''],
            ['id'=> '------', 'value' => '----Content and Input---------------------'],
            ['id'=> 'CONTENT TYPE', 'value' => print_r($request->getAcceptableContentTypes(), TRUE)],
            ['id'=> 'inputs', 'value' => print_r($request->collect(), TRUE)],
            ['id'=> 'all inputs', 'value' => print_r($request->all(), TRUE)],
            ['id'=> '', 'value' => ''],
            ['id'=> '------', 'value' => '----SESSION---------------------'],
            ['id'=> 'token', 'value' => $request->session()->get('_token')],
            ['id'=> 'Session', 'value' => print_r($request->session()->all(), TRUE)],
            ['id'=> '', 'value' => ''],
            ['id'=> '------', 'value' => '----COOKIES---------------------'],
            ['id'=> 'cookies', 'value' => print_r($request->cookie(), TRUE)],
            ['id'=> '', 'value' => ''],
            
        ];

        error_log('string log');
        error_log(print_r($request->session()->all(), TRUE));
        error_log($request->session()->get('_token'));
        error_log(print_r($request->header(), TRUE));
        
      return view('metadatas', ['metadatas' => $metadatas]);
    }
    
}

