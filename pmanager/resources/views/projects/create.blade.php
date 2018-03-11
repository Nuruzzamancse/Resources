@extends('layouts.app')

@section('content')

    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">

        <h1>Create New project</h1>




        <!-- Example row of columns -->
        <div class="row col-md-12 col-lg-12 col-sm-12 " style="background:white;margin:10px">


            <form method="post" action = "{{ route('projects.store')}}">

                {{csrf_field()}}



                <div class="form-group">
                    <label for="project-name">Name<span class="required">*</span></label>

                    <input placeholder="Enter name"
                           id="project-name"
                           required
                           name="name"
                           spellcheck="false"
                           class="form-control"


                    />

                    <input type="hidden"
                            name="company_id"
                           value="{{$company_id}}"
                    >




                    @if($companies!=null)
                    <div class="form-group">
                        <div class="form-group">
                            <label for="company-content">Select company</label>
                            <select name="company_id" class="form-control">

                                @foreach($companies as $company)

                                <option value="{{$company->id}}">{{ $company->name }} </option>
                                    @endforeach

                            </select>

                        </div>
                        @endif




            <textarea
                    placeholder="Enter Description"
                    style="resize: vertical"
                    id="project-content"
                    name="description"
                    rows="5" spellcheck="false"
                    class="form-control autosize-target text-left">

            </textarea>

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary"
                               value="Submit"
                        />
                    </div>

                </div>

            </form>

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

                <li><a href="/projects">My projects</a></li>

            </ol>
        </div>

        <!-- <div class="sidebar-module">
          <h4>Memebers</h4>
          <ol class="list-unstyled">
            <li><a href="#">March 2014</a></li>
          </ol>
        </div> -->

    </div>

@endsection