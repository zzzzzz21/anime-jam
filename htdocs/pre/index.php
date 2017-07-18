<?php
define("PAGE_TITLE", "TOP");
require_once(dirname(__FILE__) . "/_config.php");
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<title><?php echo PAGE_TITLE?>｜<?php include "include/common/title.inc"?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include 'include/common/description.inc';?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include 'include/common/keywords.inc';?>">

<!-- icon -->
<?php require_once "include/html/head_favicon.inc"; ?>

<!--ogp -->
<meta property="og:title" content="<?php echo PAGE_TITLE?>｜<?php include(dirname(__FILE__) . "/include/common/title.inc");?>">
<meta property="og:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include(dirname(__FILE__) . '/include/common/description.inc');?>">
<meta property="og:type" content="website">
<?php require_once(dirname(__FILE__) . "/include/common/og.inc");?>

<!-- twitter_card -->
<?php require_once(dirname(__FILE__) . "/include/common/twitter_card.inc");?>

<!-- css -->
<?php require_once(dirname(__FILE__) . "/include/html/head_css.php");?>

<!-- js -->
<?php require_once(dirname(__FILE__) . "/include/html/head_js.php");?>

<!-- colorbox -->
<?php require_once(dirname(__FILE__) . "/include/html/head_js-colorbox.php");?>


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

<?php require_once(dirname(__FILE__) . "/include/html/header.php"); ?>
	
	<!-- ▼ contents -->

	<div id="contents">
		<div class="contentsInner">
			<div class="contentsInner-spVisual sp_con">
				<img src="common/images/sp/top_sp.jpg" alt="">
			</div>
			<div class="contentsInner-ticket">
				<img src="common/images/flame_ticket.png" alt="チケット受付中 2017/12/24 舞浜アンフィシアター" class="pc_con">
				<img src="common/images/flame_ticket_sp.jpg" alt="チケット受付中 2017/12/24 舞浜アンフィシアター" class="sp_con">
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
			<div class="contentsInner-twitter">
				<div class="contentInner-twitter_content">
					<a class="twitter-timeline" data-width="500" data-height="320" data-chrome="transparent nofooter noheader noscrollbar" data-link-color="#FFF" href="https://twitter.com/animejam_staff">Tweets by animejam_staff</a> 
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</div>
	</div>
	<!-- ▲ contents -->

<?php require_once(dirname(__FILE__) . "/include/html/footer.php"); ?>

</body>
</html>
