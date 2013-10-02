<?php include('header.php');?>
		<div class="sub_b">
			<div id="middle">
				<section id="breadcrumbs">
					<div id="bread_indicator"></div>
					<h1 class="page_title">Photos</h1>
					<article id="page_notifications"></article>
				</section>
				<section id="heart">
					<section id="menu">
						<div id="mini_nav_photos">
							<a href="#" id="loginButton"><span>photos</span></a>
							<a href="#" id="loginButton"><span>add photos</span></a>
							<a href="#" id="loginButton"><span>albums</span></a>
							<a href="#" id="loginButton"><span>create album</span></a>
						</div>
						<div id="mini_nav_photos2">
						<a href="#" id="loginButton4"><span>sort by</span></a>
							<div style="clear:both; display:inline-block;"></div>
							<div id="show_as"><span>photos from:</span>
							<a href="#"><img style="position:relative; top:5px;" src="images/grid_circle.png"></a></div>
							<div id="loginBox4">                
								<div id="loginForm4">
									<span>Date</span>
									<span>Popularity</span>
								</div>
							</div>
						</div>
					</section>
					<section id="content">
					<article class="block_news">
					<span>Konstantinos Tsilkos</span>
					<div class="photos">
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					<a class="fancybox" rel="group" href="images/photos/real.jpg"><img src="images/photos/real.jpg"/></a>
					</div>
					</article>
					</section>
				</section>
			</div>
		</div>	
		<div class="sub_c">
			<div id="right">
			</div>		
		</div>
		
	</div> <!-- End Grid -->
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	</script>
	</div> <!-- End Wrapper -->
</div>
<?php include('footer.php');?>