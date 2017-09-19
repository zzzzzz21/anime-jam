<?php
define("PAGE_TITLE", "TICKET");
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


<body id="ticket" class="second">
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<?php require_once "../include/html/header.php"; ?>

	<!-- ▼ contents -->
	<div id="contents">
		<div class="contentsInner bgType01">
			<section class="innerBlock">
				<h2 class="contentsInner-h2">
					<img src="../common/images/ticket_title.png" alt="TICKET">
				</h2>
			</section>
			<ul class="info-list clearfix">
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl11.png" alt="チケット価格">
					</h3>
					<p class="info-list_text">
						一般指定：各7,800円（税込/全席指定）
						<br>
						<span class="text__caution">
							※枚数制限：お一人様2枚まで
						</span>
					</p>
				</li>
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl06.png" alt="チケット販売スケジュール">
					</h3>
					<p class="info-list_text">
						<span class="text__schedule">
							オフィシャルHP3次先行（抽選）:
							<br>
							2017年8月25日(金)12:00～<br class="sp_con">8月29日(火)23:59
						</span>
					</p>
					<a href="http://t.pia.jp/pia/event/event.do?eventCd=1733610" target="_blank" class="info-btn">
						<img src="../common/images/ticket_bo01.png" alt="チケットはこちら">
					</a>
				</li>
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl07.png" alt="公演に関するお問い合わせ">
					</h3>
					<p class="info-list_text">
						<span class="text__inq">
							<em>【公演に関するお問い合わせ】</em>
							<br>
							インフォメーションダイヤル <br class="sp_con">TEL：03-5793-8878
							<br>
							（オペレーター受付時間　平日13:00～18:00）
						</span>
						<span class="text__inq">
							<em>【チケットに関するお問い合わせ】</em>
							<br>
							チケットぴあ　<a href="http://t.pia.jp/help/" target="_blank">http://t.pia.jp/help/</a>
						</span>
						<span class="text__inq">
							<em>【JTBオフィシャルツアースペシャル<br class="sp_con">パックに関するお問い合わせ】</em>
							<br>
							JTBコーポレートセールス　<br class="sp_con">法人営業横浜支店内
							<br>
							アニメJAM2017オフィシャルツアーデスク
							<br>
							（営業時間：9:30～17:30、定休日：土日祝日休業）
							<br>
							電話：045-316-4602　FAX：045-316-5701
							<br>
							Mail：jtb_convention@bwt.jtb.jp
							<br>
							担当：小林(陽)・田中・小川
							<br>
							※土日のお問い合わせはメールのみとなります。
						</span>
					</p>
				</li>
			</ul>

		</div>
	</div>
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>
