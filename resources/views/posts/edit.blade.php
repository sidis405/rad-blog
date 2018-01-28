@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" />
@stop

@section('content')
<article>

    <h3>Update this post</h3>

    <form method="POST" action="{{ route('updatePost', $post) }}" enctype="multipart/form-data">

        {{ method_field('PATCH') }}

        @include('posts._form', ['label' => __('blog.update') . ' Post', 'class' => 'warning'])

    </form>



</article>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select').select2();
        });
    </script>
@stop
