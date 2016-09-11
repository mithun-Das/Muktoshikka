@include('project.include.userhome_header')

    <div class="content">

         {!! Form::open(array('route' => 'postuserhome', 'class' => 'formRegister' , 'id' => 'blogsave' , 'method'=>'POST')) !!}
                       
       <div class="row">
            <div class="col-md-12">
            <div class="blog_title">
            <h3>লিখুন আপনার ব্লগ</h3>
    
       <div class="title_form">
        
               <input type="text" class="form-control" name="blog_title" id = "title" placeholder="ব্লগের শিরোনাম....">


             </div>
             </div>
          
       <div class="form-group">
       
                <textarea class="form-control" name="blog_detail" rows="10" placeholder="বিস্তারিত লিখুন এইখানে....." id="detail"></textarea>
       </div>

          <button class="btn btn-success" type="submit" id = "submit">সাবমিট</button>

      </div>
   </div>

      


     {!! Form::close() !!}


    	<h1> আপনার সর্বশেষ ব্লগ </h1>

    <div id= "last_blog" class = "content">

     {{  session('last_blog') }}



    </div>
  

 </div>
    <div class="clear"></div>
</div> 


   @include('project.include.userhome_footer')



<!--

<script  type = "text/javascript">
  
$(document).ready( function(){

  $('#submit').on('click' , function(e){

    // e.preventDefault();
   
    //var data = $(".formRegister").serialize();

    

     $.ajax({
     
          type   :  'POST' ,
          url    :  '{!! URL::route('postuserhome')   !!}',

          //url: 'postuserhome',
          //data   :   data,
          data : {'blog_title':$('input[name=blog_title]').val(),      'blog_detail':$("textarea#detail").val(),      '_token':$('input[name=_token]').val()},

          success : function(data){

            console.log(data);

            $(".formRegister")[0].reset();
          },
          error : function(data){
            
          }

     });


       //$("#last_blog").hide();
      //$("#last_blog").show();

    // return false;

  });

});


</script>


-->