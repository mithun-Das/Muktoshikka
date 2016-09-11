@extends('Blade_code.header_footer_2')
@section('top_header')
 {!! Html::Script('js/ckeditor/ckeditor.js') !!}
  <div class="container">
  <div class="add_ques">

    
        {!! Form::open(array('url' => 'question/store', 'method'=>'POST')) !!}
      
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <div class="row">
      <div class="col-sm-8">
      <div class="ques_title">
      <h3>Title</h3>
     
       <div class="title_form">
        <div class="row">
      <div class="col-sm-12">
       <input type="text" class="form-control" name="ques_title" maxlength="80"  placeholder="Title of your question...">
       </div>
       </div>
       </div>
       </div>
       <br><hr>      
       <div class="form-group"">
       <textarea class="form-control" name="ques_detail" rows="7" placeholder="Details about your question..." id="comment"></textarea>
       </div>
       <script>
           CKEDITOR.replace( 'ques_detail' );
        </script>
  </div>
      </div><br/>
   <br>
   <hr>

      <div class="csc">
      <div class="row">
      <div class="col-md-3">
        <div class="tag_class">
             <h4>Choose Class:<br></h4>
          <select name="class">
  <option value="class6">Class Six</option>
  <option value="class7">Class Seven</option>
  <option value="class8">Class Eight</option>
  <option value="ssc">SSC</option>
  <option value="hhc">HSC</option>
  
  </select>
        </div>
        </div>
        <div class="col-md-3">
              <div class="tag_subject">
          <h4>Choose Subject:<br></h4>
          <select name="subject">
  <option value="*">All</option>
  <option value="bangla">বাংলা</option>
  <option value="math">গণিত</option>
  <option value="phy">পদার্থ</option>
  <option value="chem">রসায়ন</option>
  
  <option value="eng">ইংরেজী</option>
  <option value="ssci">সামাজিক বিজ্ঞগান</option>
  <option value="rel">্ধর্ম</option>
  </select>
        </div>
      </div>

  <div class="col-md-3">
                  <div class="tag_chapter">
                <h4>Chapter:<br></h4>
          <select name="chapter">
  <option value="ch1">প্রথম অধ্যায়</option>
  <option value="ch2">দ্বিতীয় অধ্যায়</option>
  <option value="ch3">তৃতীয় অধ্যায়</option>
  <option value="ch4">চতুর্থ অধ্যায়</option>
  <option value="ch5">পঞ্চম অধ্যায়</option>
  <option value="ch6">ষষ্ঠ অধ্যায়</option>
  <option value="ch7">সপ্তম অধ্যায়</option>

  </select>
        </div>
      </div>
</div>
</div>
<br><hr>
<br>
 <div class="col-sm-6">
      <div class="tags">
      <h3>Add Tag</h3><h4></h4>
     
       <div class="title_form">
      <input type="text" class="form-control" name="tag" maxlength="80"  placeholder="Add Tags...">
       </div>
     </div>
     <br><br>
     <?php
     $userId = Auth::id();
     
     ?>
      <input type="hidden" name="id" value="<?php
    echo $userId;
     ?>">
       <button class="btn btn-success" type="submit">Add Question</button>
      </div>
   
    {!! Form::close() !!}
 
</div>

  </div>
  <br><br><br><br>
  </div>
  
  @endsection