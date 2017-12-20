<?php
define("PAGE_TITLE", "LINEUP");
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
<?php require_once "../include/common/og.inc";?>

<!-- twitter_card -->
<?php require_once "../include/common/twitter_card.inc";?>

<!-- css -->
<?php require_once "../include/html/head_css.php";?>

<!-- js -->
<?php require_once "../include/html/head_js.php";?>

</head>


<body id="lineup" class="second">
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<?php require_once "../include/html/header.php"; ?>

	<!-- ▼ contents -->
	<div id="contents">
		<div class="contentsInner bgType01">
			<section class="innerBlock">
				<h2 class="contentsInner-h2">
					<img src="../common/images/lineup_title.png" alt="LINEUP">
				</h2>
			</section>
			<ul class="lineupList clearfix">
				<li>
					<a href="puripara/">
						<img src="../common/images/lineup_index_puripara.png" alt="アイドルタイムプリパラ">
					</a>
				</li>
				<li>
					<a href="wug/">
						<img src="../common/images/lineup_index_wug.png" alt="Wake Up, Girls! 新章">
					</a>
				</li>
				<li>
					<a href="trinity7/">
						<img src="../common/images/lineup_index_trinity7.png" alt="劇場版トリニティセブン">
					</a>
				</li>
				<li>
					<a href="kfriends/">
						<img src="../common/images/lineup_index_kfriends.png" alt="けものフレンズ">
					</a>
				</li>
				<li>
					<a href="guruguru/">
						<img src="../common/images/lineup_index_img_guruguru.png?20171023" alt="魔法陣グルグル">
					</a>
				</li>
				<li>
					<a href="youkai/">
						<img src="../common/images/lineup_index_youkai.png" alt="妖怪ウォッチ">
					</a>
				</li>
				<li>
					<a href="renaiboukun/">
						<img src="../common/images/lineup_index_renaiboukun.png" alt="恋愛暴君">
					</a>
				</li>
			</ul>
			<div class="andMore">
				<img src="../common/images/cast_andmore.png" alt="and more...">
			</div>
		</div>
	</div>
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>
