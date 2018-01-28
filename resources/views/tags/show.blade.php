@extends('layouts.app')

@section('content')

<h3>{{ __('blog.showing_tag') }} {{ $tag->name }}</h3>

@include('posts._posts_list', ['posts' => $tag->posts])

@endsection
