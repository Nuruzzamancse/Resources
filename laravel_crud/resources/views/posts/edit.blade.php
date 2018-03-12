@extends('posts.master')

@section('content')
    <div class="row">
        <div class="pull-left">
            <h3>Edit Post</h3>
        </div>
    </div>

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <strong>Whoops!!</strong>There was some problem with your input
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
            </ul>
        </div>
        @endif

    {!! Form::model($post,['method'=>'PATCH','route'=>['posts.update',$post->id]]) !!}

        @include('posts.form')
    {!! Form::close() !!}

    @endsection