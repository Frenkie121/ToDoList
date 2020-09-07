@extends('layouts.app')

@section('content')

    <h1>Create a new Todo</h1>
    <form method="POST" action="/todo">
        {{-- @method('POST') --}}
        @csrf
        <div class="form-group">
            <label for="title">Todo Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Tap title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="content">Todo Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Tap content" value="{{ old('content') }}">
        </div>
        <div class="form-group">
            <label for="due">Todo Due</label>
            <input type="text" class="form-control" name="due" id="due" placeholder="Tap due" value="{{ old('due') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection