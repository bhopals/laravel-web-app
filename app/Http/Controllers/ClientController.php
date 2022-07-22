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
        $metadatas = [
            ['id'=> 'host', 'value' => $request->host()],
            ['id'=> 'httpHost', 'value' => $request->httpHost()],
            ['id'=> 'schemeAndHttpHost', 'value' => $request->schemeAndHttpHost()],
            ['id'=> 'url', 'value' => $request->url()],
            ['id'=> 'fullUrl', 'value' => $request->fullUrl()],
            ['id'=> 'header', 'value' => $request->header('X-Header-Name')],
            ['id'=> 'bearerToken', 'value' => $request->bearerToken()],
            ['id'=> 'ip', 'value' => $request->ip()],
//            ['id'=> 'inputs', 'value' => $request->collect()],
        //   ['id'=> 'all inputs', 'value' => $request->all()],
   //         ['id'=> 'contentType', 'value' => $request->getAcceptableContentTypes()],

            
        ];
      return view('metadatas', ['metadatas' => $metadatas]);
    }
}

