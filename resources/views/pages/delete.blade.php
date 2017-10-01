@extends('layout)

@section('content')
    <div class="container">
        <p class="alert alert-success">
            El usuario se elimino correctamente.
            <a href="{{ route('home') }}">
                Ir al HOME
            </a>
        </p>
    </div>
@stop