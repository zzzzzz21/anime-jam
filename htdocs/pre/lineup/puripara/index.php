<?php
define("PAGE_TITLE", "アイドルタイムプリパラ｜LINEUP");
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
<script>
	$(function() {
		$('.lineUp-detail-text').matchHeight();
	});
</script>

</head>


<body id="lineup-detail" class="second lineupPur">
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
					<img src="../../common/images/lineup_detail1-logo.png" alt="アイドルタイムプリパラ">
					<a href="http://avex.jp/pripara/" target="_blank" class="detailTop-logo_btn"><img src="../../common/images/lineup_btn01.png" alt="OFFICIAL WEBSITE"></a>
				</div>
				<div class="detailTop-img">
					<img src="../../common/images/lineup_detail1-1.png" alt="アイドルタイムプリパラ">
				</div>
				<div class="detailTop-bnr pc_con">
					<img src="../../common/images/lineup_detail1-2.jpg" alt="アイドルタイムプリパラ">
				</div>
			</section>
			<section class="lineUp-detail common-bg">
				<h3 class="lineUp-detail-h3"><img src="../../common/images/lineup_subttl_eventcast.png" alt="EVENTCAST" class="eventcast"></h3>
				<ul class="caslList-ul col-5 clearfix">
					<li>
						<figure>
							<img src="../../common/images/cast1_1.jpg" alt="伊達朱里紗">
							<figcaption>伊達朱里紗</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="../../common/images/cast1_2.jpg" alt="大地葉">
							<figcaption>大地葉</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="../../common/images/cast1_3.jpg" alt="山田唯菜">
							<figcaption>山田唯菜</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="../../common/images/cast1_4.jpg" alt="茜屋日海夏">
							<figcaption>茜屋日海夏</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="../../common/images/cast1_5.jpg" alt="山北早紀">
							<figcaption>山北早紀</figcaption>
						</figure>
					</li>
				</ul>
				<div class="lineUp-detail-bottom clearfix">
					<div class="detail-bottom-inner">
						<h3 class="lineUp-detail-h3"><img src="../../common/images/lineup_subttl_story.png" alt="STORY" class="story"></h3>
						<div class="lineUp-detail-text">
							<p>
								アイドルになりたいと思っていた夢川ゆいは、
								<br class="pc_con">
								自分の住む町に「プリパラ」ができると知り、大喜び。
							</p>
							<p>
								そんな時、ゆいの通う学校に転校してきたのは、
								<br class="pc_con">
								パラ宿でトップアイドルとして知られる真中らぁら。
								<br class="sp_con">
								<br>
								ところが、らぁらはシステムエラーでプリパラチェンジしても姿が変わらなくなっていた……。
							</p>
							<p>
								はたしてゆいは、自分が望むアイドルになれるのか？
							</p>
							<p>
								そして２人はパパラ宿のプリパラを
								<br class="pc_con">
								アイドルでいっぱいにすることができるのか？！
							</p>
						</div>
					</div>
					<div class="detail-bottom-inner">
						<h3 class="lineUp-detail-h3"><img src="../../common/images/lineup_subttl_staff&cast.png" alt="STAFF&CAST" class="staffcast"></h3>
						<div class="lineUp-detail-text">
							<dl class="lineUp-detail-dl">
								<dt><img src="../../common/images/lineup_staff.png" alt="STAFF" class="staff"></dt>
								<dd>
									【スタッフ】
									原作：タカラトミーアーツ/シンソフィア<br>
									アニメーション共同制作：タツノコプロ・DONGWOO A & E<br>
									監督：森脇真琴<br>
									シリーズ構成：土屋理敬<br>
									キャラクター原案：金谷有希子（シンソフィア）<br>
									キャラクターデザイン：原 将治<br>
									CGディレクター：乙部善弘<br>
									音楽：はまたけし<br>
									音響監督：長崎行男
								</dd>
								<dt><img src="../../common/images/lineup_cast.png" alt="CAST" class="cast"></dt>
								<dd class="small">
									真中らぁら：茜屋日海夏 / 夢川ゆい：伊達朱里紗<br>
									虹色にの：大地 葉 / 幸多みちる：山田唯菜 / 南みれぃ：芹澤 優<br>
									北条そふぃ：久保田未夢 / 東堂シオン：山北早紀<br>
									ドロシー・ウェスト：澁谷梓希 / レオナ・ウェスト：若井友希<br>
									他
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
