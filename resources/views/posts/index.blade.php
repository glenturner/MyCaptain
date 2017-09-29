@extends('layouts.blog')

@section('content')
    <h1>Blog</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="containerBlogIndex">
                <div class="card" id="blog_index">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/captain_planes-1.svg">
                    </div>

                    <div class="card-content" id="blog_content">
                    <span class="card-title activator grey-text text-darken-4">{{$post->title}}<i
                                class="material-icons right">more_vert</i></span>
                        <div class="chip">Written on {{$post->created_at}} by {{ $post->user->name }} </div>
                        @if(!Auth::guest())
                            <hr>
                            @if(Auth::user()->id == $post->user_id)
                                {!!Form::open (['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'waves-effect red btn', 'onclick' => "Materialize.toast('Post Deleted', 6000)" ])}}
                                {!! Form::close() !!}
                            @endif
                        @endif

                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{$post->title}}<i
                                    class="material-icons right">close</i></span>
                        <p>{!!$post->body!!}</p>
                        @if(!Auth::guest())
                            @if(Auth::user()->id == $post->user_id)
                                <a href="/posts/{{$post->id}}/edit" class="btn-floating right btn-large blue">
                                    <i class="large material-icons">mode_edit</i>
                                </a>
                            @endif
                        @endif

                    </div>
                </div>
                @endforeach
                @else
                    <p>No posts found</p>
                @endif
                @endsection
            </div> <!-- End of Container -->
