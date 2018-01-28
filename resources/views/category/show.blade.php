@extends('layouts.app')

@section('content')

<h3>{{ __('blog.showing_category') }} {{ $category->name }}</h3>

@include('posts._posts_list', ['posts' => $category->posts])

@endsection
