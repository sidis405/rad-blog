<h3>Sidebar</h3>

@auth
    <div>
        <a href="/posts/create" class="btn btn-success btn-block">Create Post</a>
    </div>
@endauth

<div class="panel panel-default">
    <div class="panel-heading">Categories</div>
    <div class="panel-body">
        This is the Sidebar
        <hr>
        <CategoryList></CategoryList>
    </div>
</div>
