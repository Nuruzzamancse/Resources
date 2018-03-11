@extends('layouts.app')

@section('content')

<div class="col-md-9 col-lg-9 col-sm-9 pull-left">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->

      <!-- Jumbotron -->
      <div class="wel well-lg">
        <h1> {{ $project->name }}</h1>
        <p class="lead">{{ $project->description }}</p>
        <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row" style="background:white;margin:10px">
          {{--<a class="pull-right btn btn-default btn-sm" href="/projects/create">Add Project</a>--}}

       <br>

          @include('partials.comments')

          <div class="row container-fluid">

          <form method="post" action = "{{ route('comments.store')}}">

              {{csrf_field()}}

              <input type="hidden" name="commentable_type" value="App\Project">
              <input type="hidden" name="commentable_id" value="{{$project->id}}">


              <div class="form-group">
                  <label for="comment-content">Comment</label>
                  <textarea
                          placeholder="Enter comment"
                          style="resize: vertical"
                          id="comment-content"
                          name="body"
                          rows="3" spellcheck="false"
                          class="form-control autosize-target text-left">

                        </textarea>

              </div>


              <div class="form-group">
                <label for="comment-content">Proof of work done (Url/photos)</label>
            <textarea
                    placeholder="Enter url or screenshots"
                    style="resize: vertical"
                    id="comment-content"
                    name="url"
                    rows="2" spellcheck="false"
                    class="form-control autosize-target text-left">

            </textarea>

              </div>



                  <div class="form-group">
                      <input type="submit" class="btn btn-primary"
                             value="Submit"
                      />
                  </div>



























              {{--</div>--}}

          </form>

          </div>










      {{--@foreach($project->projects as $project )--}}
        {{--<div class="col-lg-4">--}}
          {{--<h2> {{$project->name }} </h2>--}}
          {{--<p class="text-danger">{{$project->description }}</p>--}}
          {{--<p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View Projects »</a></p>--}}
        {{--</div>--}}

      {{----}}

        {{--@endforeach--}}
       
      </div>

     

    </div>

    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <!-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->


        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{$project->id}}/edit"> <i class="fas fa-edit"></i> Edit</a></li>
                <li><a href="/companies/create">Create new project</a></li>
              <li><a href="/projects">My Projects</a></li>

                <br/>

                @if($project->user_id == Auth::user()->id)

                <li>


                  <a
                          href="#"
                          onclick="
                  var result = confirm('Are you sure you wish to delete this project?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                  >
                      <i class="fas fa-minus-circle"></i>  Delete
                  </a>

                  <form id="delete-form" action="{{ route('companies.destroy',[$project->id]) }}"
                        method="POST" style="display: none;">
                      <input type="hidden" name="_method" value="delete">
                      {{ csrf_field() }}
                  </form>


              </li>

            @endif




            </ol>

            <hr/>

            < hr class="row">


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Add members</h4>
                    <form id="delete-form" action="{{ route('projects.adduser') }}"
                          method="POST">

                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Add</button>
                                    </span>
                                </div><!-- /input-group -->
                    </form>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->

            <h4>Team Members</h4>
            <ol class="list-unstyled">
                <li><a href=""> Nuruzzaman Partner</a></li>
                <li><a href=""> Nuruzzaman Partner</a></li>
                <li><a href=""> Nuruzzaman Partner</a></li>
                <li><a href=""> Nuruzzaman Partner</a></li>

            </ol>

          </div>


         
        </div>

    @endsection