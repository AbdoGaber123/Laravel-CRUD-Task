@extends('layout/app')

@section('title')
Home Page
@endsection

@section('design')
.parallax__layer {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index:-100000;
}	
.content {
    text-align: center;
    font-size: 120px;
    font-weight: 800;
    font-family: 'Oswald', sans-serif;
    position: relative;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  
}
.top-color{
  color: rgba(169, 118, 142, 0.6);
}
.bottom-color{
  color: rgba(100, 194, 200, 0.6);
}
@endsection
@section('home')
      <div class="parallax__layer">
        <div class="content top-color" style="text-align: center">CRUD OPERATIONS TASK</div>
      </div>
@endsection