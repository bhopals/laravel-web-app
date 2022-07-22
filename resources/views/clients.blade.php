@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <u><b>Clients List</b></u>
        </div>

        @foreach($clients as $client)
          <div class="m-b-md">
            <div class="m-b-md">-----------------------</div>
            <div class="m-b-md">Name :{{ $client->name}} </div>
            <div class="m-b-md">Code :{{ $client->code}}  </div>
            <div class="m-b-md">Country: {{ $client->country}}</div>
            <div class="m-b-md">Active: {{ $client->active}}</div>
            <div class="m-b-md">Details: {{ $client->desc}}</div>
          </div>
        @endforeach
               <div class="m-b-md">-----------------------</div>
            <div class="m-b-md">-----------------------</div>


    </div>
</div>
@endsection