<!DOCTYPE HTML>

<html>
	<head>
		<title>{{ session('blog_title') }} </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{URL::asset('mithun_new_template/css/main.css')}}" />
		
	</head>
	<body class="single">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="#">মুক্তশিক্ষা</a></h1>
						<nav class="links">
							<ul>
					              <li><a href="{{route('userhome') }}">হোম পেইজ </a></li>
					              <li><a href="{{route('userabout') }}"> ব্যাক্তিগত তথ্য</a></li>
					              <li><a href="{{route('blog_list') }}">ব্লগ</a></li>
					              <li><a href="{{route('usercontact') }}">যোগাযোগ</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">খুঁজুন</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="খুঁজুন" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<li><a href="#" class="button big fit">Log In</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#"></a></h2>
										<p> {{ session('blog_title') }} </p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{ session('created_date') }}</time>
										<a href="#" class="author"><span class="name">{{ session('username') }}</span><img src= "{{URL::asset('mithun_new_template_images/avatar.jpg')}}" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="{{URL::asset( session('picture')) }} " alt="" /></span>
								<p> {{ session('blog_detail') }} </p>
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>




<!--******************************************************-->



		<div id="disqus_thread"></div>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>



<iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>




<!-- ************************************************* -->





					</div>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; ডিজাইনার: <a href="http://html5up.net">মুক্তশিক্ষা গ্রুপ</a>.  <a href="http://unsplash.com"></a>.</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="{{URL::asset('mithun_new_template/js/jquery.min.js')}}"></script>
			<script src="{{URL::asset('mithun_new_template/js/skel.min.js')}}"></script>
			<script src="{{URL::asset('mithun_new_template/js/util.js')}}"></script>
			<script src="{{URL::asset('mithun_new_template/js/main.js')}}"></script>
			

<!-- <script id="dsq-count-scr" src="//EXAMPLE.disqus.com/count.js" async></script> -->

	</body>
</html>