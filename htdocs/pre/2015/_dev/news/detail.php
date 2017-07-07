<?php 
	include_once "../_util.php";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<?php include_once "../_meta.php"; ?>	
	<link rel="stylesheet" href="<?php echo $rP;?>assets/css/news.css">
</head>

<body>

	<?php include_once "_ga.php"; ?>

	<div id="wrap">
	
		<?php include_once "../_header.php"; ?>	

		<div class="layout-news">
			
			<p class="mod-news-title">
				<img src="../assets/fig/news/title.png" height="32" width="116" alt="">
			</p>

			<div class="layout-news-dashboard">

				<div class="layout-news-detail">

					<?php include_once "../_news_detail.php"; ?>						

				</div>

			</div>


		</div>

		<?php include_once "../_footer.php"; ?>

		<p class="mod-pageTop">
			<img src="<?php echo $rP;?>assets/fig/common/btn_pagetop.png" height="60" width="60" alt="page top">
		</p>

	</div>

	<?php include_once "../_floatObj.php"; ?>

	<!-- script -->
	<script data-main="<?php echo $rP;?>assets/js/common" src="<?php echo $rP;?>assets/js/lib/require.js"></script>

	<!-- facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- twitter widget -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</body>
</html>
