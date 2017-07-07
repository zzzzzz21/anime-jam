<?php $current = 'top'; ?>
<?php
  require_once('./assets/inc/common.php');
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
    $html = '';
    $select_year = '';
    $i = 0;

    if(isset($xml->years)) {
      $select_year = $xml->years->select_year;
    }

    if(isset($xml->item)) {
      foreach($xml->item as $item) {
        if( $i ++ >= 4 ) break;

        $id = $item->id;
        $title = mb_substr($item->title, 0, 100, "UTF-8");

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
        $html .= '<li class="topics__item">';
        $html .= '<article>';
        $html .= '<a href="/news/'.$link.'">'.$title.'<br><span class="publish-date"><time settime="'.date('Y-m-d', strtotime($date)).'">'.date('Y/m/d', strtotime($date)).'</time></span></a>';
        $html .= '</article>';
        $html .= '</li>';
      }
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
	<title>TOP ｜ アニメJAM 2015</title>
	<?php include_once "./assets/inc/meta.html"; ?>

	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/glide.core.css">
	<link rel="stylesheet" href="assets/css/loopslide.css">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/top.css">
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
			<header>
				<h1><img src="assets/img/common/header/logo.png" height="120" width="310" alt="アニメJAM 2015"></h1>

				<div class="menuBtn"><img src="assets/img/common/header/btn_menu.png" height="120" width="120" alt="MENU"></div>
			</header>

			<nav>
				<div class="menu">
					<ul>
						<li><a href="http://anime-jam.com/sp/"><img src="assets/img/common/header/menu_top.png" alt="TOP"></a></li>
						<li><a href="http://anime-jam.com/sp/info/"><img src="assets/img/common/header/menu_event_info.png" height="95" width="300" alt="EVENT INFO"></a></li>
						<li><a href="http://anime-jam.com/sp/goods/"><img src="assets/img/common/header/menu_goods.png" height="95" width="300" alt="GOODS"></a></li>
					</ul>
					<ul>
						<li><a href="http://anime-jam.com/sp/news/?page=1&year="><img src="assets/img/common/header/menu_news.png" height="95" width="300" alt="NEWS"></a></li>
						<li><a href="http://anime-jam.com/sp/cast/"><img src="assets/img/common/header/menu_event_cast.png" height="95" width="300" alt="EVENT CAST"></a></li>
						<li><a href="http://anime-jam.com/sp/ticket/"><img src="assets/img/common/header/menu_ticket.png" height="95" width="300" alt="TICKET"></a></li>
					</ul>
				</div>

				<div class="nav_lineup">
					<h3><img src="assets/img/common/header/title_lineup.png" height="40" width="164" alt=""></h3>
					<ul>
						<li><a href="http://anime-jam.com/sp/lineup/gintama.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_gintama.jpg" height="240" width="192" alt=""><br>銀魂</a></li>
						<li><a href="http://anime-jam.com/sp/lineup/daiyanoace.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_dianoA.jpg" height="240" width="192" alt=""><br>ダイヤのＡ</a></li>
						<li><a href="http://anime-jam.com/sp/lineup/yowamushipedal.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_yowapeda.jpg" height="240" width="192" alt=""><br>弱虫ペダル</a></li>
					</ul>
					<ul>
						<li><a href="http://anime-jam.com/sp/lineup/wakeupgirls.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_wug.jpg" height="240" width="192" alt=""><br>Wake Up, Girls！</a></li>
						<li><a href="http://anime-jam.com/sp/lineup/pripara.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_pripara.jpg" height="240" width="192" alt=""><br>プリパラ</a></li>
						<li><a href="http://anime-jam.com/sp/lineup/jitsuhawatashiha.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_jitsuha.jpg" height="240" width="192" alt=""><br>実は私は</a></li>
					</ul>
					<ul>
						<li><a href="http://anime-jam.com/sp/lineup/osomatsusan.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_osomatsu.jpg" height="240" width="192" alt=""><br>おそ松さん</a></li>
						<li><a href="http://anime-jam.com/sp/lineup/fairytail.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_fairy.jpg" height="240" width="192" alt=""><br>FAIRY TAIL</a></li>
						<li><a href="http://anime-jam.com/sp/lineup/nonnonbiyori.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_nonnon.jpg" height="240" width="192" alt=""><br>のんのんびより<br>りぴーと</a></li>
					</ul>
					<ul>
						<li><a href="http://anime-jam.com/sp/lineup/saki.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_saki.jpg" height="240" width="192" alt=""><br>咲-saki-　全国編</a></li>
						<li><a href="http://anime-jam.com/sp/lineup/ikamusume.php"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_ikamusume.jpg" height="240" width="192" alt=""><br>侵略！イカ娘</a></li>
						<!-- <li><a href=""><img src="" height="240" width="192" alt=""><br></a></li> -->
					</ul>
				</div>
			</nav>

			<article>
				<section class="main_v glide" id="Glide">
					<div class="glide__wrapper">
						<ul class="glide__track">
							<li class="glide__slide"><img src="assets/img/top/main/main00.jpg" height="540" width="750" alt=""></li>
							<li class="glide__slide"><img src="assets/img/top/main/main01.jpg" height="540" width="750" alt=""></li>
							<li class="glide__slide"><img src="assets/img/top/main/main04.jpg" height="540" width="750" alt=""></li>
							<li class="glide__slide"><img src="assets/img/top/main/main02.jpg" height="540" width="750" alt=""></li>
							<li class="glide__slide"><img src="assets/img/top/main/main05.jpg" height="540" width="750" alt=""></li>
							<li class="glide__slide"><img src="assets/img/top/main/main03.jpg" height="540" width="750" alt=""></li>
							<li class="glide__slide"><img src="assets/img/top/main/main06.jpg" height="540" width="750" alt=""></li>
						</ul>
					</div>

					<div class="ticketBtn"><a href="./ticket/"><img src="assets/img/top/btn_ticket.png" height="180" width="690" alt="チケット受付中！詳しくはコチラ"></a></div>
				</section>

				<section class="news">
					<h2><img src="assets/img/top/title_news.png" height="50" width="180" alt="NEWS"></h2>
					<div class="moreBtn"><a href="./news/"><img src="assets/img/top/btn_news_more.png" height="90" width="186" alt="MORE"></a></div>

					<ul class="topics__list">
				    	<?php echo out($html, (string)$xml->carrier); ?>
				    </ul>
				</section>

				<section class="twitter">
					<h2><img src="assets/img/top/title_twitter.png" height="50" width="220" alt="TWITTER"></h2>
					<div class="followBtn"><a href="hthttp://localhost/animejam/assets/img/top/main/main01.jpgtps://twitter.com/animejam_staff" target="_blank"><img src="assets/img/top/btn_twitter_more.png" height="90" width="186" alt="FOLLOW"></a></div>

					<div class="timeline">
						<a class="twitter-timeline" 
							href="https://twitter.com/animejam_staff"
							width="640"
							height="430"
							data-widget-id="636076031489667072"
	          				data-chrome="noheader nofooter transparent scrollbar">
					        @animejam_staffさんのツイート</a>
					</div>
				</section>

				<section class="lineup">
					<h2><img src="assets/img/top/title_lineup.png" height="50" width="230" alt="LINE UP"></h2>

					<div id="loopslider">
						<ul>
							<li><a href="">
								<div class="kv"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_gintama.jpg" width="260" height="325" alt=""></div>
								<div class="title"><img src="http://anime-jam.com/assets/fig/common/lineup/logo_thumb_gintama.png" width="260" height="325" alt=""></div>
								<div class="bg"></div>
							</a></li>
							<li><a href="">
								<div class="kv"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_wug.jpg" width="260" height="325" alt=""></div>
								<div class="title"><img src="http://anime-jam.com/assets/fig/common/lineup/logo_thumb_wug.png" width="260" height="325" alt=""></div>
								<div class="bg"></div>
							</a></li>
							<li><a href="">
								<div class="kv"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_dianoA.jpg" width="260" height="325" alt=""></div>
								<div class="title"><img src="http://anime-jam.com/assets/fig/common/lineup/logo_thumb_dianoA.png" width="260" height="325" alt=""></div>
								<div class="bg"></div>
							</a></li>
							<li><a href="">
								<div class="kv"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_pripara.jpg" width="260" height="325" alt=""></div>
								<div class="title"><img src="http://anime-jam.com/assets/fig/common/lineup/logo_thumb_pripara.png" width="260" height="325" alt=""></div>
								<div class="bg"></div>
							</a></li>
							<li><a href="">
								<div class="kv"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_yowapeda.jpg" width="260" height="325" alt=""></div>
								<div class="title"><img src="http://anime-jam.com/assets/fig/common/lineup/logo_thumb_yowapeda.png" width="260" height="325" alt=""></div>
								<div class="bg"></div>
							</a></li>
							<li><a href="">
								<div class="kv"><img src="http://anime-jam.com/assets/fig/common/lineup/img_thumb_jitsuha.jpg" width="260" height="325" alt=""></div>
								<div class="title"><img src="http://anime-jam.com/assets/fig/common/lineup/logo_thumb_jitsuha.png" width="260" height="325" alt=""></div>
								<div class="bg"></div>
							</a></li>
							<!-- <li><a href="">
								<div class="kv"><img src="" width="260" height="325" alt=""></div>
								<div class="title"><img src="" width="260" height="325" alt=""></div>
								<div class="bg"></div>
							</a></li> -->
							
						</ul>
					</div>

					<div class="moreBtn"><a href="./lineup/"><img src="assets/img/top/btn_lineup_more.png" height="90" width="352" alt="MORE"></a></div>
				</section>

				<section class="share">
					<h2><img src="assets/img/top/title_share.png" height="50" width="230" alt="SHARE"></h2>
					<ul>
						<li><a class="twi" href="http://twitter.com/share?url=http://anime-jam.com/&text=「アニメJAM2015」テレビ東京で放送されている注目アニメ作品のライブ＆豪華キャストによるトークショー等！2015年12月13日(日)幕張メッセで開催！" target="_blank"><img src="assets/img/top/btn_share_twitter.png" height="176" width="176" alt="Twitter"></a></li>

						<li><a class="fb" href="http://www.facebook.com/share.php?u=http://anime-jam.com/" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"><img src="assets/img/top/btn_share_facebook.png" height="176" width="176" alt="Facebook"></a></li>

						<li><a class="line" href="http://line.me/R/msg/text/?「アニメJAM2015」テレビ東京で放送されている注目アニメ作品のライブ＆豪華キャストによるトークショー等！2015年12月13日(日)幕張メッセで開催！http://anime-jam.com/"><img src="assets/img/top/btn_share_line.png" height="176" width="176" alt="LINE"></a></li>
					</ul>
				</section>

				<section class="support">
					<h3><img src="assets/img/top/title_support.png" height="30" width="240" alt="supported by..."></h3>
					<ul>
						<li><a href="https://www.up-now.jp/" target="_blank"><img src="assets/img/top/bn_up.gif" height="100" width="330" alt=""></a></li>
						<!-- <li><a href="" target="_blank"><img src="assets/img/top/bn_sample.gif" height="100" width="330" alt=""></a></li>
						<li><a href="" target="_blank"><img src="assets/img/top/bn_sample.gif" height="100" width="330" alt=""></a></li>
						<li><a href="" target="_blank"><img src="assets/img/top/bn_sample.gif" height="100" width="330" alt=""></a></li>
						<li><a href="" target="_blank"><img src="assets/img/top/bn_sample.gif" height="100" width="330" alt=""></a></li>
						<li><a href="" target="_blank"><img src="assets/img/top/bn_sample.gif" height="100" width="330" alt=""></a></li> -->
					</ul>
				</section>

			</article>

			<footer>
				<div class="copy">
					&copy; テレビ東京・アニメJAM2015実行委員会<br>
					&copy; 空知英秋／集英社･テレビ東京･電通･BNP･アニプレックス<br>
					&copy; 寺嶋裕二・講談社／「ダイヤのＡ‐ＳＳ‐」製作委員会・テレビ東京<br>
					&copy; 渡辺航（週刊少年チャンピオン）／弱虫ペダルGR製作委員会<br>
					&copy; Green Leaves / Wake Up, Girls！2製作委員会<br>
					&copy; Ｔ－ＡＲＴＳ / syn Sophia / テレビ東京 / PP2製作委員会<br>
					&copy; 増田英二（週刊少年チャンピオン）／じつわた製作委員会<br>
					&copy; 真島ヒロ・講談社／フェアリーテイル製作委員会・テレビ東京<br>
					&copy; 2015 あっと・KADOKAWA刊/旭丘分校管理組合二期<br>
					&copy; 赤塚不二夫／おそ松さん製作委員会<br>
					&copy; 小林 立／スクウェアエニックス・清澄高校麻雀<br>
					&copy; 安部真弘（週刊少年チャンピオン）／海の家れもん
				</div>

				<div class="pageTop"><img src="assets/img/common/btn_pagetop.png" height="120" width="120" alt="pagetop"></div>

			</footer>
	</div>

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/glide.min.js"></script>
	<script src="assets/js/loopslide.js"></script>
	<script>
		$(function() {
			$('#Glide').glide({
				autoplay: 7000,
				animationDuration: 1000,
				navigation: false,
				arrows: false
			});
		});
	</script>
</body>
</html>