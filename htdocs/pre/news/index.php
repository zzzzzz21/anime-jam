<?php
define("PAGE_TITLE", "NEWS");
require_once($_SERVER['DOCUMENT_ROOT'] . "/_config.php");
$artist_cd = $artist_cd;
?>
<?php
/* ====================================================================== */

/********************************************/
/* グッズ一覧 */
/********************************************/
$param = array(
'mode'=> 3,


//アーティストコード
'artist_cd'	=>$artist_cd,
'limit'		=> '1000',

//'page'	=> 表示するページ番号
'page'		=> $_REQUEST['page'],

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

//リンク先ファイル名(rootパス）
$goods_link = 'detail.php';


/*********************************/
$SCRIPT_URL = 'http://api.avex.jp/api_pc.php';
$param['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
$url = $SCRIPT_URL . '?' . http_build_query($param);
if($xml = @simplexml_load_file($url)){
	if (isset($xml->code)) {
		echo "<!-- error : ".$xml->code." -->\n";
	} else {
		
		$html = "";
		if (isset($xml->item)) {
			
		}
	}
}else{
	print "<!-- error : XMLが取得できませんでした。 -->\n";
}
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
<meta property="og:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/common/og-image.inc"); ?>">
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:site_name" content="<?php include '../include/common/title.inc'?>">
<meta property="og:type" content="article">
<meta property="fb:app_id" content="<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/include/common/fb-app_id.inc"); ?>">

<!-- twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@animejam_staff">
<meta name="twitter:creator" content="@animejam_staff">
<meta name="twitter:title" content="<?php include '../include/common/title.inc'?>">
<meta name="twitter:description" content="<?php echo PAGE_TITLE;?>ページです。<?php include '../include/common/description.inc';?>">
<meta name="twitter:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta name="twitter:image" content="<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/common/og-image.inc"); ?>">

<!-- css -->
<?php require_once "../include/html/head_css.php"; ?>
<!-- js -->
<?php require_once "../include/html/head_js.php"; ?>
<script type="text/javascript" src="../common/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript">
	$(function() {
	    $('.post').matchHeight();
	});
</script>
</head>

<body id="news" class="second">
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
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/header_logo.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/header_nav.php"); ?>
		</nav>
	</header>
	<!-- ▲ header -->

	<!-- ▼ contents -->
	<div id="contents">
		<div class="title">
			<h2><span><?php echo PAGE_TITLE;?></span></h2>
		</div>
	
		
		<div id="contentsBody">
		
<?php
/* ====================================================================== */

/********************************************/
/* ニュース一覧 */
/********************************************/

//詳細リンクURL
$link_url = "detail.php";

$param = array(
'mode'=> 18,

//アーティストコード
'artist_cd'	=> $artist_cd,
'limit'		=> '9',

//'year'	=> 表示年
'year'		=> $_REQUEST['year'],
//'page'	=> 表示するページ番号
'page'		=> $_REQUEST['page'],
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

if ( isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on' ) {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}
$self = $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$self_array = explode('?', $self);
$self = $self_array[0];

if($xml = @simplexml_load_file($url)){
	if(isset($xml->code)){
		print "<!-- error : ".$xml->code." -->\n";
	}else{
		$html = "";

		$select_year = '';
		if (isset($xml->years)) {
			$select_year = $xml->years->select_year;
		}

		if(isset($xml->item)){
			$html .= "<div class=\"clearfix blc_3\">\n";
			foreach($xml->item as $item){
				$id = $item->id;
				$title = $item->title;
				$contents = $item->contents;
				$date = $item->date;
				$date_dot = str_replace("/", ".", $date);
				$date_comma = str_replace("/", ",", $date);

				//リンクURL設定
				list($uri, $param) = explode("?", $link_url);
				if($param != "") $param .= "&";
				$param .= "id=".$id;
				$link = $uri."?".$param;

				$html .= "<div class=\"post\">\n";	//▼<div class="post">
				$html .= "<a href='".$link."'>\n";			//▼<a href="">
				if($xml->layout->layout_type == 1){
					$html .= "<div class=\"post-image\"><img src=\"" . $item->thumbnail_image . "\" /></div>\n";	//サムネイル
				}
				$html .= "<dl>\n";							//▼<dl>
				$html .= "<dt>".$date."</dt>\n";			//<dt>日付</dt>
				$html .= "<dd>".$title."</dd>\n";			//<dd>タイトル</dd>
				$html .= "</dl>\n";							//▲</dl>
				$html .= "</a>\n";							//▲</a>
				$html .= "</div>\n";						//▲</div>
			}
			$html .= "</div>\n";
			// ページング
			if (isset($xml->paging)) {
				$paging = $xml->paging;
				$html .= "<div class=\"pager\">";
				$html .= "<a class=\"prev\" href='./?page={$paging->back}&year={$select_year}'>&lt;</a>\n";
				foreach ($paging->list->item as $page) {
					if ($_REQUEST['page'] != $page) {
						$html .= "<a href='./?page={$page}&year={$select_year}'>{$page}</a>";
					} else {
						$html .= "<span class=\"current\">{$page}</span>";
					}
				}
				$html .= " <a class=\"next\" href='./?page={$paging->next}&year={$select_year}'>&gt;</a>";
				$html .= "</div>";
			}
		}
		print out($html, (string)$xml->carrier);
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
		
	</div>
	<!-- ▲ contents -->
	
	<div class="pagetop"><a href="#">pagetop</a></div>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/include/html/footer.php"); ?>

</body>
</html>
