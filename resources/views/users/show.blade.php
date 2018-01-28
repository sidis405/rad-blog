@extends('layouts.app')

@section('content')

<h3>{{ __('blog.showing_user') }} {{ $user->name }}</h3>

@include('posts._posts_list', ['posts' => $user->posts])

@endsection
