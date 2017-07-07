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

				<?php include_once "../_news_list.php"; ?>

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

</body>
</html>
