<?php
define("PAGE_TITLE", "LIVE VIEWING");
require_once "../_config.php";
$artist_cd = $artist_cd;
$RECENT_DATE = $RECENT_DATE;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-head.inc"; ?>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<title><?php echo PAGE_TITLE?>｜<?php include "../include/common/title.inc"?></title>
<meta name="description" content="<?php echo PAGE_TITLE;?>ページです。<?php include "../include/common/description.inc";?>">
<meta name="keywords" content="<?php echo PAGE_TITLE;?>,<?php include "../include/common/keywords.inc";?>">

<!-- icon -->
<?php require_once "../include/html/head_favicon.inc"; ?>

<!--ogp -->
<?php require_once "../include/common/og.inc";?>

<!-- twitter_card -->
<?php require_once "../include/common/twitter_card.inc";?>

<!-- css -->
<?php require_once "../include/html/head_css.php";?>

<!-- js -->
<?php require_once "../include/html/head_js.php";?>

</head>


<body id="liveviewing" class="second">
<!-- Google Tag Manager -->
<?php require_once "../include/common/gtm-body.inc"; ?>
<!-- End Google Tag Manager -->

<?php require_once "../include/html/header.php"; ?>

	<!-- ▼ contents -->
	<div id="contents">
		<div class="contentsInner bgType01">
			<section class="innerBlock">
				<h2 class="contentsInner-h2">
					<img src="../common/images/liveviewing_title.png" alt="LIVE VIEWING">
				</h2>
			</section>

			<ul class="info-list clearfix">
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl01.png" alt="開催日程">
					</h3>
					<p class="info-list_text">
						<span class="text__date"><span>2017</span>年<span>12</span>月<span>24</span>日（日）</span>
						【夜の部】開場 17:30　開演 18:30<br>
						<span class="text__caution">※時間は変更になる可能性があります。<br>
							※昼の部のライブビューイング実施はございません。</span>
					</p>
				</li>

				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/title_place.png" alt="実施劇場">
					</h3>
					<table class="table-list">
						<thead>
							<tr>
								<th>都道府県</th>
								<th>劇場名</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>北海道</th>
								<td><a href="http://cinema.sugai-dinos.jp/pc/sapporo/" target="_blank">ディノスシネマズ札幌劇場</a></td>
							</tr>
							<tr>
								<th>宮城</th>
								<td><a href="https://hlo.tohotheater.jp/net/schedule/078/TNPI2000J01.do" target="_blank">TOHOシネマズ 仙台</a></td>
							</tr>
							<tr>
								<th>東京</th>
								<td><a href="http://wald9.com/index.html" target="_blank">新宿バルト9</a></td>
							</tr>
							<tr>
								<th>愛知</th>
								<td><a href="http://www.midland-sq-cinema.jp/" target="_blank">ミッドランドスクエアシネマ</a></td>
							</tr>
							<tr>
								<th>大阪</th>
								<td><a href="https://hlo.tohotheater.jp/net/schedule/037/TNPI2000J01.do" target="_blank">TOHOシネマズ 梅田</a></td>
							</tr>
							<tr>
								<th>広島</th>
								<td><a href="http://wald11.com/index.html" target="_blank">広島バルト11</a></td>
							</tr>
							<tr>
								<th>福岡</th>
								<td><a href="http://t-joy.net/site/hakata/index.html" target="_blank">T・ジョイ博多</a></td>
							</tr>
						</tbody>
					</table>
					<p class="info-list_text--caution">
						<span class="text__caution">※諸事情により、T・ジョイPRINCE品川、横浜ブルク13、川崎チネチッタ、シネマイクスピアリ、TOHOシネマズ なんば、TOHOシネマズ 西宮OSでの上映は中止とさせて頂きます。</span>
					</p>
				</li>

				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl03.png" alt="出演作品">
					</h3>
					<p class="info-list_text">
						アイドルタイムプリパラ
						<br>
						Wake Up, Girls ! 新章
						<br>
						劇場版トリニティセブン
						<br>
						けものフレンズ
						<br>
						魔法陣グルグル
						<br>
						恋愛暴君
						<span class="text__caution">※出演者は変更になる可能性があります。</span>
					</p>
				</li>

				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/title_ticket.png" alt="チケット">
					</h3>
					<p class="info-list_text">
						各3,800円（税込/全席指定）<br>
						<span class="text__caution">※本公演同様、3歳未満は入場不可<br>
							※出演者変更に伴う払戻し不可<br>
							※別途プレイガイド手数料がかかります</span>
					</p>
				</li>

				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl06.png" alt="チケット販売スケジュール">
					</h3>
					<p class="info-list_text">
						<span class="text__schedule">
							<em>公式HP先行一次受付</em><br>
							・エントリー期間：10/3(火)12:00～10/16(月)23:59<br>
							・当落確認/入金期間：<br>
							10/20(金)18:00～10/22(日)23:59<br>
							・発券開始/引取期間：<br>
							11/11(土)10:00～12/21(木)23:30<br>
							<span class="common-cl_red">※クレジットカード決済は公演当日まで発券可能</span><br>
							・受付方法：WEB予約　<br>
							（URL　<a href="http://w.pia.jp/t/anime-jam-lv/" target="_blank">http://w.pia.jp/t/anime-jam-lv/</a>）<br>
							・決済方法：セブン-イレブン決済/ファミリーマート決済/ぴあ店舗・サークルK・サンクス決済/クレジットカード決済<br>
							・引取方法：全国のセブン-イレブン、ファミリーマート、サークル K・サンクス、チケットぴあ店舗、配送引取
							・枚数制限：お一人様2枚まで<br>
							・手数料：648円/1枚 （内訳　発券手数料108円、システム利用料216円、特別販売利用料324円）</span>
						<span class="text__caution">※事前にチケットぴあ無料会員登録が必要となります。<br>
							※入金期間に入金されなかった場合は当選が無効となりますのでご注意ください。<br>
							※配送引取を選択の場合、1件につき配送料617円がかかります。その際発券手数料108円/1枚は発生いたしません。</span>
					</p>
				</li>
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl07.png" alt="公演に関するお問い合わせ">
					</h3>
					<p class="info-list_text">
						<span class="text__inq">
							<em>【公演に関するお問い合わせ】</em>
							<br>
							インフォメーションダイヤル <br class="sp_con">TEL：03-5793-8878
							<br>
							（オペレーター受付時間　平日13:00～18:00）
						</span>
						<span class="text__inq">
							<em>【チケットに関するお問い合わせ】</em>
							<br>
							チケットぴあ　<a href="http://t.pia.jp/help/" target="_blank">http://t.pia.jp/help/</a>
						</span>
					</p>
				</li>
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/title_caution.png" alt="注意事項">
					</h3>
					<p class="info-list_text">
						●チケットご購入後お客様のご都合による変更及び払い戻しは、いかなる場合におきましても行っておりません。予めご了承の上お申込みください。<br>
						●劇場内は、カメラや携帯端末などのいかなる機材においても録音/録画/撮影を禁止しております。このような行為が行われた場合は、記録された内容を削除の上ご退場いただきますので、予めご了承ください。<br>
						●上映会場に、マスコミ取材が入る可能性がございます。<br>
						●本イベントは衛星生中継のため、天候等により映像・音声に乱れが生じる場合がございます。あらかじめご了承下さいますようお願いいたします。<br>
						●条例により、年齢による入場制限がある地域がございます。ご購入前に予めご確認ください。（大阪府の劇場は16歳未満保護者同伴に限り入場可）
					</p>
				</li>
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/info_hl09.png" alt="企画・制作">
					</h3>
					<p class="info-list_text">
						テレビ東京/エイベックス・ピクチャーズ 
					</p>
				</li>
				<li>
					<h3 class="info-list_ttl">
						<img src="../common/images/title_produce.png" alt="ライブビューイング主催">
					</h3>
					<p class="info-list_text">
						エイベックス・ピクチャーズ株式会社
					</p>
				</li>
			</ul>

		</div>
	</div>
	<!-- ▲ contents -->

<?php require_once "../include/html/footer.php"; ?>

</body>
</html>
