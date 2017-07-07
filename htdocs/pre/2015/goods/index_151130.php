<?php
	require_once('../common/common.php');
	include_once "../_util.php";
?>

<?php
/********************************************
 * ニュース一覧
 ********************************************/
$param = array(
	'mode' => 3,
	'artist_cd' => 'ANIJ2',
	'env' => 'test'
);

$enc = 'UTF-8';

//リンク先ファイル名(rootパス）
$goods_link = 'detail.php';

$ua = $_SERVER['HTTP_USER_AGENT'];


/*********************************/
$html = '';
$param['user_agent'] = $ua;
$url = $SCRIPT_URL . '?' . http_build_query($param);
if($xml = @simplexml_load_file($url)){
	if (isset($xml->code)) {
		echo "<!-- error : ".$xml->code." -->\n";
	} else {
		if (isset($xml->item)) {
			foreach($xml->item as $item) {
				if (!empty($item->url)) {
					$id = substr($item->url, 3);

					$param2 = array(
						'mode' => 4,
						'id'=> $id,
						'artist_cd' => 'ANIJ2',
						'env' => 'test',
						'user_agent' => $ua
					);

					$url2 = $SCRIPT_URL . '?' . http_build_query($param2);

					if($xml2 = @simplexml_load_file($url2)){
						if (isset($xml2->code)) {
							echo "<!-- error : ".$xml2->code." -->\n";
						} else {
							if (isset($xml2)) {
								$html.= '<div class="goods-row__child">';
								$html.= '<h3 class="goods-logo"><img src="../assets/fig/goods/logo_'.$id.'.png" alt="'.$xml2->group_title.'" width="200"></h3>';
								$html.= '<ul class="goods-list cf">';

								foreach($xml2->goods->item as $item) {
									$html.= '<li class="goods-list__item">';
									if (!empty($item->url)) $html.= '<a class="cbox" href="'.$goods_link.'?'.$item->url.'">';
									$html.= '<div class="iamges"><img src="'.$item->image.'"></div>';
									$html.= '<div><span class="name">'.$item->title.'</span><span class="price">'.$item->price.'円（税込）</span></div>';
									if (!empty($item->url)) $html.= '</a>';
									$html.= '</li>';
								}

								$html .= '</ul>';
								$html .= '</div>';
							}
						}
					} else {
						print "<!-- error : XMLが取得できませんでした。 -->\n";
					}
				}
			}
		}
	}
} else {
	print "<!-- error : XMLが取得できませんでした。 -->\n";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Goods ｜ アニメJAM 2015</title>
	<meta name="description" content="アニメJAM 2015 オフィシャルサイト">
	<meta name="keyword" content="アニメJAM,ANIME JAM,銀魂,弱虫ペダル,ダイヤのA,Wake Up,Girls！,プリパラ,実は私は">
	<meta property="og:title" content="アニメJAM 2015 オフィシャルサイト">
	<meta property="og:description" content="「アニメJAM2015」テレビ東京で放送されている注目アニメ作品のライブ＆豪華キャストによるトークショー等！2015年12月13日(日)幕張メッセで開催！">
	<meta property="og:image" content="http://anime-jam.com//facebook-ogpsd.jpg" />  
	<meta property="og:url" content="http://anime-jam.com/">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="アニメJAM 2015 オフィシャルサイト">

	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="/assets/css/reset.css">
	<link rel="stylesheet" href="/assets/css/common.css">
	<link rel="stylesheet" href="/assets/css/goods.css">

	<!-- OGP -->

	<!-- CSS -->
	<!--[if lt IE 9]>
	<script src="../assets/js/libs/html5shiv.min.js"></script>
	<![endif]-->
<meta name="viewport" content="width=980">
</head>
<body>
	<?php include_once "../_ga.php"; ?>
	<div id="wrap">
		<?php include_once "../_header.php"; ?>	

		<div class="layout-news">
		<h3><img src="../assets/fig/goods/title.png" height="32" width="175" alt=""></h3>
  <article>
    <div class="goods-rows">
      <div class="goods-row__child">
        <h3 class="goods-logo"><img alt="ロックステージ" src=
        "../assets/fig/goods/logo_1000635.png" width="200"></h3>
        <ul class="goods-list cf">
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002985">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002985.jpg"></div>
            <div>
              <span class="name">アニメJAM 2015　Rock
              Stageパンフレット</span><span class="price">2,800円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002987">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002987.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 公式Tシャツ ～Rock
              stage～</span><span class="price">2,500円（税込）</span>
            </div></a>
          </li>
        </ul>
      </div>
      <div class="goods-row__child">
        <h3 class="goods-logo"><img alt="ポップスステージ" src=
        "../assets/fig/goods/logo_1000636.png" width="200"></h3>
        <ul class="goods-list cf">
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002986">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002986.jpg"></div>
            <div>
              <span class="name">アニメJAM 2015　Pop Stageパンフレット</span><span class=
              "price">2,800円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002988">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002988.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 公式Tシャツ ～Pop
              stage～</span><span class="price">2,500円（税込）</span>
            </div></a>
          </li>
        </ul>
      </div>
      <div class="goods-row__child">
        <h3 class="goods-logo"><img alt="銀魂" src=
        "../assets/fig/goods/logo_1000634.png" width="200"></h3>
        <ul class="goods-list cf">
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002979">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002979.jpg"></div>
            <div>
              <span class="name">アニメJAM2015
              クリアファイル&amp;ステッカーセット</span><span class="price">1,000円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002989">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002989.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 トレーディングキーホルダー</span> <span class=
              "price">500円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002992">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002992.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 マフラータオル</span><span class=
              "price">2,000円（税込）</span>
            </div></a>
          </li>
        </ul>
      </div>

      <div class="goods-row__child">
        <h3 class="goods-logo"><img alt="ダイヤのA" src=
        "../assets/fig/goods/logo_1000633.png" width="200"></h3>
        <ul class="goods-list cf">
          <li class="goods-list__item">
          <span style="color:#F00;">Coming Soon...</span>
          </li>
        </ul>
      </div>

      <div class="goods-row__child">
        <h3 class="goods-logo"><img alt="弱虫ペダル" src=
        "../assets/fig/goods/logo_1000632.png" width="200"></h3>
        <ul class="goods-list cf">
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002981">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002981.jpg"></div>
            <div>
              <span class="name">アニメJAM2015
              クリアファイル&amp;ステッカーセット</span><span class="price">1,000円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002991">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002991.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 トレーディングキーホルダー</span> <span class=
              "price">500円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1003000">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1003000.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 マフラータオル</span><span class=
              "price">2,000円（税込）</span>
            </div></a>
          </li>
        </ul>
      </div>
      <div class="goods-row__child">
        <h3 class="goods-logo"><img alt="Wake Up, Girls！" src=
        "../assets/fig/goods/logo_1000629.png" width="200"></h3>
        <ul class="goods-list cf">
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002984">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002984.jpg"></div>
            <div>
              <span class="name">アニメJAM2015
              クリアファイル&amp;ステッカーセット</span><span class="price">1,000円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002996">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002996.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 トレーディング缶バッジ</span><span class=
              "price">500円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002999">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002999.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 マフラータオル</span><span class=
              "price">2,000円（税込）</span>
            </div></a>
          </li>
        </ul>
      </div>
      <div class="goods-row__child">
        <h3 class="goods-logo"><img alt="プリパラ" src=
        "../assets/fig/goods/logo_1000630.png" width="200"></h3>
        <ul class="goods-list cf">
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002983">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002983.jpg"></div>
            <div>
              <span class="name">アニメJAM2015
              クリアファイル&amp;ステッカーセット</span><span class="price">1,000円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002995">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002995.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 トレーディング缶バッジ</span><span class=
              "price">500円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002998">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002998.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 マフラータオル</span><span class=
              "price">2,000円（税込）</span>
            </div></a>
          </li>
        </ul>
      </div>
      <div class="goods-row__child">
        <h3 class="goods-logo"><img alt="実は私は" src=
        "../assets/fig/goods/logo_1000631.png" width="200"></h3>
        <ul class="goods-list cf">
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002982">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002982.jpg"></div>
            <div>
              <span class="name">アニメJAM2015
              クリアファイル&amp;ステッカーセット</span><span class="price">1,000円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002994">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002994.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 トレーディング缶バッジ</span><span class=
              "price">500円（税込）</span>
            </div></a>
          </li>
          <li class="goods-list__item">
            <a class="cbox" href="detail.php?id=1002997">
            <div class="iamges"><img src=
            "http://img.imageimg.net/artist/anime-jam2/img/goods_item_1002997.jpg"></div>
            <div>
              <span class="name">アニメJAM2015 マフラータオル</span><span class=
              "price">2,000円（税込）</span>
            </div></a>
          </li>
        </ul>
        <div class="notice">
        <h4>【グッズ販売について】</h4>
        <p><span>■販売会場：幕張メッセ 国際展示ホール4<br>
■販売時間：10：00～18：00</span><br>
(チケットをお持ちでないお客様の最終入場は17：30となります。)<br>
<br>
【ご注意】<br>
・当日の公演チケットをお持ちでないお客様も、グッズ購入が可能です。<br>
・Rock Stageオフィシャルグッズ、Pop Stageオフィシャルグッズともに共通の売り場での販売となります。<br>
・JTBオフィシャルツアーから事前にグッズをご購入いただいたお客様は、当日JTBグッズ交換ブースにてお引き取りください。<br>
・Pop Stage終演後もチケットをお持ちのお客様のみを対象として、グッズ販売を実施します。<br>
・商品は数に限りがございますので、なくなり次第終了とさせていただきます。<br>
・会場内の移動や整列等につきましてはスタッフの案内に従ってご利用ください。<br>
・当日の状況により、販売時間等予告なく変更する場合がございます。予めご了承ください。<br>
お買い求め頂いた商品・サイズ・数量・お釣銭などは、必ずその場でご確認ください。<br>
・売場を離れられた後のクレームや、後日のお問い合わせには対応しかねますので、予めご了承ください。<br>
・お支払いの際、クレジットカードの使用はできません。お支払いは全て現金のみとなります。予めご了承ください。<br>
・取扱説明に従わず起きた商品の不良・交換は一切行いませんので、取扱説明書を必ずご確認ください。<br>
<br>
※その他、CD、BD&DVD商品も販売しております。<br>
※販売時間は変更になる可能性があります。</p>
        </div>

      </div>
    </div>
  </article>
		</div>
		<?php include_once "../_footer.php"; ?>
		<p class="mod-pageTop">
			<img src="<?php echo $rP;?>assets/fig/common/btn_pagetop.png" height="60" width="60" alt="page top">
		</p>
	</div>
	<?php include_once "../_floatObj.php"; ?>
	<!-- script -->
	<script data-main="<?php echo $rP;?>assets/js/common" src="<?php echo $rP;?>assets/js/lib/require.js"></script>

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.colorbox-min.js"></script>
  <script>
    $(function() {
      $('.cbox').colorbox({
        iframe: true,
        width: 920,
        height: 500,
        transition:'none'
      });
    });
</script>
</body>

</html>
