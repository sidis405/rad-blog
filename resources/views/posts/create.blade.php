@extends('layouts.app')

@section('content')
<article>

    <h3>Create a new post</h3>

    <form method="POST" action="/posts">

        @include('posts._form')

    </form>



</article>
@endsection
