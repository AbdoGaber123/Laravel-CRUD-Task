@extends('layout/app')
@section('title')
All Tasks
@endsection
@section('data')
<h4 class="text-center">Getting all data from Database</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Operations</th>
  
      </tr>
    </thead>
    <tbody>
      <!-- for each post item in the posts array -->
      @foreach($posts as $post)
      <tr>
        <th class = "col-12 col-lg-1 col-md-1" scope="row">{{$post->id}}</th>
        <td class = "col-12 col-lg-2 col-md-2">{{$post->title}}</td>
        <td class = "col-12 col-lg-7 col-md-9" >{{$post->body}}</td>
        <td class = "col-12 col-lg-2 col-md-2">
          <a class="btn btn-primary" href="{{url('/posts/edit',$post->id)}}" role="button">Edit</a>
          <a class="btn btn-danger" href="{{url('/posts/delete',$post->id)}}" role="button">Delete</a>
        </td>
  
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-danger" href="{{url('/posts/truncate')}}" role="button">Delete All</a>
  
@endsection