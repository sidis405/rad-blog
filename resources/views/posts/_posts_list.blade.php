@foreach($posts as $post)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><a href="/posts/{{ $post->id }}/{{ $post->slug }}">{{ $post->title }}</a></h4>
                        <div>
                            <span>
                                <a href="/users/{{$post->user->id}}">{{ $post->user->name }} </a>
                                in
                                <a href="/categories/{{$post->category->id}}/{{$post->category->slug}}">{{ $post->category->name }} </a>
                            </span>
                            <span class="pull-right">
                                    #tags:
                                    @foreach($post->tags as $tag)
                                        <a href="/tags/{{$tag->id}}/{{$tag->slug}}">{{$tag->name}} </a>
                                    @endforeach
                            </span>
                        </div>
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
