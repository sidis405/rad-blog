@extends('layouts.app')

@section('content')

<h3>Showing Category: {{ $category->name }}</h3>

@include('posts._posts_list', ['posts' => $category->posts])

@endsection
