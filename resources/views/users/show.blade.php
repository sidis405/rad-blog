@extends('layouts.app')

@section('content')

<h3>Showing User: {{ $user->name }}</h3>

@include('posts._posts_list', ['posts' => $user->posts])

@endsection
