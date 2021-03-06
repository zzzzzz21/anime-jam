<?php include_once "_util.php"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<?php include_once "_meta.php"; ?>	
	<link rel="stylesheet" href="assets/css/top.css">
</head>

<body>

	<?php include_once "_ga.php"; ?>

	<div id="wrap">
	
		<?php include_once "_header.php"; ?>	

		<!-- layout-slider -->
		<div class="layout-slider">
			<div class="layout-slidelist">
				<p class="mod-slideMold"><img src="assets/fig/top/main/main01_01.jpg" height="828" width="750" alt=""></p>
				<div class="mod-slideItem">

					<p class="mod-slideMold">
						<img src="assets/fig/top/main/main01_01.jpg" height="828" width="750" alt="">
					</p>
					
					<div class="mod-slideImgLeftCurrent">
						<img src="assets/fig/top/main/main01_01.jpg" height="828" width="750" alt="">
					</div>

					<div class="mod-slideImgRightCurrent">
						<img src="assets/fig/top/main/main01_02.jpg" height="828" width="750" alt="">
					</div>

					<div class="mod-slideImgLeftNext">
						<img src="assets/fig/top/main/main01_01.jpg" height="828" width="750" alt="">
					</div>

					<div class="mod-slideImgRightNext">
						<img src="assets/fig/top/main/main01_02.jpg" height="828" width="750" alt="">
					</div>

					<p class="mod-sliderTicketLink">
						<a href="#">
							<img src="assets/fig/top/main/btn_ticket.png" height="92" width="360" alt="チケット受付中！詳しくはコチラ 1" id="mod-sliderTicketBtn1">
							<img src="assets/fig/top/main/btn_ticket.png" height="92" width="360" alt="チケット受付中！詳しくはコチラ 2" id="mod-sliderTicketBtn2">
						</a>
					</p>

					<p class="mod-interim_next"></p>
					<p class="mod-interim_prev"></p>

				</div>
			</div>
		</div>

		<!-- layout-multimedia -->
		<div class="layout-multimedia cf">
			<div class="layout-news">

				<p class="mod-newsTitle">
					<a href="news/">
						<img src="assets/fig/top/title_news.png" height="34" width="118" alt="NEWS">
					</a>
				</p>

				<ul class="layout-newsList">

						<?php include_once "_news_list.php"; ?>

				</ul>

				<p class="mod-newsMoreBtn">
					<a href="news/?page=1&year=">
						<img src="assets/fig/top/btn_news_more.png" height="34" width="70" alt="MORE >">
					</a>
				</p>

			</div>
			<div class="layout-twitter">
				<p class="mod-twitterTitle">
					<img src="assets/fig/top/title_twitter.png" height="34" width="144" alt="Twitter">
				</p>

				<div class="layout-twitterList">
					<a class="twitter-timeline" 
						href="https://twitter.com/animejam_staff"
						width="521"
						height="261"
						data-widget-id="636076031489667072"
						data-tweet-limit="10"
          				data-chrome="noheader nofooter noborders transparent">
				        @animejam_staffさんのツイート</a>
				</div>

				<p class="mod-twitterFollowBtn">
					<a href="https://twitter.com/animejam_staff" target="_blank">
						<img src="assets/fig/top/btn_twitter_more.png" height="34" width="86" alt="FOLLOW">
					</a>
				</p>

			</div>
		</div>

		<!-- layout-lineup -->
		<div class="layout-lineup">

			<p class="mod-lineupTitle">
				<img src="assets/fig/top/title_lineup.png" height="32" width="160" alt="LINE UP">
			</p>

			<div class="layout-lineuptItemlists">

				<ul class="layout-lineuptItemlist">
					<li class="layout-lineuptItem">
						<div class="inner">
							<a href="lineup/daiyanoace.php">
								<p class="mod-linuptItemCover">
									
								</p>
								<p class="mod-linuptItemImg">
									<img src="assets/fig/common/lineup/img_thumb_dianoA.jpg" height="325" width="260" alt="1">						
								</p>
								<p class="mod-linuptItemTitle">
									<img src="assets/fig/common/lineup/logo_thumb_dianoA.png" height="325" width="260" alt="1">						
								</p>
							</a>
						</div>
						<div class="mod-linuptItemNew">
							<div class="mod-linuptItemNew_inner">
								<p>
									<img src="assets/fig/top/icon_new_bg.png" height="62" width="62" alt="">
								</p>
								<p>
									<img src="assets/fig/top/icon_new_text.png" height="62" width="62" alt="">
								</p>
							</div>
						</div>
					</li>
					<li class="layout-lineuptItem">
						<div class="inner">
							<a href="lineup/gintama.php">
								<p class="mod-linuptItemCover">
									
								</p>
								<p class="mod-linuptItemImg">
									<img src="assets/fig/common/lineup/img_thumb_gintama.jpg" height="325" width="260" alt="2">						
								</p>
								<p class="mod-linuptItemTitle">
									<img src="assets/fig/common/lineup/logo_thumb_gintama.png" height="325" width="260" alt="1">						
								</p>
								<p class="mod-linuptItemNew">
									<img src="" alt="New">
								</p>
							</a>
						</div>
						<div class="mod-linuptItemNew">
							<div class="mod-linuptItemNew_inner">
								<p>
									<img src="assets/fig/top/icon_new_bg.png" height="62" width="62" alt="">
								</p>
								<p>
									<img src="assets/fig/top/icon_new_text.png" height="62" width="62" alt="">
								</p>
							</div>
						</div>
					</li>
					<li class="layout-lineuptItem">
						<div class="inner">
							<a href="lineup/jitsuhawatashiha.php">
								<p class="mod-linuptItemCover">
									
								</p>
								<p class="mod-linuptItemImg">
									<img src="assets/fig/common/lineup/img_thumb_jitsuha.jpg" height="325" width="260" alt="2">						
								</p>
								<p class="mod-linuptItemTitle">
									<img src="assets/fig/common/lineup/logo_thumb_jitsuha.png" height="325" width="260" alt="1">						
								</p>
								<p class="mod-linuptItemNew">
									<img src="" alt="New">
								</p>
							</a>
						</div>
						<div class="mod-linuptItemNew">
							<div class="mod-linuptItemNew_inner">
								<p>
									<img src="assets/fig/top/icon_new_bg.png" height="62" width="62" alt="">
								</p>
								<p>
									<img src="assets/fig/top/icon_new_text.png" height="62" width="62" alt="">
								</p>
							</div>
						</div>
					</li>
					<li class="layout-lineuptItem">
						<div class="inner">
							<a href="lineup/pripara.php">
								<p class="mod-linuptItemCover">
									
								</p>
								<p class="mod-linuptItemImg">
									<img src="assets/fig/common/lineup/img_thumb_pripara.jpg" height="325" width="260" alt="2">						
								</p>
								<p class="mod-linuptItemTitle">
									<img src="assets/fig/common/lineup/logo_thumb_pripara.png" height="325" width="260" alt="1">						
								</p>
								<p class="mod-linuptItemNew">
									<img src="" alt="New">
								</p>
							</a>
						</div>
						<div class="mod-linuptItemNew">
							<div class="mod-linuptItemNew_inner">
								<p>
									<img src="assets/fig/top/icon_new_bg.png" height="62" width="62" alt="">
								</p>
								<p>
									<img src="assets/fig/top/icon_new_text.png" height="62" width="62" alt="">
								</p>
							</div>
						</div>
					</li>
					<li class="layout-lineuptItem">
						<div class="inner">
							<a href="lineup/wakeupgirls.php">
								<p class="mod-linuptItemCover">
									
								</p>
								<p class="mod-linuptItemImg">
									<img src="assets/fig/common/lineup/img_thumb_wug.jpg" height="325" width="260" alt="2">						
								</p>
								<p class="mod-linuptItemTitle">
									<img src="assets/fig/common/lineup/logo_thumb_wug.png" height="325" width="260" alt="1">						
								</p>
								<p class="mod-linuptItemNew">
									<img src="" alt="New">
								</p>
							</a>
						</div>
						<div class="mod-linuptItemNew">
							<div class="mod-linuptItemNew_inner">
								<p>
									<img src="assets/fig/top/icon_new_bg.png" height="62" width="62" alt="">
								</p>
								<p>
									<img src="assets/fig/top/icon_new_text.png" height="62" width="62" alt="">
								</p>
							</div>
						</div>
					</li>
					<li class="layout-lineuptItem">
						<div class="inner">
							<a href="lineup/yowamushipedal.php">
								<p class="mod-linuptItemCover">
									
								</p>
								<p class="mod-linuptItemImg">
									<img src="assets/fig/common/lineup/img_thumb_yowapeda.jpg" height="325" width="260" alt="2">						
								</p>
								<p class="mod-linuptItemTitle">
									<img src="assets/fig/common/lineup/logo_thumb_yowapeda.png" height="325" width="260" alt="1">						
								</p>
								<p class="mod-linuptItemNew">
									<img src="" alt="New">
								</p>
							</a>
						</div>
						<div class="mod-linuptItemNew">
							<div class="mod-linuptItemNew_inner">
								<p>
									<img src="assets/fig/top/icon_new_bg.png" height="62" width="62" alt="">
								</p>
								<p>
									<img src="assets/fig/top/icon_new_text.png" height="62" width="62" alt="">
								</p>
							</div>
						</div>
					</li>
				</ul>

			</div>

		</div>

		<!-- layout-movie -->
		<div class="layout-movie">
			
			<p class="mod-movieTitle">
				<img src="assets/fig/top/title_movie.png" height="32" width="138" alt="MOVIE">
			</p>

			<div class="mod-movieBox">
				<iframe width="820" height="460" src="https://www.youtube.com/embed/ZJ96hrt1SO8" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>

		<!-- layout-share -->
		<div class="layout-share">
			
			<p class="mod-shareTitle">
				<img src="assets/fig/top/title_share.png" height="32" width="138" alt="SHARE">
			</p>

			<ul class="layout-shareList">
				<li>
					<img src="assets/fig/top/btn_share_twitter.png" height="118" width="118" alt="Twitter">
				</li>
				<li>
					<img src="assets/fig/top/btn_share_facebook.png" height="118" width="118" alt="Facebook">
				</li>
				<li>
					<img src="assets/fig/top/btn_share_line.png" height="118" width="118" alt="LINE">
				</li>
			</ul>

		</div>

		<!-- layout-banner -->
		<div class="layout-banner">
			<p class="mod-bannerTitle">
				<img src="assets/fig/top/title_support.png" height="18" width="162" alt="">
			</p>
			<ul class="layout-bannerList">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>

		</div>

		<?php include_once "_footer.php"; ?>

		<p class="mod-pageTop">
			<img src="assets/fig/common/btn_pagetop.png" height="60" width="60" alt="page top">
		</p>

	</div>

	<?php include_once "_floatObj.php"; ?>

	<!-- script -->
	<script data-main="assets/js/top" src="assets/js/lib/require.js"></script>
	<!-- tw widget -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</body>
</html>
