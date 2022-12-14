@extends('layouts.app')
@section('content')
<div class="cont">
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Post</h2>

            </div>



        </div>

    </div>



    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif



    <form action="{{ route('posts.update',$post->id) }}" method="POST">

        @csrf

        @method('PUT')



         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Content:</strong>

                    <textarea class="form-control" style="height:150px" name="content" placeholder="Write a post">{{ $post->content }}</textarea>

                </div>

            </div>

           <div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-outline-primary m-3">Edit</button>

              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                  <a class="btn btn-outline-danger" href="{{ route('posts.index') }}"> Back</a>

              </div>
           </div>

        </div>



    </form>
</div>

@endsection
