<?php
define("PAGE_TITLE", "TOP");
require_once "_config.php";
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<?php require_once "include/common/gtm-head.inc"; ?>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<title><?php echo PAGE_TITLE?>｜<?php include "include/common/title.inc"?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "include/common/description.inc";?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include "include/common/keywords.inc";?>">

<!-- icon -->
<?php require_once "include/html/head_favicon.inc"; ?>

<!--ogp -->
<meta property="og:title" content="<?php echo PAGE_TITLE?>｜<?php include "include/common/title.inc";?>">
<meta property="og:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "include/common/description.inc";?>">
<meta property="og:type" content="website">
<?php require_once "include/common/og.inc";?>

<!-- twitter_card -->
<?php require_once "include/common/twitter_card.inc";?>

<!-- css -->
<?php require_once "include/html/head_css.php";?>

<!-- js -->
<?php require_once "include/html/head_js.php";?>

<!-- colorbox -->
<?php require_once "include/html/head_js-colorbox.php";?>


<!-- simplyscroll -->
<script src="common/js/jquery.simplyscroll.min.js"></script>

<!-- custom content scrollbar -->
<link rel="stylesheet" href="common/css/jquery.mCustomScrollbar.min.css">
<script src="common/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	$(function(){
		$(".contentsInner-news_tl").mCustomScrollbar();
		$(".contentInner-twitter_content").mCustomScrollbar();
	});
</script>

</head>


<body id="top">
<!-- Google Tag Manager -->
<?php require_once "include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->
<?php require_once "include/html/header.php"; ?>
	
	<!-- ▼ contents -->
	<div id="contents">
		<!-- PCとSPにてコンテンツの表示順が違うため、PCとSPのソースを分けます -->
		<!-- PC版 -->
		<div class="contentsInner pc_con">
			<div class="contentsInner-news">
				<ul class="contentsInner-news_tl">
					<li class="news_tl-li">
						<a href="">
							<div class="news_tl-img">
								<img src="common/images/top-news_img01.jpg" alt="">
							</div>
							<div class="news_tl-text">
								<p class="tl-text_date">2017.6.20</p>
								<p class="tl-text_detail">テレビ東京の人気アニメが大集合！「アニメJAM2017」1Days開催決定！テキストテキストテキストテキスト</p>
							</div>
						</a>
					</li>
					<li class="news_tl-li">
						<div class="news_tl-img">
							<img src="common/images/top-news_img01.jpg" alt="">
						</div>
						<div class="news_tl-text">
							<p class="tl-text_date">2017.6.20</p>
							<p class="tl-text_detail">JTBオフィシャルツアースペシャルパックの受付を開始しました！</p>
						</div>
					</li>
					<li class="news_tl-li">
						<div class="news_tl-img">
							<img src="common/images/top-news_img01.jpg" alt="">
						</div>
						<div class="news_tl-text">
							<p class="tl-text_date">2017.6.20</p>
							<p class="tl-text_detail">JTBオフィシャルツアースペシャルパックの受付を開始しました！</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="contentsInner-twitter">
				<div class="contentInner-twitter_content">
					<a class="twitter-timeline" data-width="500" data-height="320" data-chrome="transparent nofooter noheader noscrollbar" data-link-color="#FFF" href="https://twitter.com/animejam_staff">Tweets by animejam_staff</a> 
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
			<div class="contentsInner-ticket">
				<a href="http://w.pia.jp/t/anime-jam/" target="_blank"><img src="common/images/flame_ticket.png" alt="チケット受付中 2017/12/24 舞浜アンフィシアター"></a>
			</div>
		</div>
		<div class="contentsInnner-movie pc_con">
			<div class="contentsInner-movie_content">
				<a href="http://www.youtube.com/embed/XWpxsGf2ObU" class="movieThumb youtube"><img src="common/images/top_youtube_img01.jpg" alt=""></a>
			</div>
		</div>
		<!-- SP版 -->
		<div class="contentsInner sp_con">
			<div class="contentsInner-spVisual sp_con">
				<img src="common/images/top_kv.jpg" alt="">
			</div>
			<div class="contentsInner-ticket">
				<a href="http://w.pia.jp/t/anime-jam/" target="_blank"><img src="common/images/flame_ticket.png" alt="チケット受付中 2017/12/24 舞浜アンフィシアター"></a>
			</div>
			<div class="contentsInner-news">
				<ul class="contentsInner-news_tl">
					<li class="news_tl-li">
						<a href="">
							<div class="news_tl-img">
								<img src="common/images/top-news_img01.jpg" alt="">
							</div>
							<div class="news_tl-text">
								<p class="tl-text_date">2017.6.20</p>
								<p class="tl-text_detail">テレビ東京の人気アニメが大集合！「アニメJAM2017」1Days開催決定！テキストテキストテキストテキスト</p>
							</div>
						</a>
					</li>
					<li class="news_tl-li">
						<div class="news_tl-img">
							<img src="common/images/top-news_img01.jpg" alt="">
						</div>
						<div class="news_tl-text">
							<p class="tl-text_date">2017.6.20</p>
							<p class="tl-text_detail">JTBオフィシャルツアースペシャルパックの受付を開始しました！</p>
						</div>
					</li>
					<li class="news_tl-li">
						<div class="news_tl-img">
							<img src="common/images/top-news_img01.jpg" alt="">
						</div>
						<div class="news_tl-text">
							<p class="tl-text_date">2017.6.20</p>
							<p class="tl-text_detail">JTBオフィシャルツアースペシャルパックの受付を開始しました！</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="contentsInnner-movie sp_con">
				<div class="contentsInner-movie_content">
					<a href="http://www.youtube.com/embed/XWpxsGf2ObU" class="movieThumb youtube"><img src="common/images/top_youtube_img01.jpg" alt=""></a>
				</div>
			</div>
			<div class="contentsInner-twitter">
				<div class="contentInner-twitter_content">
					<a class="twitter-timeline" data-width="500" data-height="320" data-chrome="transparent nofooter noheader noscrollbar" data-link-color="#FFF" href="https://twitter.com/animejam_staff">Tweets by animejam_staff</a> 
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</div>
		<!-- colorbox -->
		<link rel="stylesheet" href="common/css/colorbox.css">
		<script src="common/js/jquery.colorbox-min.js"></script>
		<script>
			$(document).ready(function(){
				if($(window).width() > 767){
					$(".youtube").colorbox({iframe:true, innerWidth:700, innerHeight:400, opacity :0.7});
				}else{
					$(".youtube").colorbox.remove();
				}

			});	
		</script>
	</div>
	<!-- ▲ contents -->

<?php require_once "include/html/footer.php"; ?>

</body>
</html>
