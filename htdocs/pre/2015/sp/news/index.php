<?php $current = 'news'; ?>
<?php
  require_once('../assets/inc/common.php');
?>
<?php
/********************************************
 * ニュース一覧
 ********************************************/
$link_url = "detail.php";
$p = isset( $_REQUEST['page'] ) ? $_REQUEST['page'] : 0;

$param = array(
  'mode'=> 18,
  'artist_cd' => $artist_cd,
  'limit'   => '10',
  'year'    => $_REQUEST['year'],
  'page'    => $p,
  'env'=> $env,
);

$enc = 'UTF-8';
/********************************************/

$SCRIPT_URL = 'http://avex.jp/api_pc.php';
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

if($xml = @simplexml_load_file($url)) {
  if(isset($xml->code)) {
    print "<!-- error : ".$xml->code." -->\n";
  } else {
    $html = $html2 = '';
    $select_year = '';

    if(isset($xml->years)) {
      $select_year = $xml->years->select_year;
    }

    if(isset($xml->item)) {
      foreach($xml->item as $item) {
        $id = $item->id;
        $title = mb_substr($item->title, 0, 100, 'UTF-8');
        if( strlen($item->title) > 100 ) $title .= '...';
        $contents = $item->contents;
        $date = $item->date;
        $date_dot = str_replace("/", ".", $date);
        $date_comma = str_replace("/", ",", $date);

        //リンクURL設定
        list($uri, $param) = explode("?", $link_url);
        if($param != "") $param .= "&";
        $param .= "id=".$id;
        $link = $uri."?".$param;

        //HTML出力部分
        $html .= '<li class="news__item">'."\n";
        $html .= '<article>'."\n";
        $html .= '<div class="news__header">'."\n";
        $html .= '<div class="publish-date"><time settime="'.date('Y-m-d', strtotime($date)).'">'.date('Y/m/d', strtotime($date)).'</time></div>'."\n";
        $html .= '<h3 class="news__title"><a href="'.$link.'">'.$title.'</a></h3>'."\n";
        $html .= '</div>'."\n";
        $html .= '</article>'."\n";
        $html .= '</li>'."\n";
      }
    }

    if (isset($xml->paging)) {
      $paging = $xml->paging;

      $html2 .= '<div class="news__pager">'."\n";
      $html2 .= '<ul>'."\n";
      foreach ($paging->list->item as $page) {
        if (!isset($p) || $p != $page) {
          $html2 .= '<li class="pager__item"><a href="?page='.$page.'">'.$page.'</a></li>'."\n";
        } else if (!isset($p) || $p != $page) {
          $html2 .= '<li class="pager__item"><a href="?page='.$page.'">'.$page.'</a></li>'."\n";
        } else {
          $html2 .= '<li class="pager__item current"><a class="active">'.$page.'</a></li>'."\n";
        }
      }
      $html2 .= '</ul>'."\n";
      $html2 .= '</div>'."\n";
      $html2 .= "\n";
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
	<title>NEWS LIST ｜ アニメJAM 2015</title>
	<?php include_once "../assets/inc/meta.html"; ?>


	<link rel="stylesheet" href="../assets/css/reset.css">
	<link rel="stylesheet" href="../assets/css/common.css">
	<link rel="stylesheet" href="../assets/css/news_list.css">
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
			<?php include_once "../assets/inc/header.html"; ?>

			<article>
				<h2><img src="../assets/img/event_info/title.png" height="50" width="374" alt="EVENT INFO"></h2>



				<div class="news__wrap active">
				    <ul class="news__list">
				    	<?php echo out($html, (string)$xml->carrier); ?>
				    </ul>
					<?php echo out($html2, (string)$xml->carrier); ?>
				</div>

			</article>

			<?php include_once "../assets/inc/footer.html"; ?>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../assets/js/main.js"></script>
</body>
</html>