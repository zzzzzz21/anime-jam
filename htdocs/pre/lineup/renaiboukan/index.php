<?php
define("PAGE_TITLE", "恋愛暴君｜LINEUP");
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
<meta property="og:title" content="<?php echo PAGE_TITLE?>｜<?php include "../../include/common/title.inc";?>">
<meta property="og:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "../../include/common/description.inc";?>">
<meta property="og:type" content="website">
<?php require_once "../../include/common/og.inc";?>

<!-- twitter_card -->
<?php require_once "../../include/common/twitter_card.inc";?>

<!-- css -->
<?php require_once "../../include/html/head_css.php";?>

<!-- js -->
<?php require_once "../../include/html/head_js.php";?>

</head>


<body id="lineup-detail" class="second lineupRen">
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
					<img src="../../common/images/lineup_detail5-logo.png" alt="恋愛暴君">
					<a href="http://renaiboukun.com/" target="_blank" class="detailTop-logo_btn"><img src="../../common/images/lineup_btn01.png" alt="OFFICIAL WEBSITE"></a>
				</div>
				<div class="detailTop-img">
					<img src="../../common/images/lineup_detail5-1.png" alt="恋愛暴君">
				</div>
				<div class="detailTop-bnr pc_con">
					<img src="../../common/images/lineup_detail5-2.png" alt="恋愛暴君">
				</div>
			</section>
			<section class="lineUp-detail common-bg">
				<h3 class="lineUp-detail-h3"><img src="../../common/images/lineup_subttl_eventcast.png" alt="EVENTCAST" class="eventcast"></h3>
				<ul class="caslList-ul col-4 clearfix">
					<li>
						<figure>
							<img src="../../common/images/cast5_1.jpg" alt="青山吉能">
							<figcaption>青山吉能</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="../../common/images/cast5_2.jpg" alt="長野佑紀">
							<figcaption>長野佑紀</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="../../common/images/cast5_3.jpg" alt="原由実">
							<figcaption>原由実</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="../../common/images/cast5_4.jpg" alt="大坪由佳">
							<figcaption>大坪由佳</figcaption>
						</figure>
					</li>
				</ul>
				<h3 class="lineUp-detail-h3"><img src="../../common/images/lineup_subttl_live.png" alt="LIVE" class="live"></h3>
				<div class="lineUp-detail-middle clearfix">
					<div class="detail-middle_text">
						<img src="../../common/images/lineup_detail_live5.png" alt="smileY inc.">
					</div>
					<div class="detail-middle_img">
						<img src="../../common/images/live4_2.jpg" alt="">
					</div>
				</div>
				<div class="lineUp-detail-bottom clearfix">
					<div class="detail-bottom-inner">
						<h3 class="lineUp-detail-h3"><img src="../../common/images/lineup_subttl_story.png" alt="STORY" class="story"></h3>
						<div class="lineUp-detail-text">
							<p>
								ある日突然、男子高校生・藍野青司のもとに
								<br>
								任意の二人を強制的にキスさせるという
								<br class="pc_con">
								不思議アイテム「キスノート」を持った死神風の少女・グリが現れ、
							</p>
							<p>
								“24時間以内にキスしないと書いた者（グリ）は死に、
								<br class="pc_con">
								書かれた者（青司）も一生童貞のまま生涯を終える”
								<br class="pc_con">
								<br class="pc_con">
								と告げ・・・。
							</p>
							<p>
								愛のキューピット(？)グリと青司とその仲間たちが
								<br>
								“キスをする相手”を求めて繰り広げるハイテンションラブコメディに
								<br class="pc_con">
								あなたもきっと恋がしたくなるはず(!?)。
							</p>
						</div>
					</div>
					<div class="detail-bottom-inner">
						<h3 class="lineUp-detail-h3"><img src="../../common/images/lineup_subttl_staff&cast.png" alt="STAFF&CAST" class="staffcast"></h3>
						<div class="lineUp-detail-text">
							<dl class="lineUp-detail-dl">

								<dt><img src="../../common/images/lineup_staff.png" alt="STAFF" class="staff"></dt>
								<dd>
									原 作：三星めがね （COMICメテオ連載）
									<br>
									監 督：濁川 敦 / シリーズ構成：高橋ナツコ
									<br>
									キャラクターデザイン：いとうまりこ / 音楽：MONACA
									<br>
									音楽制作 / DIVEⅡentertainment
									<br>
									アニメーション制作：EMTスクエアード
								</dd>
								<dt><img src="../../common/images/lineup_cast.png" alt="CAST" class="cast"></dt>
								<dd class="small">
									グリ：青山吉能 / 藍野青司：小野賢章 / 緋山茜：沼倉愛美
									<br>
									黄蝶ヶ崎柚：長野佑紀 / 白峰樒：原 由実 / ほか
								</dd>
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
