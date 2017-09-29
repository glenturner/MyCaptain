@extends('layouts.profile')



@section('home')
    <section id="content">
        <div class="container">
            <div id="profile-page" class="section">
                <!-- profile-page-header -->
                <div id="profile-page-header" class="card">
                    <div class="card-image waves-effect waves-block waves-light" id="header-img">
                        <img class="activator" src="images/captain_planes-1.svg" alt="user background">
                    </div>
                    {!! Form::open(['action' => ['HomeController@update', Auth::user()->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data'])!!}
                    <figure class="card-profile-image">
                        <img src="/storage/profile_images/{{Auth::user()->profile_image}}" alt="profile image"
                             class="circle z-depth-2 responsive-img activator profile-photo">
                        <div class="file-field input-field">
                            <button class="button">
                                <span>Upload</span>
                                {{Form::file('profile_image')}}
                            </button>
                            <br><br>
                            <button class="waves-effect  light-blue darken-4 btn" type="submit" name="action">Save
                            </button>
                    </figure>
                    {!! Form::close() !!}
                    <div class="card-content">
                        <div class="row">
                            <div class="col s3 offset-s2">
                                <h4 class="card-title grey-text text-darken-4">{{ Auth::user()->name }}</h4>
                                <p class="medium-small grey-text">Captain</p>
                            </div>
                            <div class="col s2 center-align">
                                <h4 class="card-title grey-text text-darken-4">Email</h4>
                                <p class="medium-small grey-text">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="col s2 center-align">
                                <h4 class="card-title grey-text text-darken-4"></h4>
                                <p class="medium-small grey-text"></p>
                            </div>
                        </div> <!-- End of Row -->
                    </div> <!-- End Card Content -->


                    @endsection

                    @section('create')



                        <div id="profile-page-wall" class="col s12">
                            <div id="profile-page-wall-share" class="row">
                                <!-- Blog Section-->
                            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
                            <!-- Create Blog Post-->
                                <div class="col s12">
                                    <ul class="tabs tab-profile z-depth-1 light-blue darken-4">
                                        <li class="tab col s3"><a class="white-text waves-effect waves-light">
                                <span id="tab"><i
                                            class="material-icons">insert_comment</i>Create Blog Post...</a></span>

                                        </li>
                                    </ul> <!-- End of tab profile -->

                                    <!--Blog-->
                                    <div id="Blog" class="tab-content col s12  grey lighten-4">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                {{Form::text('title', '', ['class' => 'input-field', 'data-length' => '50'])}}
                                                <label for="title">Title</label>
                                            </div>
                                            <div class="offset-s4">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s12">
                                                <label for="body">{{--What's on your mind?--}}</label>
                                                {{Form::textarea('body', '', ['class' => 'materialize-textarea', 'data-length' => '2000', 'placeholder' => "What's on your mind?" ])}}
                                            </div>
                                            <button class="waves-effect  light-blue darken-4 btn" type="submit"
                                                    name="action"
                                                    value="{{ csrf_token() }}">Submit
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                {!! Form::close() !!}


                                @endsection

                                @section('userPosts')
                                    @if(count($posts) > 0)
                                        <h5>My Blog Posts</h5>
                                        @foreach($posts as $post)
                                            <div class="card blogCard col s12">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <img class="activator" src="images/captain_planes-1.svg">
                                                </div>


                                                <div class="card-content" class="blog_user">
                        <span class="card-title activator grey-text text-darken-4">{{$post->title}}<i
                                    class="material-icons right">more_vert</i></span>
                                                    <div class="chip">Written on {{$post->created_at}}
                                                    </div>
                                                    <hr>
                                                    {!!Form::open (['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    {{Form::submit('Delete', ['class' => 'waves-effect red btn'])}}
                                                    {!! Form::close() !!}

                                                </div>
                                                <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{$post->title}}<i
                                        class="material-icons right">close</i></span>
                                                    <p>{!!$post->body!!}</p>
                                                    <a href="/posts/{{$post->id}}/edit"
                                                       class="btn-floating right btn-large blue">
                                                        <i class="large material-icons">mode_edit</i>
                                                    </a>

                                                </div>
                                            </div>

                                        @endforeach

                                    @else
                                        <p></p>
                                    @endif
                            </div>
                            @endsection


                        </div> <!-- End of Profile page header -->
                </div> <!-- End of Profile page Section -->
            </div>
        </div>
    </section> <!-- End of Content Section -->

    @section('footer')
    <footer class="page-footer white">
        <div class="footer-copyright" id="footer">
            <div class="container">
                <span>Copyright © 2017 <a class="grey-text text-lighten-4" href="http://glenturner.net" target="_blank">Turner Technologies</a> All rights reserved.</span>
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4"
                                                                href="http://glenturner.net">Turner Technologies</a></span>
                <span id="airplane"<i class="material-icons center">airplanemode_active</i>
            </div>
        </div>
    </footer>
        @endsection