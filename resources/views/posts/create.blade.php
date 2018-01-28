@extends('layouts.app')

@section('content')
<article>

    <h3>Create a new post</h3>

    <div class="form-group">
        <label>Title</label>
        <input class="form-control" name="title"></input>
    </div>
    <div class="form-group">
         <label>Article</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" id="" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select name="tags[]" id="" class="form-control" multiple="">
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="col-md-4 col-md-offset-4 btn btn-success btn-blocl">Send Post</button>
    </div>


</article>
@endsection
