<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    public function index() {
        // $clients = Client::all();
        $clients = Client::orderBy('code', 'asc')->get();
        return view('clients', ['clients' => $clients]);
    }

    public function show($id) {

    }

    public function where($code) {
        $clients = Client::where('code', $code)->get();
        return view('clients', ['clients' => $clients]);
    }
}

