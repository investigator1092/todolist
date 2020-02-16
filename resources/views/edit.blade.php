@extends('layouts/app')

@section('content')
<h1>Edit Todo</h1>
<form method="POST" action="/todo/{{ $todo->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title"
            value="{{ $todo->title }}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" name="content" class="form-control" id="content" placeholder="Enter content"
            value="{{ $todo->content }}">
    </div>
    <div class="form-group">
        <label for="due">Due</label>
        <input type="text" name="due" class="form-control" id="due" placeholder="Enter due" value="{{ $todo->due }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
