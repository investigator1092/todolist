@extends('layouts.app')

@section('content')
<h1>Create new Todo</h1>
<form method="POST" action="/todo">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" name="content" class="form-control" id="content" placeholder="Enter content" value="{{ old('content') }}">
    </div>
    <div class="form-group">
        <label for="due">Due</label>
        <input type="text" name="due" class="form-control" id="due" placeholder="Enter due" value="{{ old('due') }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
