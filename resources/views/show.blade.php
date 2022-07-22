@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $client->name }}</h1>
  <p class="type">Code - {{ $client->code }}</p>
  <p class="type">Name - {{ $client->name }}</p>
  <p class="base">Desc - {{ $client->desc }}</p>
  <p class="base">Active - {{ $client->active }}</p>
  <p class="base">Country - {{ $client->country }}</p>
  <div><br/></div>
  <div>&nbsp;</div>
  <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class='delete-client'>Delete Client</button>
  </form>
</div>
<div><br/></div>
<div>&nbsp;</div>
<b><u><a href="{{ route('clients.index') }}" class="back"><- Back to all clients</a></u></b>
@endsection