
{{ csrf_field() }}

<div class="form-group">
        <label>Title</label>
        <input class="form-control" name="title" value="{{ old('title', $post->title) }}"></input>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
             <label>Preview</label>
            <textarea name="preview" id="" cols="30" rows="4" class="form-control">{{ old('preview', $post->preview) }}</textarea>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach($categories as $category)
                        <option @if($category->id == old("category_id", $post->category_id)) selected="" @endif value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Tags</label>
                <select name="tags[]" id="" class="form-control" multiple="">
                    @foreach($tags as $tag)
                        <option @if(in_array($tag->id, old("tags", $post->tags->pluck('id')->toArray()))) selected="" @endif value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
         <label>Article</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control">{{ old('body', $post->body) }}</textarea>
    </div>


    <div class="form-group">
        <button type="submit" class="col-md-4 col-md-offset-4 btn btn-{{$class}} btn-blocl">{{ $label }}</button>
    </div>
