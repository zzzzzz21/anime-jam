<?php
define("PAGE_TITLE", "EVENT INFO");
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

</head>


<body id="info" class="second">
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<?php require_once "../include/html/header.php"; ?>

	<!-- ▼ contents -->
	<div id="contents">
		<div class="contentsInner bgType01">
			<section class="innerBlock">
				<h2 class="contentsInner-h2">
					<img src="../common/images/info_title.png" alt="EVENT INFO">
				</h2>
				<p class="contentsInner-text">
					<img src="../common/images/info_desc.png" alt="テレビ東京のアニメ作品が集結する夢のコラボレーションイベントが今年も開催！数々の人気アニメから豪華キャスト・アーティストが舞浜アンフィシアターに大集結！ライブ、トーク、夢のコラボ企画満載の一日限りのプレミアムステージ">
				</p>
			</section>

			<ul class="info-list clearfix">
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl01.png" alt="開催日程">
					</h3>
					<p class="info-list_text">
						<span class="text__date"><span>2017</span>年<span>12</span>月<span>24</span>日（日）</span>
						【昼の部】開場 13:00　開演 14:00
						<br>
						【夜の部】開場 17:30　開演 18:30
						<br>
						<span class="text__caution">※時間は変更になる可能性があります。</span>
					</p>
				</li>

				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl02.png" alt="会場">
					</h3>
					<p class="info-list_text">
						<a href="http://www.maihama-amphitheater.jp/" target="_blank">舞浜アンフィシアター</a>
					</p>
				</li>

				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl03.png" alt="出演作品">
					</h3>
					<p class="info-list_text">
						アイドルタイムプリパラ
						<br>
						Wake Up, Girls ! 新章
						<br>
						劇場版トリニティセブン
						<br>
						けものフレンズ
						<br>
						恋愛暴君
					</p>
				</li>

				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl04.png" alt="出演者">
					</h3>
					<a href="../cast/" class="acter-btn">
						<img src="../common/images/info_bo02.png" alt="出演者についてはこちらをご覧ください">
					</a>
					<h3 class="info-list_ttl info-list_ttlSub">
						<img src="../common/images/info_hl05.png" alt="チケット">
					</h3>
					<p class="info-list_text">
						一般指定：各7,800円（税込/全席指定）
						<br>
						<span class="text__caution">※枚数制限：お一人様2枚まで</span>
					</p>
				</li>
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl06.png" alt="チケット販売スケジュール">
					</h3>
					<p class="info-list_text">
						<span class="text__schedule">
							公式HP1次先行（抽選）:
							<br>
							2017年7月23日(日)17:00～<br class="sp_con">8月6日(日)23:59
						</span>
						<span class="text__schedule">
							JTBオフィシャルツアーパック（先着）：
							<br>
							2017年7月23日(日)21:00～<br class="sp_con">8月6日(日)23:59
							<br>
							<span>※ホテル宿泊プランや限定グッズ、イベントグッズ事前<br class="sp_con">申込などの特典がついたスペシャルパック</span>
						</span>
						<a href="http://www.jtbbwt.com/section/houjinyokohama/anijam" target="_blank" class="text__schedule-link common-cl_red">
							詳しくはコチラ
						</a>
					</p>

					<a href="../ticket/" class="info-btn">
						<img src="../common/images/info_bo01.png" alt="チケットページはこちら">
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
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl08.png" alt="主催">
					</h3>
					<p class="info-list_text">
						テレビ東京・アニメJAM2017実行委員会
					</p>
				</li>
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl09.png" alt="企画・制作">
					</h3>
					<p class="info-list_text">
						テレビ東京/エイベックス・ピクチャーズ 
					</p>
				</li>
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl10.png" alt="協力">
					</h3>
					<p class="info-list_text">
						エイベックス・ピクチャーズ
						<br>
						ソニー・ミュージックエンタテインメント
						<br>
						ビクターエンタテインメント
						<br>
						（50 音順）
					</p>
				</li>
				<li>
				</li>
			</ul>

		</div>
	</div>
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>
