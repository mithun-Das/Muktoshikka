@extends('Blade_code.header_footer_2')

@section('top_header')
<!--Content-->



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
          <div style="display:inline; float:right;">
            <button type="button" onclick="location.href='question/create'" class="btn btn-outline-success">প্রশ্ন করুন</button>
               <button type="button" class="btn btn-outline-success">পরীক্ষা দিন</button>
             <button type="button" class="btn btn-outline-success">ব্লগ লিখুন</button>
              <button type="button" class="btn btn-outline-success">বই পড়ূন</button>
                <button type="button" class="btn btn-outline-success">আর্টিকেল</button>
          </div>
        </div>
          </div>
        </div>
        
        


 
      <div class="row">
        <div class="col-md-3">
          <h4 style="padding-bottom:10px; margin-top:20px;border-bottom: solid #E4E6E8 1px;">সকল প্রশ্ন</h4>
        </div>
         <div class="col-md-4">
         <ul class="ques_sort">

       <li style="display:inline;"><button type="button" onclick="location.href='votes'" class="btn btn-default">ভোট</button></li>

        <li  style="display:inline;"><button type="button" onclick="location.href='noans'" class="btn btn-default">উত্তর নেই</button></li>

         <li  style="display:inline;"> <button type="button" onclick="location.href='newest'" class="btn btn-default">সাম্প্রতিকতম</button></li>
         </ul>
         </div>
      </div>     
  
      <br>

            <div class="row">
        <div class="col-md-8" style="background:#f7f8f0;">
         @foreach($users10 as $user)
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
     <h4>ক্লাস অনুযায়ী প্রশ্ন</h4>
     <ul>
     
     </ul>
     <hr>
      <h4>টিউটোরিয়াল</h4>
     <ul>
       <li><a>চ্যাটে চ্যাটে ইংরেজী শিখুন - মিথুন দাস</a></li>
        <li><a>জেনে নিন পুল আপ দেওয়ার কিছু সহজ উপায় - আআআ</a></li>
       <li><a>নাচের ১২১টি সহজ স্টেপ-Urmee Pal</a></li>
       <li><a>মিষ্টী কথায় মন ভুলানো ফাফর দিতে চান? - সাইফুল ইসলাম সাইফ</a></li>
      
     </ul>
       </div>
</div>
</div>

 @section('footer')

      @endsection
        @endsection