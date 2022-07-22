@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Client Details</h1>
  @foreach($clients as $client)
    <div class="pizza-item">
      <h4><a href="{{ route('clients.show', $client->id) }}">{{ $client->name }}</a></h4>
    </div>
  @endforeach
  
</div>

@endsection