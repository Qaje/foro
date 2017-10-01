@extends('layout')

@section('content')
    <div class="container">


        <h1 class="page-header">
            Todos los usuarios (All)
        </h1>
        <table class="table table-hover table-striped">
            @include('partials.head-users')
            <tbody>
            @include('partials.list-users')
            </tbody>
        </table>
    </div>
@stop
