<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title> মুক্ত শিক্ষা </title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="mystyle.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-book"></span> নীড়
</a>
    </div>
    <ul class="nav navbar-nav">
     <li><a href="#"><span class="glyphicon glyphicon-ask"></span> সহয়িকা</a></li> 
     <form class="navbar-form navbar-left" role="search">

      <li> <input type="text" class="form-control" placeholder="খুঁজুন"> </li> 
      </form>
      
   <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
         <span class="icon-bar"></span>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> নিবন্ধন করুন</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> লগ ইন </a></li>
    </ul>
  </div>
</nav>

<nav class="navbar navbar-default">
  <div class="container-fluid">
  <div class="navbar-header">
  <ul class="nav navbar-nav">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
       <a class="navbar-brand" href="#">বিশ্বজোড়া 
       পাঠশালা</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">নিম্ন মাধ্যমিক
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">ষষ্ঠ শ্রেণী</a></li>
          <li><a href="#">সপ্তম শ্রেণী</a></li>
          <li><a href="#">অষ্টম শ্রেণী</a></li> 
        </ul>
      </li>
    <li><a href="#">মাধ্যমিক</a></li> 
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">উচ্চ মাধ্যমিক
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">একাদশ</a></li>
          <li><a href="#">দ্বাদশ</a></li>
        </ul>
      </li>
      
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ভর্তি পরীক্ষা
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">মেডিকেল</a></li>
          <li><a href="#">ইঞ্জিনিয়ারিং</a></li>
          <li><a href="#">বিশ্ববিদ্যালয়</a></li> 
        </ul>
      </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-interrogation"></span> প্রশ্ন করুন</a></li>
      <li><a href="#"> পরীক্ষা দিন</a></li>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">নির্বাচিত প্রশ্ন
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">আর্টিকেলসমূহ</a></li>
          <li><a href="#">টিউটোরিয়াল</a></li>
          
        </ul>
      </li>    </ul>
      </div>
     </div>
</nav>


@yield('header')





</body>
</html>


@yield('footer')



