@extends('layout/app')
@section('title') 
Create Posts
@endsection
@section('style')
	.require {
        color: #666;
        }
        label small {
        color: #999;
        font-weight: normal;
    }
@endsection

@section('data')
<h4 class="text-center">Adding new data to Database</h1>
<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
    		<h1>Create post</h1>

            <!-- each form should has a route to go to after clicking submitting. -->
    		<form action="{{url('/posts/insert')}}" method="post">
                @csrf  
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" />
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="body">Body</label>
    		        <textarea rows="5" class="form-control" name="body" ></textarea>
    		    </div>

    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
@endsection