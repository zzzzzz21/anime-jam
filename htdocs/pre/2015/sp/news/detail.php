<?php $current = 'news'; ?>
<?php
  require_once('../assets/inc/common.php');
?>
<?php
/********************************************
 * ニュース詳細
 ********************************************/
$param = array(
  'mode'=> 19,
  'id'=> $_REQUEST['id'],
  'artist_cd' => $artist_cd,
  'env'=> $env,
);

$enc = 'UTF-8';
/********************************************/

$SCRIPT_URL = 'http://avex.jp/api_pc.php';
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

      $html = '';
      $html .= '<div class="news__header">';
      $html .= '<h3 class="news__title">'.$title.'</h3>';
      $html .= '<div class="publish-date"><time settime="'.date('Y-m-d', strtotime($date)).'">'.date('Y/m/d', strtotime($date)).'</time></div>';
      $html .= '</div>';
      $html .= '<p class="news__body">';
      if($xml->layout->layout_type == 1){
        $html .= "<img src=\"" . $xml->item->thumbnail_image . "\" />\n"; //サムネイル
      }
      $html .= $contents."\n";
      $html .= '</p>';
      $html .= "<div class=\"sns\"><script type=\"text/javascript\">shareSoc('".$title."', 'tw,fl') </script></div>\n";
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
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NEWS ｜ アニメJAM 2015</title>
	<?php include_once "../assets/inc/meta.html"; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/shareSoc.js"></script>

	<link rel="stylesheet" href="../assets/css/reset.css">
	<link rel="stylesheet" href="../assets/css/common.css">
	<link rel="stylesheet" href="../assets/css/news_detail.css">
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
			<?php include_once "../assets/inc/header.html"; ?>

			<article>
				<h2><img src="../assets/img/news/title.png" height="50" width="184" alt="NEWS"></h2>

        <div class="news_detail">
          <?php echo out($html, (string)$xml->carrier); ?>
        </div>
        <div class="link">
          <p><a href="../news/?page=1"><img src="../assets/img/news/btn_return.png" height="124" width="476" alt="一覧へ戻る" /></a></p>
        </div>

			</article>

			<?php include_once "../assets/inc/footer.html"; ?>
	</div>


</body>
</html>