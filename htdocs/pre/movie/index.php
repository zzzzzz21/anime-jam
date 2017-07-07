<?php
define("PAGE_TITLE", "MOVIE");
require_once($_SERVER['DOCUMENT_ROOT'] . "/_config.php");
$artist_cd = $artist_cd;
?>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<!-- tdk -->
<title><?php echo PAGE_TITLE;?>｜<?php include_once "../include/common/title.inc";?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include '../include/common/description.inc';?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include '../include/common/keywords.inc';?>">

<!-- icon -->
<?php require_once "../include/html/head_favicon.inc"; ?>

<!--ogp -->
<meta property="og:title" content="<?php include '../include/common/title.inc'?>">
<meta property="og:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include '../include/common/description.inc';?>">
<meta property="og:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/common/og-image.inc"); ?>">
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:site_name" content="<?php include '../include/common/title.inc'?>">
<meta property="og:type" content="article">
<meta property="fb:app_id" content="<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/include/common/fb-app_id.inc"); ?>">

<!-- twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@animejam_staff">
<meta name="twitter:creator" content="@animejam_staff">
<meta name="twitter:title" content="<?php include '../include/common/title.inc'?>">
<meta name="twitter:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include '../include/common/description.inc';?>">
<meta name="twitter:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta name="twitter:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/common/og-image.inc"); ?>">

<!-- css -->
<?php require_once "../include/html/head_css.php"; ?>
<link rel="stylesheet" href="../common/css/colorbox.css">
<!-- js -->
<?php require_once "../include/html/head_js.php"; ?>
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
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TB3V54"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TB3V54');</script>
<!-- End Google Tag Manager -->
	<!-- ▼ header -->
	<header>
		<nav class="clearfix">
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/header_logo.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/header_nav.php"); ?>
		</nav>
	</header>
	<!-- ▲ header -->

	<!-- ▼ contents -->
	<div id="contents">
		<div class="title">
			<h2><span><?php echo PAGE_TITLE;?></span></h2>
		</div>
		
		<div id="contentsBody">
			<div class="clearfix blc_3">
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/I3_F6y9yn-8?autoplay=1" class="movieThumb youtube"><img src="../common/images/img_movieThumb-rock.jpg" alt="MOVIE"></a>
				</div>
				<!-- //post -->
				<!-- post -->
				<div class="post">
					<a href="http://www.youtube.com/embed/vKGhxXEsX3E?autoplay=1" class="movieThumb youtube"><img src="../common/images/img_movieThumb-pop.jpg" alt="MOVIE"></a>
				</div>
				<!-- //post -->
			</div>
			<!-- pager -->
<!-- 			<div class="pager">
				<a href="#" class="prev">&lt;</a>
				<span class="current">1</span>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#" class="next">&gt;</a>
			</div>
			 -->
			<!-- //pager -->
		</div>
		
	</div>
	<!-- ▲ contents -->
	
	<div class="pagetop"><a href="#">pagetop</a></div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/footer.php"); ?>

</body>
</html>
