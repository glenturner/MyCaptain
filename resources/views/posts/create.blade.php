@extends('layouts.profile')

@section('create')
    <h1>Create Blog Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="row">
                <div class="input-field col s9">
                    {{Form::text('title', '', ['class' => 'input-field', 'data-length' => '100'])}}
                    <label for="title">Title</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {{Form::textarea('body', '', [/*'id' => 'article-ckeditor',*/ 'class' => 'materialize-textarea'])}}
                    <label for="body"></label>
                </div>
            </div>

    <button class="waves-effect blue btn" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
    </button>
    {!! Form::close() !!}

@endsection

