<?php
define("PAGE_TITLE", "EVENT INFO");
require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/_config.php");
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
<meta property="og:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/2016/include/common/og-image.inc"); ?>">
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:site_name" content="<?php include '../include/common/title.inc'?>">
<meta property="og:type" content="article">
<meta property="fb:app_id" content="<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/common/fb-app_id.inc"); ?>">

<!-- twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@animejam_staff">
<meta name="twitter:creator" content="@animejam_staff">
<meta name="twitter:title" content="<?php include '../include/common/title.inc'?>">
<meta name="twitter:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include '../include/common/description.inc';?>">
<meta name="twitter:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta name="twitter:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/2016/include/common/og-image.inc"); ?>">

<!-- css -->
<?php require_once "../include/html/head_css.php"; ?>
<!-- js -->
<?php require_once "../include/html/head_js.php"; ?>
</head>

<body id="info" class="second">
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
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/header_logo.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/header_nav.php"); ?>
		</nav>
	</header>
	<!-- ▲ header -->

	<!-- ▼ contents -->
	<div id="contents">
		<div class="title">
			<h2><span><?php echo PAGE_TITLE;?></span></h2>
		</div>
		<div class="titlePic">
			<h3 class="titlePic_txt">テレビ東京の人気アニメ作品が大集結する夢のコラボレーションイベント「アニメJAM2016」今年はさらにパワーアップし、史上最大数の豪華キャスト＆アーティストが幕張メッセに大集合！「Rock Stage」と「Pop Stage」に分かれ、初の2Daysで開催決定！</h3>
			<div class="bgPic">
				<img src="../common/images/event_ttlPic.jpg" alt="">
			</div>
		</div>
		
		<div id="contentsBody">
			<div class="post infoTxt">
				<h4><img src="../common/images/event_content_ttl01.png" alt="開催日時"></h4>
				<p>Rock Stage：2016年12月10日（土） 開場13:00　開演14:00 <br>Pop Stage：2016年12月11日（日） 開場12:00 開演13:00<br>
				※時間は変更になる可能性があります。</p>
			</div>
			<div class="post infoTxt">
				<h4><img src="../common/images/event_content_ttl02.png" alt="会場"></h4>
				<p><a href="https://www.m-messe.co.jp/" target="_blank">幕張メッセ　国際展示場</a></p>
			</div>
			<div class="post infoTxt">
				<h4><img src="../common/images/event_content_ttl03.png" alt="出演作品"></h4>
				<p>
					<strong>【Rockステージ】</strong><br>
					カードファイト!! ヴァンガードG<br>
					KING OF PRISM by PrettyRhythm<br>
					双星の陰陽師<br>
					美男高校地球防衛部LOVE！LOVE！<br>
					弱虫ペダル<br>
					<br>
					<strong>【Popステージ】</strong><br>
					Wake Up, Girls！<br>
					タブー・タトゥー<br>
					劇場版トリニティセブン<br>
					ハンドレッド<br>
					プリパラ<br>
					ゆるゆり さん☆ハイ！<br>
					Re：ゼロから始める異世界生活
				</p>
			</div>
			<div class="post infoTxt">
				<h4><img src="../common/images/event_content_ttl04.png" alt="イベント出演者"></h4>
				<p><div class="btnCenter"><a href="../cast/">イベントの出演者についてはこちらをご覧ください</a></div></p>
			</div>
			<div class="post infoTxt">
				<h4 class="ttl">「おそ松さん撮影会」開催決定！</h4>
				<p>12月10日（土）イベント会場にて、「おそ松さん撮影会」を開催することが決定いたしました！<br>
				幕張メッセに6つ子たちが遊びにやって来ます！<br>
				<br></p>
				
				<div class="picArea">
					<img src="../common/images/info_osomatsu.png" alt="おそ松さん">
					<div class="btnOfficial"></div>
				</div>
				<br>
				<span class="fontS">※ステージ出演ではございません。<br>
				※アニメJAM 2016のチケットをお持ちでないお客様にもご参加いただけます。<br>
				※撮影会は予告無く変更、中止となる場合がございます。<br>
				※事故・混乱防止のため、様々な制限を設けさせていただくことがございます。</span>
				<p></p>
				<div class="btnCenter detail"><a href="../news/detail.php?id=1043394">詳細はこちら</a></div>
			</div>
			<div class="post infoTxt">
				<h4><img src="../common/images/event_content_ttl05.png" alt="チケット価格"></h4>
				<p>【Rock Stage】7,800円（税込／全席指定）<br>
				【Pop Stage】7,800円（税込／全席指定）<br>
				<span class="fontS">※枚数制限：お一人様4枚まで</span></p>
			</div>
			<div class="post infoTxt">
				<h4><img src="../common/images/event_content_ttl06.png" alt="チケット販売スケジュール"></h4>
				<p>1）アニメJAM2016 公式サイト 3次先行（抽選）<br>
					<span class="fontS">申込受付期間：9月29日(木)12:00～10月10日(月・祝)23:59</span></p>
				<p>2）JTBオフィシャルツアースペシャルパック2次受付（先着）<br>
					<span class="fontS">申込受付期間：10月1日(土)10:00～10月10日(月・祝)23:59</span>
				</p>
				<div class="btnCenter ticket"><a href="../ticket/">TICKETについてはこちらをご覧ください</a></div>
			</div>
			<div class="post infoTxt">
				<h4><img src="../common/images/event_content_ttl07.png" alt="お問い合わせ先"></h4>
				<p>【公演に関するお問い合わせ】<br>インフォメーションダイヤル<br>
				TEL：03-5793-8878<span class="sp_txt">（オペレーター受付時間　平日13:00～18:00）</span></p>
				<p>【チケットに関するお問い合わせ】<br>チケットぴあ　<a href="http://t.pia.jp/help/" target="_blank">http://t.pia.jp/help/</a></p>
				<p>【uP!!! auスマートパス先行お申し込みに関するお問い合わせ】<br>
				チケットぴあ <a href="mailto:&#113;&#117;&#101;&#115;&#116;&#105;&#111;&#110;&#64;&#112;&#105;&#97;&#46;&#99;&#111;&#46;&#106;&#112;">&#113;&#117;&#101;&#115;&#116;&#105;&#111;&#110;&#64;&#112;&#105;&#97;&#46;&#99;&#111;&#46;&#106;&#112;</a><br>
				営業時間：10:00～18:00 （土日祝除く）<br>
				<span class="fontS">メールの件名に“「アニメJAM 2016」uP!!!先行受付お問い合わせ”、<br>
				本文に“お名前”と“お電話番号”を必ずご明記ください。<br>
				申込結果に関するお問い合わせはお答えできません。予めご了承ください</span>。</p>
				<p>【JTBオフィシャルツアースペシャルパックに関するお問い合わせ】<br>JTBコーポレートセールス　法人営業横浜支店内<br>
				アニメJAM2016オフィシャルツアーデスク（営業時間：9:30～17:30、定休日：土日祝日休業）<br>
				電話：045-316- 4602　FAX：045-316- 5701　Mail：<a href="mailto:&#106;&#116;&#98;&#95;&#99;&#111;&#110;&#118;&#101;&#110;&#116;&#105;&#111;&#110;&#64;&#98;&#119;&#116;&#46;&#106;&#116;&#98;&#46;&#106;&#112;">&#106;&#116;&#98;&#95;&#99;&#111;&#110;&#118;&#101;&#110;&#116;&#105;&#111;&#110;&#64;&#98;&#119;&#116;&#46;&#106;&#116;&#98;&#46;&#106;&#112;</a><br>
				担当：小林(陽)・田中・小川　※土日のお問い合わせはメールのみとなります</p>
			</div>
			<div class="post infoTxt">
				<h4><img src="../common/images/event_content_ttl08.png" alt="主催"></h4>
				<p>テレビ東京・アニメJAM2016実行委員会</p>
			</div>
			<div class="post infoTxt">
				<h4><img src="../common/images/event_content_ttl09.png" alt="企画制作"></h4>
				<p>テレビ東京／エイベックス・ピクチャーズ</p>
			</div>
			<div class="post infoTxt">
				<h4><img src="../common/images/event_content_ttl10.png" alt="協力"></h4>
				<p>アルテメイト / エイベックス・ピクチャーズ / KADOKAWA メディアファクトリー / TOHO animation / ブシロードミュージック / FlyingDog / ポニーキャニオン (50音順)</p>
			</div>
		</div>
	</div>
	<!-- ▲ contents -->
	
	<div class="pagetop"><a href="#">pagetop</a></div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/footer.php"); ?>

</body>
</html>
