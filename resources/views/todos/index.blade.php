@extends('layouts.app')

@section('content')
	<h1 class="title mt20">Todos</h1>
	@if( count($todos) > 0 )
		@foreach( $todos as $todo)
			
			<div class="content box">
				<h3><a href="todo/{{ $todo->id }}"> {{ $todo->title }} </a><span class="tag is-danger">{{ $todo->due}}</span></h3>
			</div>

		@endforeach
	@endif
@endsection
