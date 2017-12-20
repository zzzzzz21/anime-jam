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
							＜ぴあ＞<br>
							◆ネット予約：<a href="http://w.pia.jp/t/anime-jam/" target="_blank">http://w.pia.jp/t/anime-jam/</a><br>
							◆店頭購入：全国のセブン－イレブン（マルチコピー機操作）、サークルＫ・サンクス（Kステーション端末操作）にて販売。チケットぴあ店舗のみ翌日の10:00～発売。<br>
							<br>
							＜ｅ＋(イープラス)＞<br>
							◆ネット予約：<a href="http://eplus.jp/anime-jam/" target="_blank">http://eplus.jp/anime-jam/</a><br>
							◆店頭購入：ファミリーマート店内の端末「Famiポート」にて直接購入<br>
							<br>
							＜ローソンチケット＞<br> 
							◆ネット予約：<a href="http://l-tike.com/" target="_blank">http://l-tike.com/</a><br>  
							◆電話予約：0570-084-003 (Lコード：71755)　<br>
							◆店頭購入：全国ローソン、ミニストップ設置の「Loppi」にて直接購入<br>
						</span>
					</p>
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
