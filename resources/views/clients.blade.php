@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h3><b>Client List (Table)</b></h3>
        </div>
        @foreach($clients as $client)
          <div >
            <div>---------------------------------------------------------------------</div>
            <div><b><u><a href="{{ route('clients.show', $client->id) }}">{{ $client->code}}</a></u></b> &nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;  Name: {{ $client->name}}, Country: {{ $client->country}}, Active: {{ $client->active}}, Details: {{ $client->desc}}</div>
          </div>
        @endforeach
    </div>
    <div><br/></div>
    <div>&nbsp;</div>

    <div><b><u><a href="{{ route('clients.create') }}" class="back">Create New Client</a></u></b></div>
</div>
@endsection