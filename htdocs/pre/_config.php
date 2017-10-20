<?php
$artist_cd = 'ANIJ4';
$env="test";	//test or production
$RECENT_DATE ="201710040325";
$SCRIPT_URL = 'http://api.avex.jp/api_pc.php';

define("BASE_DIR", "http://pre.anime-jam.com/");

function out($str, $carrier) {
	global $enc;
	switch($carrier) {
		case "docomo":
		case "softbank":
		case "au":
			$str = mb_convert_encoding($str, "SJIS", "UTF-8");
			return mb_convert_kana($str, "k", "SJIS");
	}

	$enc_array = array("SJIS", "EUC-JP");
	if (in_array($enc, $enc_array)) {
		$str = mb_convert_encoding($str, $enc, "UTF-8");
	}
	return $str;
}

function echo_filedate($filename) {
  if (file_exists($filename)) {
    echo date('YmdHis', filemtime($filename));
  } else {
    echo 'file not found';
  }
}

?>