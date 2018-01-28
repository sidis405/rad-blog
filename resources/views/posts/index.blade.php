@extends('layouts.app')

@section('content')
<h3>{{ __('blog.home_list_title') }}</h3>
<span>{!! $posts->links() !!}</span>

    @include('posts._posts_list')

{!! $posts->links() !!}
@endsection
