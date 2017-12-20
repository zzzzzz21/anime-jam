<?php
define("PAGE_TITLE", "妖怪ウォッチ｜LINEUP");
require_once "../../_config.php";
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<?php require_once "../../include/common/gtm-head.inc"; ?>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<title><?php echo PAGE_TITLE?>｜<?php include "../../include/common/title.inc"?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "../../include/common/description.inc";?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include "../../include/common/keywords.inc";?>">

<!-- icon -->
<?php require_once "../../include/html/head_favicon.inc"; ?>

<!--ogp -->
<?php require_once "../../include/common/og.inc";?>

<!-- twitter_card -->
<?php require_once "../../include/common/twitter_card.inc";?>

<!-- css -->
<?php require_once "../../include/html/head_css.php";?>

<!-- js -->
<?php require_once "../../include/html/head_js.php";?>

</head>


<body id="lineup-detail" class="second lineupYoukai">
<!-- Google Tag Manager -->
<?php require_once "../../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<?php require_once "../../include/html/header.php"; ?>

	<!-- ▼ contents -->
	<div id="contents">
		<div class="contentsInner">
			<section class="innerBlock">
				<h2 class="contentsInner-h2">
					<img src="../../common/images/lineup_title.png" alt="lineup">
				</h2>
				<div class="detailTop-logo">
					<img src="../../common/images/lineup_detail_youkai-logo.png" alt="妖怪ウォッチ">
					<a href="http://www.tv-tokyo.co.jp/anime/youkai-watch/" target="_blank" class="detailTop-logo_btn"><img src="../../common/images/lineup_btn01.png" alt="OFFICIAL WEBSITE"></a>
				</div>
				<?php
				/*
				<div class="detailTop-img">
					<img src="../../common/images/lineup_detail_youkai-1.png" alt="妖怪ウォッチ">
				</div>
				*/
				?>
				<div class="detailTop-bnr pc_con">
					<img src="../../common/images/lineup_detail_youkai-kv.png" alt="妖怪ウォッチ">
				</div>
			</section>
			<section class="lineUp-detail common-bg">
				<h3 class="lineUp-detail-h3"><img src="../../common/images/lineup_subttl_eventcast.png" alt="EVENTCAST" class="eventcast"></h3>
				<ul class="caslList-ul col-2 clearfix">
					<li>
						<figure>
							<img src="../../common/images/cast_youkai_tomatsu.jpg" alt="戸松遥">
							<figcaption>戸松遥</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="../../common/images/cast_youkai_endou.jpg" alt="遠藤綾">
							<figcaption>遠藤綾</figcaption>
						</figure>
					</li>
				</ul>
				<div class="lineUp-detail-bottom clearfix">
					<div class="detail-bottom-inner">
						<h3 class="lineUp-detail-h3"><img src="../../common/images/lineup_subttl_story.png" alt="STORY" class="story"></h3>
						<div class="lineUp-detail-text">
							<p>ごくごく普通の街「さくらニュータウン」に暮らす、<br class="pc_con">ごくごく普通の小学5年生「天野ケータ」は、<br class="pc_con">ある夏の日に白い奇妙な生き物「ウィスパー」に遭遇した。</p>
							<p>それからケータにつきまとうようになったウィスパーは、<br class="pc_con">なんと妖怪だったのだ！</p>
							<p>不思議な時計「妖怪ウォッチ」をウィスパーから渡されたケータは、<br class="pc_con">その日から街のいたるところに現れる妖怪たちが<br class="pc_con">見えるようになってしまった・・・！</p>
							<p>日常にあふれる困ったことは、すべて妖怪の仕業だった！？<br class="pc_con">ケータは困ったことを引き起こす妖怪を説得し、<br class="pc_con">時には戦って問題を解決する。</p>
							<p>そして、その妖怪と友達になるんだ！</p>
						</div>
					</div>
					<div class="detail-bottom-inner">
						<h3 class="lineUp-detail-h3"><img src="../../common/images/lineup_subttl_staff&cast.png" alt="STAFF&CAST" class="staffcast"></h3>
						<div class="lineUp-detail-text">
							<dl class="lineUp-detail-dl">

								<dt><img src="../../common/images/lineup_staff.png" alt="STAFF" class="staff"></dt>
								<dd>
									原作：レベルファイブアニメーション<br>
									クリエイティブプロデューサー/企画・シナリオ原案：日野晃博<br>
									制作： ＯＬＭ / 連載：月刊コロコロコミック / <br class="sp_con">シリーズ構成：加藤陽一<br>
									妖怪＆キャラクターデザイン原案：長野拓造・田中美穂<br>
									キャラクターデザイン：須田正己 / 音響監督： はたしょう二<br>
									音楽：西郷憲一郎 / 監督： ウシロシンジ</dd>
								<dt><img src="../../common/images/lineup_cast.png" alt="CAST" class="cast"></dt>
								<dd class="small">
									ケータ：戸松 遥 / ウィスパー：関 智一 / <br class="sp_con">ジバニャン：小桜エツコ<br>
									フミちゃん：遠藤 綾/ クマ：奈良 徹 / カンチ：佐藤智恵</dd>
							</dl>
						</div>
					</div>
				</div>
				<a href="../" class="detail-bottom_btn">
					<img src="../../common/images/lineup_btn02.png" alt="LINE UP一覧へ">
				</a>
			</section>
		</div>
	</div>
	<!-- ▲ contents -->
	
<?php require_once "../../include/html/footer.php"; ?>

</body>
</html>
