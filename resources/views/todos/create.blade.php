@extends('layouts.app')

@section('content')
    <h1 class="title">Create a New Todo</h1>
    <form action="/todo" method="POST">
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
            <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Todo title" value="{{ old('title') }}" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="Todo description" required>{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="field">
            <label class="label">Due</label>
            <div class="control">
            <input type="text" name="due" class="input {{ $errors->has('due') ? 'is-danger' : '' }}" placeholder="Todo due" value="{{ old('due') }}" required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Todo</button>
            </div>
        </div>
        @include('inc.messages')
    </form>
@endsection