@extends('layout')
@section('content')
    <div class="container">
        <h1>    Lista de usuarios para Select(LISTS)</h1>
        {!! Form::open !!}
        <div class="form-group">
            {!! Form::select('users',$users,null,['class' => 'form-control']) !!}
        </div>
        {!! From::close !!}
    </div>
@stop