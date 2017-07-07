<?php
$artist_cd = 'GAANI';
$env="test";
$SCRIPT_URL = 'http://api.avex.jp/api_pc.php';

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
