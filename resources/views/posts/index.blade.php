@extends('layouts.default')

<!-- {{--
@section('title')
Blog Posts
@endsection
--}} -->

@section('title','Blog Posts')

@section('content')
<h1>Blog Posts</h1>
  <a href= "{{ url('/posts/create') }}" class="header-menu">New Post</a>
<ul>
  <!-- @foreach($posts as $post)
  <li><a href="">{{$post->title}}</a></li>
  @endforeach -->
  @forelse ($posts as $post)
  <!-- <li><a href="/posts/{{ $post->id }}">{{$post->title}}</a></li> -->
  <!-- <li><a href="{{ url('/posts', $post->id) }}">{{$post->title}}</a></li> -->
  <li>
  <a href="{{ action('PostsController@show', $post) }}">{{$post->title}}</a>
  <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
  </li>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
@endsection