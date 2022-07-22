@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        @foreach($clients as $client)
          <div>
            {{ $client->name}}  - {{ $client->code}}  - {{ $client->desc}}
          </div>
        @endforeach

    </div>
</div>
@endsection