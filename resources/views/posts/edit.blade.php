@extends('layout/app')
@section('title') 
Edit Posts
@endsection
@section('data')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Edit a post:{{$post->id}}</h1>

        <!-- each form should has a route to go to after clicking submitting. -->
        <form action="{{url('/posts/update',$post->id)}}" method="post">
            @csrf  
            <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}" />
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea rows="5" name="body" class="form-control">{{$post->body}}</textarea>
                <!-- textarea does not have value parameter by defalut -->
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Edit
                </button>
            </div>
            
        </form>
    </div>
    
</div>	   
@endsection