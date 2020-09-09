@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ $patient->nombre }}</h1>
            <p class="lead">{{$patient->email}}</p>
        </div>
    </div>
</div>

@endsection
