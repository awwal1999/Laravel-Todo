@extends('layouts.app')

@section('content')
	<a class="button is-primary" href="/">Go back</a>
	<h1 class="title mt20">{{ $todo->title }}</h1>
	<span class="tag is-danger">{{ $todo->due}}</span>
	<hr>
	<p class="mb20">{{ $todo->description }}</p>
	<a class="button is-primary" href="/todo/{{ $todo->id }}/edit">Edit</a>
	<form action="/todo/{{ $todo->id }}" class="level-right nmt46" method="POST">
		@method('DELETE')
        @csrf
        
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete</button>
            </div>
        </div>
    </form>
@endsection