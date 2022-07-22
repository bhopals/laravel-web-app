@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Client</h1>
  <form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <label for="name">Client name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="code">Client Code:</label>
    <input type="text" name="code" id="code" required>
    
    <label for="desc">Client Desc:</label>
    <input type="text" name="desc" id="desc" required>

    <label for="country">Client Countyr:</label>
    <input type="text" name="country" id="country" required>
    
    <input type="submit" value="Create Client">
  </form>
</div>
@endsection