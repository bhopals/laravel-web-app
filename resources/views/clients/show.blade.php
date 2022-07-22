@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $client->name }}</h1>
  <p class="type">Code - {{ $client->code }}</p>
  <p class="type">Name - {{ $client->name }}</p>
  <p class="base">Desc - {{ $client->desc }}</p>
  <p class="base">Active - {{ $client->active }}</p>
  <p class="base">Country - {{ $client->country }}</p>
<form action="{{ route('clients.destroy', $client->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete Client</button>
  </form>
</div>
<a href="{{ route('clients.index') }}" class="back"><- Back to all clients</a>
@endsection