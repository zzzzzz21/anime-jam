<?php 
	include_once "../_util.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<title>SPECIAL ｜ アニメJAM 2015</title>
	<meta name="description" content="アニメJAM 2015 オフィシャルサイト">
	<meta name="keyword" content="アニメJAM,ANIME JAM,銀魂,弱虫ペダル,ダイヤのA,Wake Up,Girls！,プリパラ,実は私は">
	<meta property="og:title" content="アニメJAM 2015 オフィシャルサイト">
	<meta property="og:description" content="「アニメJAM2015」テレビ東京で放送されている注目アニメ作品のライブ＆豪華キャストによるトークショー等！2015年12月13日(日)幕張メッセで開催！">
	<meta property="og:image" content="http://anime-jam.com//facebook-ogpsd.jpg" />  
	<meta property="og:url" content="http://anime-jam.com/">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="アニメJAM 2015 オフィシャルサイト">
	<link rel="stylesheet" href="<?php echo $rP;?>assets/css/reset.css">
	<link rel="stylesheet" href="<?php echo $rP;?>assets/css/common.css">
	<link rel="stylesheet" href="<?php echo $rP;?>assets/css/special.css">
</head>
<body>
	<?php include_once "_ga.php"; ?>
	<div id="wrap">
	
		<?php include_once "../_header.php"; ?>	
		<div class="inwrap">
		<h3><img src="../assets/fig/special/title.png" height="32" width="175" alt=""></h3>
<?php
/* ====================================================================== */
/********************************************/
/* フリーページ */
/********************************************/
$array = pathinfo($_SERVER['PHP_SELF']);
$basename = basename($array['basename'], ".php");
$param = array(
'mode'=> 42,
'id'=> special_2015,
//アーティストコード
'artist_cd'	=> 'ANJAM',
//環境設定
// production => 本番
// test => テスト
'env'=> 'production',
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
if($xml = simplexml_load_file($url)){
	if(isset($xml->code)){
		print "<!-- error : ".$xml->code." -->\n";
	}else{
		$contents = $xml->contents_pc;
		$html = "";
		$html .= $contents . "\n";
		print out($html, (string)$xml->carrier);
	}
}else{
	print "<!-- error : XMLが取得できませんでした。 -->\n";
}
function out($str, $carrier) {
	global $enc;
	switch($carrier) {
		case 'docomo':
		case 'softbank':
		case 'au':
			$str = mb_convert_encoding($str, 'SJIS', 'UTF-8');
			return mb_convert_kana($str, 'k', 'SJIS');
	}
	$enc_array = array('SJIS', 'EUC-JP');
	if (in_array($enc, $enc_array)) {
		$str = mb_convert_encoding($str, $enc, "UTF-8");
	}
	return $str;
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
		<?php include_once "../_footer.php"; ?>
		<p class="mod-pageTop">
			<img src="<?php echo $rP;?>assets/fig/common/btn_pagetop.png" height="60" width="60" alt="page top">
		</p>
	</div>
	<?php include_once "../_floatObj.php"; ?>
	<!-- script -->
	<script data-main="<?php echo $rP;?>assets/js/common" src="<?php echo $rP;?>assets/js/lib/require.js"></script>
</body>
</html>
