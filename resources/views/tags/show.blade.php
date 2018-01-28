@extends('layouts.app')

@section('content')

<h3>Showing Tag: {{ $tag->name }}</h3>

@include('posts._posts_list', ['posts' => $tag->posts])

@endsection
