@extends('layouts.master')

@section('content')
  <div class="col-sm-8 blog-main">
    <h1>Create a new post</h1>
    <form action="/posts" role="form" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="body">Body:</label>
        <textarea name="body" id="body" class="form-control" rows="8" cols="80"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Publish</button>
    </form>
  </div>
@endsection
