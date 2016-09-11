@extends('Blade_code.Header_footer')
@section('top_header')

@section('lower_header')


    <div class="container">
      <div class="row" style="margin-top:50px;margin-bottom:40px;">
      <div>
        <div class="col-md-2" style="margin-top:-19px;">
          <img src="/Image/Untitled.png" height="81" width="108" style="margin-left:36px;">
            <p style="margin-left:30px;">একটি বাংলা জ্ঞানকোষ</p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <br>
          <div style="display:inline; float:right;" class="home_button">
            <button type="button" onclick="location.href='question/create'" class="btn btn-default">প্রশ্ন করুন</button>
               <button type="button" class="btn btn-default">পরীক্ষা দিন</button>
             <button type="button" class="btn btn-default">ব্লগ লিখুন</button>
              <button type="button" class="btn btn-default">বই পড়ূন</button>
                <button type="button" class="btn btn-default">আর্টিকেল</button>
          </div>
        </div>
          </div>
        </div>
        <hr>
        
         <div class="row">
        <div class="col-md-8" style="background:#f7f8f0;">
         @foreach($user10 as $user)
         <div class="row">
        <div class="col-md-2">
         
        </div>
        <div class="col-md-6" style=" margin-left:30px;">
        <div>
         <h4><strong><a href="{{ route('a2q',['id' => $user->id ]) }}" style="text-decoration:none;line-height:50%;"> {{$user->ques_title}}</a></strong></h4>
         
         <button type="button" class="btn btn-default btn-sm">{{$user->class}}</button>
         <button type="button" class="btn btn-default btn-sm">{{$user->subject}}</button>
         <button type="button" class="btn btn-default btn-sm">{{$user->chapter}}</button>
       
        </div>
        </div>
           </div><br>
         <div style="border-bottom:1px solid #e2e2df;"></div>

         @endforeach
     </div>
     
     <div class="col-md-4">
     <h4>নতুন ব্লগসমূহ</h4>
     <ul>
       <li><a>ব্লগ ১ - ইউজার</a></li>
       <li><a>স্ট্যাটিক রাউটিং </a></li>
       <li><a>ব্লগ ১ - ইউজার</a></li>
       <li><a>ব্লগ ১ - ইউজার</a></li>
       <li><a>ব্লগ ১ - ইউজার</a></li>
     </ul>
     <hr>
      <h4>টিউটোরিয়াল</h4>
     <ul>
       <li><a>টিউটোরিয়াল 1</a></li>
        <li><a>জেনে নিন পুল আপ দেওয়ার কিছু সহজ উপায় - আআআ</a></li>
       <li><a>নাচের ১২১টি সহজ স্টেপ-Urmee Pal</a></li>
       <li><a>টিউটোরিয়াল 4</a></li>
      
     </ul>
     </div>
     </div>

      </div>
      @section('footer')

      @endsection
        @endsection
          @endsection