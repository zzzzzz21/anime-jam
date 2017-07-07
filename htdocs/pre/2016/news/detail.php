<?php
define("PAGE_TITLE", "NEWS");
require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/_config.php");
$artist_cd = $artist_cd;
?>
<!DOCTYPE html>
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
<script type="text/javascript" src="../common/js/shareSoc.js"></script>
</head>

<body id="news-detail" class="second">
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
		
		<div id="contentsBody">
			<!-- post -->
			<div class="bgWhite post">
				
				<!-- news-detailTxt -->
				<div class="news-detailTxt">
<?php
/* ====================================================================== */

/*********************************/
/* ニュース詳細 */
/*********************************/
$param = array(
'mode'=> 19,
'id'=> $_REQUEST['id'],

//アーティストコード
'artist_cd'	=> $artist_cd,

//環境設定
// production => 本番
// test => テスト
'env'=> $env,
);

// 文字コード
// UTF-8
// EUC-JP
// SJIS
$enc = 'UTF-8';


/*********************************/

$SCRIPT_URL = 'http://api.avex.jp/api_pc.php';
$param['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
$url = $SCRIPT_URL . '?' . http_build_query($param);

if($xml = @simplexml_load_file($url)){
	if(isset($xml->code)){
		print "<!-- error : ".$xml->code." -->\n";
	}else{
		if(isset($xml->item)){
			$title = $xml->item->title;
			$contents = $xml->item->contents;
			$date = $xml->item->date;
			$date_dot = str_replace("/", ".", $date);
			$date_comma = str_replace("/", ",", $date);

			$html .= "<div class=\"newsTTL\">\n";
			$html .= "<h3>".$title."</h3>\n";		//タイトル
			$html .= "<p class=\"date\">".$date."</p>\n";		//日付
			$html .= "</div>\n";
			$html .= "<div class=\"snsBtn\">\n";
			$html .= "<div class=\"social clearfix\"><script type=\"text/javascript\">shareSoc('".$title."', 'tw,fl')</script></div>\n";   //SNS
			$html .= "</div>\n";
			$html .= "<div class=\"news-detailBody\">\n";
			$html .= $contents."\n";				//本文
			$html .= "</div>\n";
			print out($html, (string)$xml->carrier);
		}
	}
}else{
	print "<!-- error : XMLが取得できませんでした。 -->\n";
}

?>


<?php
/**
 * エラーコード一覧
 * 0 : アーティストコード未指定
 * 1 : 処理モード指定
 * 2 : ENV
 * 3 : id未指定
 */
?>
				
			</div>
			<!-- //post -->
			
			<div class="btnCenter"><a href="index.php">NEWS一覧へ戻る</a></div>
		</div>
		
	</div>
	<!-- ▲ contents -->
	
	<div class="pagetop"><a href="#">pagetop</a></div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/2016/include/html/footer.php"); ?>

</body>
</html>
