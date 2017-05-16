@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profiles</div>

                <div class="panel-body">
                    <center>
                        <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" alt=""> <br>
                        <p>{{ Auth::user()->name }}</p>
                    </center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
