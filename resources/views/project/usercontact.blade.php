@extends('project.Blade_code.userpage')

@section('header')


     @section('sidebar')

     

     
    <div class="content">
    	<h1>যোগাযোগ</h1>
        
       {!! Form::open(array('route' => 'messagestore', 'method'=>'POST')) !!}



        	<div>
            	<span><label>নাম</label></span>
                <span><input type="text" name="name" /></span>
          </div>

        	<div>
               	<span><label>ই-মেইল</label></span>
                <span><input type="text" name="email" /></span>
          </div>

        	<div>

              	<span><label>বার্তা</label></span>
                <span><textarea name = "message"></textarea></span>
          </div>
            
        	<div>
                <span><input type="submit" value="Submit"></span>
          </div>
          
          {!! Form::close() !!}



    </div>
    <div class="clear"></div>
</div> 


     @endsection

     @section('footer')

     @endsection

@endsection


