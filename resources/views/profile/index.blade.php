@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to your profile page<br>
                    <img src="{{ url('img') }}/{{Auth::user()->pic}}" alt="" width="90px" height="90px"><br>
                    <a href="#">Change Image</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
