@extends('layouts.app')

@section('content')
<h3>Latest Posts</h3>
<span>{!! $posts->links() !!}</span>

    @include('posts._posts_list')

{!! $posts->links() !!}
@endsection
