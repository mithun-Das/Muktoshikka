<!DOCTYPEHTML>
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
    <script src="JS/isotope.pkgd.js"></script>
{!! Html::style('css/mukto-style.css') !!}

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
      <li><a href="register"><span class="glyphicon glyphicon-user"></span> নিবন্ধন করুন</a></li>
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> লগ ইন </a></li>
    </ul>
  </div>
</nav>

<!--Content-->

 <div class="row">
  <div class="col-md-3">
    <ul class="side_nav">

      @foreach($classes as $class)
    <li>
    <a href="{{route('subjectcategory',['class'=>$class->class_id,'subject' => $class->subject_id ])}}"><h4 class="panel-title">
           {{$class->subject}}
        </h4></a>
           
  </li>


@endforeach



</ul>
        </div>
    
      

        <div class="col-md-5">
        <div class="grid">
        <h3 style="text-align:center;">Questions on Class 6</h3>
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">
           @foreach($users10 as $user) 

      
         <div class="grid-item {{ $user->chapter}}" style="width:100%;">
            <a href = "{{ route('a2q',['id' => $user->id ]) }}"><h4 style="color:#3FAFD5;">{{ $user->ques_title }}</h4></a>
            <?php
            $string = strip_tags( $user->ques_detail );

if (strlen($string) > 100) {

    // truncate string
    $stringCut = substr($string, 0, 100);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'.........'; 
}
?>
            <h5>{!!html_entity_decode($string)!!}</h5>
        <br></div>
     
       @endforeach
        </div>
    </div>
       </div>
       </div>
        </div>
        

 

</body>
</html>

