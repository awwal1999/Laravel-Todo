@extends('layouts.app')

@section('content')
    <h1 class="title">Edit Todo</h1>
    <form action="/todo/{{ $todo->id }}" method="POST">
        @method('PATCH')
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
            <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Todo title" value="{{ $todo->title }}" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="Todo description" required>{{ $todo->description }}</textarea>
            </div>
        </div>
        <div class="field">
            <label class="label">Due</label>
            <div class="control">
            <input type="text" name="due" class="input {{ $errors->has('due') ? 'is-danger' : '' }}" placeholder="Todo due" value="{{ $todo->due }}" required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Save Changes</button>
            </div>
        </div>
        {{-- @include('inc.messages') --}}
    </form>
    <form action="/todo/{{ $todo->id }}" class="level-right nmt36" method="POST">
		@method('DELETE')
        @csrf
        
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete</button>
            </div>
        </div>
    </form>
@endsection