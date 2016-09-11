<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
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
						<li><span class="filter" data-filter="app">E-commerce</span></li>
						<li><span class="filter" data-filter="card">Misc</span></li>
						<li><span class="filter" data-filter="icon">Social Media</span></li>
						<li><span class="filter" data-filter="logo">Weather</span></li>
						<li><span class="filter" data-filter="web">Web</span></li>
						<div class="clear"> </div>
				</div>
			</ul>
			<div class="wrap"> 
			<div class="blog-grids" id="portfoliolist">
			<div class="content-top-grids-box portfolio logo1" data-cat="logo">
						<div class="content-top-grid">

<iframe width="315" height="315" src="https://www.youtube.com/embed/eHfhpAhGdvY" frameborder="0" allowfullscreen></iframe>
							
							
                            <!--


								<div class="description_content">
									<div class="description_content-left">
										<a href="#">June 28,2013</a>
									</div>
									<div class="description_content-right">
										<ul>
											<li><a href="iconsingle.html"><span> </span>328</a></li>
											<li><a href="iconsingle.html"><span> </span>12</a></li>
											<li><a href="iconsingle.html"><span> </span>128</a></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="clear"> </div>
								 </div>
							</div>
						</div>



					<div class="content-top-grid-title">
							<div class="content-top-grid-title-left">
								<h4><a href="iconsingle.html">Responsive Showcase</a></h4>
								<ul>
									<li><a href="iconsingle.html">Templates ,</a></li>
									<li><a href="iconsingle.html">PSD</a></li>
								</ul>
							</div>
							<div class="content-top-grid-title-right">
								<a href="iconsingle.html"> </a>
							</div>
							<div class="clear"> </div>
						</div>
				</div>
				<div class="content-top-grids-box portfolio web" data-cat="web">

				-->
<!--						

						<div class="content-top-grid-title-right">
								<a href="iconsingle.html"> </a>
							</div>

							-->
							<div class="clear"> </div>
						</div>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="clear"> </div>
			</div>
		</div>
		<!---//End-blog---->
		<!---//End-content---->
		<!---start-footer---->
		<div class="footer"> 
			<div class="wrap"> 
				<div class="footer-left">
					<ul>
					<li><a href="userhome">হোম পেইজ</a></li>
					<li><a href="userabout">ব্যাক্তিগত তথ্য</a></li>
					<li><a href="blog_list">ব্লগ</a></li>
					<li><a href="usercontact">যোগাযোগ</a></li>
					<li><a href="#">ভিডিও</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="footer-center">
					<ul>
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span> </span></a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="footer-right">
					<p>Copyright &#169; 2013 Designer First. All Rights Reserved. Template By  <a href="http://w3layouts.com/">W3Layouts</a></p>
				</div>
				<div class="clear"> </div>
				</div>
		</div>
		<!---//End-footer---->
		<!---//End-wrap---->
		 </div>
	</body>
</html>

