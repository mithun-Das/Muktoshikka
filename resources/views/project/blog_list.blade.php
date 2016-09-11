<!DOCTYPE HTML>
<html>
	<head>

		<title>ব্লগ তালিকা ঃমুক্তশিক্ষা</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href= " {{URL::asset('mithun_new_template/css/main.css')}}" />
		
	</head>

	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="#">মুক্তশিক্ষা</a></h1>
						<nav class="links">
							<ul>
					              <li><a href="userhome">হোম পেইজ </a></li>
					              <li><a href="userabout"> ব্যাক্তিগত তথ্য</a></li>
					              <li><a href="blog_list">ব্লগ</a></li>
					              <li><a href="usercontact">যোগাযোগ</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">খুঁজুন</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
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

                           @foreach($blog as $data)

							<article class="post">
                            

								<header>
									<div class="title">
										<h2><a href="#"></a></h2>
										<p>{{  $data->blog_title }}</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{  $data->created_date }}</time>
										<a href="#" class="author"><span class="name">{{ session('username') }}</span><img src="{{URL::asset('mithun_new_template_images/avatar.jpg')}}" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><!--<img src="pic01.jpg')" alt="" />--></a>
								<p>{{ $data->blog }}</p>
								<footer>
									<ul class="actions">
										<li><a href="{{ route('single_blog',['id' => $data->id]) }}" class="button big">বিস্তারিত পড়ুন</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
							
								</footer>
                            
                            
								
							</article>

						@endforeach	

					

						<!-- Post -->
						

						<!-- Pagination -->
						<!--	<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>  -->

					</div>

				<!-- Sidebar -->

					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="{{URL::asset('mithun_new_template_images/logo.jpg')}}" alt="" /></a>
								<header>
									<h2>মুক্তশিক্ষা </h2>
									<p>জ্ঞানের চর্চা হোক বাংলাতে<a href="http://html5up.net">    </a></p>
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#">    </a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
												<a href="#" class="author"><img src="{{URL::asset('mithun_new_template_images/avatar.jpg')}}" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="{{URL::asset('mithun_new_template_images/pic04.jpg')}}" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#">  </a></h3>
												<time class="published" datetime="2015-10-19">October 19, 2015</time>
												<a href="#" class="author"><img src="{{URL::asset('mithun_new_template_images/avatar.jpg')}}" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="{{URL::asset('mithun_new_template_images/pic05.jpg')}}" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#"   </a></h3>
												<time class="published" datetime="2015-10-18">October 18, 2015</time>
												<a href="#" class="author"><img src="{{URL::asset('mithun_new_template_images/avatar.jpg')}}" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="{{URL::asset('mithun_new_template_images/pic06.jpg')}}" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#">    </a></h3>
												<time class="published" datetime="2015-10-17">October 17, 2015</time>
												<a href="#" class="author"><img src="{{URL::asset('mithun_new_template_images/avatar.jpg')}}" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="{{URL::asset('mithun_new_template_images/pic07.jpg')}}" alt="" /></a>
										</article>

								</div>
							</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="#">    </a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
											</header>
											<a href="#" class="image"><img src="{{URL::asset('mithun_new_template_images/pic08.jpg')}}" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">    </a></h3>
												<time class="published" datetime="2015-10-15">October 15, 2015</time>
											</header>
											<a href="#" class="image"><img src="{{URL::asset('mithun_new_template_images/pic09.jpg')}}" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#"></a></h3>
												<time class="published" datetime="2015-10-10">October 10, 2015</time>
											</header>
											<a href="#" class="image"><img src="{{URL::asset('mithun_new_template_images/pic09.jpg')}}" alt="" /></a>
										</article>
									</li>
							<!--		<li>
										<article>
											<header>
												<h3><a href="#">Magna enim accumsan tortor cursus ultricies</a></h3>
												<time class="published" datetime="2015-10-08">October 8, 2015</time>
											</header>
											<a href="#" class="image"><img src="images/pic11.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">Congue ullam corper lorem ipsum dolor</a></h3>
												<time class="published" datetime="2015-10-06">October 7, 2015</time>
											</header>
											<a href="#" class="image"><img src="images/pic12.jpg" alt="" /></a>
										</article>
								-->	</li>
								</ul>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; ডিজাইনার: <a href="http://html5up.net">মুক্তশিক্ষা গ্রুপ </a>. <a href="http://unsplash.com"></a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="{{URL::asset('mithun_new_template/js/jquery.min.js')}}"></script>
			<script src="{{URL::asset('mithun_new_template/js/skel.min.js')}}"></script>
			<script src="{{URL::asset('mithun_new_template/js/util.js')}}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="{{URL::asset('mithun_new_template/js/main.js')}}"></script>

	</body>
</html>