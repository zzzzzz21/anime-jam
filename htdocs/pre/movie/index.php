<?php
define("PAGE_TITLE", "MOVIE");
require_once "../_config.php";
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-head.inc"; ?>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<title><?php echo PAGE_TITLE?>｜<?php include "../include/common/title.inc"?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "../include/common/description.inc";?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include "../include/common/keywords.inc";?>">

<!-- icon -->
<?php require_once "../include/html/head_favicon.inc"; ?>

<!--ogp -->
<meta property="og:title" content="<?php echo PAGE_TITLE?>｜<?php include "../include/common/title.inc";?>">
<meta property="og:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "../include/common/description.inc";?>">
<meta property="og:type" content="website">
<?php require_once "../include/common/og.inc";?>

<!-- twitter_card -->
<?php require_once "../include/common/twitter_card.inc";?>

<!-- css -->
<?php require_once "../include/html/head_css.php";?>

<!-- js -->
<?php require_once "../include/html/head_js.php";?>

<!-- colorbox -->
<link rel="stylesheet" href="../common/css/colorbox.css">
<script src="../common/js/jquery.colorbox-min.js"></script>
<script>
	$(document).ready(function(){
		if($(window).width() > 767){
			$(".youtube").colorbox({iframe:true, innerWidth:700, innerHeight:400, opacity :0.7});
		}else{
			$(".youtube").colorbox.remove();
		}

	});	
</script>

</head>


<body id="movie" class="second">
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<?php require_once "../include/html/header.php"; ?>

	<!-- ▼ contents -->
	<div id="contents">

		<div class="title">
			<h2><span>MOVIE</span></h2>
		</div>


		<div id="contentsBody">

			<div class="clearfix blc_3">
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/UrR_7oClAZk" class="movieThumb youtube"><img src="../common/images/img_movieThumb.jpg" width="1200" height="630" alt="MOVIE"></a>
				</div>
				<!-- //post -->
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/UrR_7oClAZk" class="movieThumb youtube"><img src="../common/images/img_movieThumb.jpg" width="1200" height="630" alt="MOVIE"></a>
				</div>
				<!-- //post -->
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/UrR_7oClAZk" class="movieThumb youtube"><img src="../common/images/img_movieThumb.jpg" width="1200" height="630" alt="MOVIE"></a>
				</div>
				<!-- //post -->
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/UrR_7oClAZk" class="movieThumb youtube"><img src="../common/images/img_movieThumb.jpg" width="1200" height="630" alt="MOVIE"></a>
				</div>
				<!-- //post -->
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/UrR_7oClAZk" class="movieThumb youtube"><img src="../common/images/img_movieThumb.jpg" width="1200" height="630" alt="MOVIE"></a>
				</div>
				<!-- //post -->
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/UrR_7oClAZk" class="movieThumb youtube"><img src="../common/images/img_movieThumb.jpg" width="1200" height="630" alt="MOVIE"></a>
				</div>
				<!-- //post -->
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/UrR_7oClAZk" class="movieThumb youtube"><img src="../common/images/img_movieThumb.jpg" width="1200" height="630" alt="MOVIE"></a>
				</div>
				<!-- //post -->
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/UrR_7oClAZk" class="movieThumb youtube"><img src="../common/images/img_movieThumb.jpg" width="1200" height="630" alt="MOVIE"></a>
				</div>
				<!-- //post -->
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/UrR_7oClAZk" class="movieThumb youtube"><img src="../common/images/img_movieThumb.jpg" width="1200" height="630" alt="MOVIE"></a>
				</div>
				<!-- //post -->
			</div>

			<!-- pager -->
			<div class="pager">
				<a href="#" class="prev">&lt;</a>
				<span class="current">1</span>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#" class="next">&gt;</a>
			</div>
			<!-- //pager -->
		</div>

	</div>
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>
