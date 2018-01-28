@extends('layouts.app')

@section('content')
<article>

    <h3>{{ $post->title }}</h3>
    <span>{{ $post->created_at->format('d/m/Y H:i') }}</span>

    <hr>

    <p>
        {!! nl2br($post->body) !!}
    </p>

</article>
@endsection
