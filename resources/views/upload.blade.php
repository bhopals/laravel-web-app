@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('File Upload Contoller') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="upload container">
                        @csrf
                        <form method="POST" enctype="multipart/form-data">
                            <input type="file" name="image" />
                            <button type="submit" name="uploadfile">Upload</button>

                        </form>
                    

                    </div>
                    @if (Route::has('login'))
                        @auth
                            {{ __('You are logged in!') }}<br/><br/>
                            <a href="{{ route('clients.index') }}"><b><u>Show client</u></b></a>
                            <br/>
                            <a href="{{ route('clients.metadata') }}"><b><u>Show metadata</u></b></a>

                        @endauth
                    @endif    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
