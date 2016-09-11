@extends('Blade_code.header_footer_2')
 @section('top_header')


  <div class="container">
  <div class="main_items">
    <div class="question">
      <div class="ques_title">
        <h3>{{ $question->ques_title }}</h3>
      </div>
             <hr>
      <div class="ques_detail">
      <div class="row">
      <div class="col-md-1">5 <span class="glyphicon glyphicon-thumbs-up"></span></div>
      <div class="col-md-9">
      <p style="background-color:#FFFFF1"><?php echo nl2br($question->ques_detail); ?> </p>
      </div>
      
      <div class="col-md-2"></div>
      </div>
      
      <hr>
      <div style="border:solid black 1px; background-color: #ffffe2 "><h5>Result of the Question - {{$count}} Answers </h5></div>
      <br><br>

      <div class="answer">
      <hr>
      @foreach($answer as $answers)
      <div class="row">
      <div class="col-md-1">
      <a href="#">{{ App\User::find($answers->user_id)->pluck('name') }}</a>
      </div>
      
      <div class="col-md-9">
      <p>Answer: {!!html_entity_decode($answers->answer)!!}</p>
      </div>
      </div>
      <hr>
  @endforeach
      </div>

      
<hr>
     
      <div class="row">
      <div class="col-md-9">
      <h4>Your Answer</h4>
      
      {!! Form::open(array('url' => 'answer/store', 'method'=>'POST')) !!}
   
       <textarea class="form-control" name="answer" rows="4" cols="10" id="answer"></textarea>
        
         <br>
        <input type="hidden" name="ques_id" value="{{ $question->id }}">
         <?php
     $userId = Auth::id();
     
     ?>
      <input type="hidden" name="user_id" value="<?php
    echo $userId;
     ?>">
        <button type="submit" class="btn btn-default" >Add Answer</button> 
          
        {!! Form::close() !!}
<script>
           CKEDITOR.replace( 'answer' );
        </script>
        </div>
        </div>
      </div>

  </div>
</div>
</div>
 @section('footer')

      @endsection
        @endsection
        