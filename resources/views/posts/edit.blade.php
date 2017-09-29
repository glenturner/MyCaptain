@extends('layouts.layout')

@section('content')
    <h1>Edit Blog Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="row">
        <div class="input-field col s6">
            {{Form::text('title', $post->title, ['class' => 'input-field', 'data-length' => '100'])}}
            <label for="title">Title</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'materialize-textarea'])}}
            <label for="body"></label>
        </div>
    </div>
    {{Form::hidden('_method', 'PUT')}}

    <button class="waves-effect blue btn" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
    </button>
    {!! Form::close() !!}

@endsection

