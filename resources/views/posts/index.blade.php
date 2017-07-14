@extends('layouts.master')

@section('content')
  @if (count($posts) > 0)
    @foreach ($posts as $post)
        @include('posts.post')
    @endforeach
  @endif
@endsection
