
@include('project.include.message_header')

       

         <div class="wrap"> 
			<div class="blog-grids" id="portfoliolist">

			@foreach($data as $info)

				<div class="blog-articla-grid  portfolio1 logo1" data-cat="logo">
                   
                

					<div class="blog-articla-grid-pic">
						<a href="bsingle.html"><img src="{{ $info->imagename }}" alt=" "></a>
					</div>

					<div class="blog-articla-grid-info">
						<h3><a href="bsingle.html">{{ $info->sender }}</a></h3>
						<ul>
							<li><p> <a href="bsingle.html">{{ $info->sending_date }}</a></p></li>
						<!--	<li><a href="bsingle.html"> James Reed</a></li>
							<li><a href="bsingle.html"> Technology</a></li>

						-->	
							<p class="artical-para">
								
                               {{  $info->message }}

							</p>
						<!--	<a class="artbtn" href="bsingle.html">Read More</a>  -->
						</ul>
					</div>
					<div class="clear"> </div>
				</div>

               @endforeach


@include('project.include.message_footer')