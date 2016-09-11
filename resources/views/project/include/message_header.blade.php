<!DOCTYPE HTML>
<html>
  <head>
    <title>মুক্তশিক্ষা | সোশ্যাল সাইট</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('mithun_images/logo.PNG')}}" />
      <link href="{{URL::asset('mithun_message_css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <script type="text/javascript">
      $(window).load(function(){
        $('div.description').each(function(){
          $(this).css('display', 'block');
        });
        
        $('div.content-top-grid').hover(function(){
          $(this).children('.description').stop().fadeTo(500, 1);
        },function(){
          $(this).children('.description').stop().fadeTo(500, 0);
        });
        
      });
  </script>
  <!---start-blog---->
  <script type="text/javascript" src="{{URL::asset('mithun_message_js/jquery.easing.min.js')}}"></script> 
  <script type="text/javascript" src="{{URL::asset('mithun_message_js/jquery.mixitup.min.js')}}"></script>
  <script type="text/javascript">
  $(function () {
    
    var filterList = {
    
      init: function () {
      
        // MixItUp plugin
        // http://mixitup.io
        $('#portfoliolist').mixitup({
          targetSelector: '.portfolio1',
          filterSelector: '.filter',
          effects: ['fade'],
          easing: 'snap',
          // call the hover effect
          onMixEnd: filterList.hoverEffect()
        });       
      
      },
      
      hoverEffect: function () {
      
        // Simple parallax effect
        $('#portfoliolist .portfolio1').hover(
          function () {
            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
            $(this).find('img').stop().animate({top: -2}, 500, 'easeOutQuad');        
          },
          function () {
            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');               
          }   
        );        
      
      }

    };
    
    // Run the show!
    filterList.init();
  }); 
  </script>
  <!---//start-blog---->
  </head>
  <body>
    <!---start-wrap---->
    <div class="wrap">
    <!---strat-header---->
    <div class="header"> 
      <div class="logo">
        <a href="index.html"> </a>
      </div>
      <div class="top-nav">
        <ul>
          <li><a href="index.html"> <span> </span></a></li>
          
          <li><a href="userhome">হোম পেইজ</a></li>
          <li><a href="userabout">ব্যাক্তিগত তথ্য</a></li>
          <li><a href="blog_list">ব্লগ</a></li>
          <li><a href="usercontact">যোগাযোগ</a></li>
          <li><a href="#">ভিডিও</a></li>
          <div class="clear"> </div>
        </ul>
      </div>
      <div class="clear"> </div>
    </div>
    </div>
    <!---//End-header---->
    <!---start-content---->
    <!---start-blog---->
    <div class="blog">
      <div class="wrap">
        <div class="blog-header">
          <h3>মুক্তশিক্ষা</h3>
        </div>
      </div>
      <ul id="filters" class="clearfix">
        <div class="wrap"> 
            <li><span class="filter active" data-filter="app card icon logo web">All</span></li>
            <li><span class="filter" data-filter="app">App</span></li>
            <li><span class="filter" data-filter="card">Design</span></li>
            <li><span class="filter" data-filter="icon">Mobile</span></li>
            <li><span class="filter" data-filter="web">Technology</span></li>
            <div class="clear"> </div>
        </div>
      </ul>