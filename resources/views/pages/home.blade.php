@extends('layout')

@section('content')
	<div class="container">
		<h1 class="page-header">
			Todos los usuarios (<Main></Main>)
		</h1>
		<div class="jumbotron">
			<div class="container">
				<h1>Eloquent ORM</h1>
				<p>Teeexxttooo</p>
			</div>
		</div>
		<table class="table table-hover table-striped">
			@include('partials.head-users')
			<tbody>
			@include('partials.list-users')
			</tbody>
		</table>
	</div>
@stop

