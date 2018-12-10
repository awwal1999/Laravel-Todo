@extends('layouts.app')

@section('content')
	<a class="button is-primary" href="/">Go back</a>
	<h1 class="title mt20">{{ $todo->title }}</h1>
	<span class="tag is-danger">{{ $todo->due}}</span>
	<hr>
	<p>{{ $todo->body }}</p>
@endsection