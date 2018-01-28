@extends('layouts.app')

@section('content')
<h3>Latest Posts</h3>

            @foreach($posts as $post)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                    </div>

                    <div class="panel-body">
                        {{ $post->preview }}
                    </div>
                    <div class="panel-footer">
                        {{-- {{ $post->created_at->diffForHumans() }} --}}
                        {{ $post->created_at->format('d/m/Y H:i') }}
                    </div>
                </div>

            @endforeach
@endsection
