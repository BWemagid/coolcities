<?php include('header.php');?>
		<div class="sub_b">
			<div id="middle">
				<section id="breadcrumbs">
					<div id="bread_indicator"></div>
					<h1 class="page_title">News</h1>
					<article id="page_notifications"></article>
				</section>
				<section id="heart">
					<section id="menu">
						<div id="mini_nav1">
							<a href="#" id="loginButton"><span>news from:</span></a>
							<div style="clear:both"></div>
							<div id="loginBox">                
								<div id="loginForm">
									<span>Me</span>
									<span>Friends</span>
									<span>Watchers</span>
									<span>City</span>
									<span>City Travelled</span>
									<span>All News</span>
								</div>
							</div>
						</div>
						<div id="mini_nav2">
							<a href="#" id="loginButton2"><span>post news</span></a>
							<!--<div id="loginBox2"> 
							<form id="loginForm2">
								<fieldset id="body">
									<fieldset>
										<label for="email">Email Address</label>
										<input type="text" name="email" id="email" />
									</fieldset>
									<fieldset>
										<label for="password">Password</label>
										<input type="password" name="password" id="password" />
									</fieldset>
									<input type="submit" id="login" value="Sign in" />
									<label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
								</fieldset>
								<span><a href="#">Forgot your password?</a></span>
							</form>
							</div>-->
						</div>
						<div id="mini_nav3">
							<a href="#" id="loginButton3"><span>my NewsClips</span></a>
							<!--<div id="loginBox3"> 
							<form id="loginForm3">
							</form>
							</div>-->
						</div>
						<div id="mini_nav4">
						<a href="#" id="loginButton4"><span>sort by</span></a>
							<div style="clear:both; display:inline-block;"></div>
							<div id="show_as"><span>show as:</span>
							<a href="#"><img style="position:relative; top:5px;" src="images/grid_block.png"></a>
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
					
					<div id="list_view" class="alist">
					<article class="block_news">
						<img style="position: absolute; margin: 0 0 0 720px;" src="images/newsclip_off2.png">
						<header class="block_title">
							<p class="block_title_news">New Color for the Statue of Liberty</p>
							<p class="block_subtitle_news">Posted by <a href="#"><span id="posters_link">Konstantinos Tsilkos</span></a>,
							<time datetime="MM-DDThh:mm">July 25, 12:33pm</time> near New York
							</p><a href="#"><img style="top: 1px; position: relative;" src="images/mapview_icon.png"></a>
						</header>
						<div id="block_content">
							<div id="block_content_top">
							<span class="filler"><img src="images/filler_img.png"></span>
							<p class="block_text_news">
							But consumer advocates and state authorities say the use of the databases disproportionately affects lower-income Americans, who tend to live paycheck to paycheck, making them more likely to incur negative marks after relatively minor banking missteps like overdrawing accounts, amassing fees or bouncing checks.

When the databases were created more than 20 years ago, they were intended to help banks guard against serial fraud artists, like those accused of writing bogus checks. Since then, though, the databases have ensnared millions of low-income Americans, but consumer advocates and state authorities say the
							</p>
							<p class="block_text_news2">
							use of the databases disproportionately affects lower-income Americans, who tend to live paycheck to paycheck, making them o...bouncing check.
							</p>
							<a href="#"><p id="view_more">view more...</p></a>
							</div>
							<div id="block_content_menu">
								<dl class="block_options">
									<dt id="block_options1">
									<div><img src="images/heart.png"><span id="block_numerals">502</span><img src="images/heartbroke.png"><span id="block_numerals">4</span></div>
									</dt>
									<dt id="block_options2">
									<div><img src="images/comments.png"><span id="block_numerals">152</span></div>
									</dt>
									<dt id="block_options3">
									<div><span id="share_with">share with:</span><img style="margin-right: 5px;" src="images/lock.png"><img style="margin-right: 5px;" src="images/people.png"><img style="margin-right: 5px;" src="images/eye.png"><img style="margin-right: 5px;" src="images/mail.png"><img src="images/fbook.png"></div>
									</dt>
									<dt id="block_options4">
									<div><img src="images/alert.png"><img src="images/trash.png"></div>
									</dt>
								</dl>
							</div>
							<div id="block_content_comments"></div>
						</div>
					</article>
					</div>

					<!--<div id="map_view" class="alist">
						content goes here
					</div>-->
					
					</section>
				</section>
			</div>
		</div>	
		<div class="sub_c">
			<div id="right">
			</div>		
		</div>
		
	</div> <!-- End Grid -->
	
	</div> <!-- End Wrapper -->
</div>
<?php include('footer.php');?>