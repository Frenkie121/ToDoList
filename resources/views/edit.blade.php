@extends('layouts.app')

@section('content')
    <h1>Edit Todo</h1>
<form method="POST" action="/todo/{{ $todo->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Todo Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Tap title" value="{{ $todo->title }}">
        </div>
        <div class="form-group">
            <label for="content">Todo Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Tap content" value="{{ $todo->content }}">
        </div>
        <div class="form-group">
            <label for="due">Todo Due</label>
            <input type="text" class="form-control" name="due" id="due" placeholder="Tap due" value="{{ $todo->due }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection