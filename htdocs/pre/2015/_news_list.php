						<?php

						/* ====================================================================== */



						/********************************************/

						/* ニュース一覧 */

						/********************************************/



						//詳細リンクURL

						if($current == "TOP"){

							$link_url = "news/detail.php";

							$param = array(

							'mode'=> 18,



							//アーティストコード

							'artist_cd'	=> 'ANJAM',

							'limit'		=> '4',



							//'year'	=> 表示年

							'year'		=> $_REQUEST['year'],

							//'page'	=> 表示するページ番号

							'page'		=> $_REQUEST['page'],

							//環境設定

							// production => 本番

							// test => テスト

							'env'=> 'test',

							);

						}else{

							$link_url = "./detail.php";

							$param = array(

							'mode'=> 18,



							//アーティストコード

							'artist_cd'	=> 'ANJAM',

							'limit'		=> '10',



							//'year'	=> 表示年

							'year'		=> $_REQUEST['year'],

							//'page'	=> 表示するページ番号

							'page'		=> $_REQUEST['page'],

							//環境設定

							// production => 本番

							// test => テスト

							'env'=> 'test',

							);

						}



						// 文字コード

						// UTF-8

						// EUC-JP

						// SJIS

						$enc = 'UTF-8';





						/*********************************/



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





									if($current == "NEWS"){

										$html .= "<ul class='layout-news-datalist'>";

									}

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

										if($current == "TOP"){

											$html .= "<li class='layout-newsItem'>\n";

											$html .= "<a href='".$link."'><p class='mod-newsArticleTitle'>".$title."</p><p class='mod-newsArticleReleaseDate'>".date('m/d', strtotime($date))."</p></a>\n";

											$html .= "</li>\n";											//▲<tr>

										} else {

											$html .= "<li class='layout-news-item'>\n";

											$html .= "<a href='".$link."'><p class='mod-news-artcileTitle'>".$title."</p><p class='mod-news-artcileTitle'>".$date."</p></a>\n";

											$html .= "</li>\n";											//▲<tr>

										}

									}

									if($current == "NEWS"){

										$html .= "</ul>";



										// ページング

										if (isset($xml->paging)) {

											$paging = $xml->paging;



											$html .= "<div class='layout-news-pager'>";

											$html .= "<div class='mod-news-pager-prev'><a href='./?page={$paging->back}&year={$select_year}'><img src='../assets/fig/news/btn_prev.png' height='80' width='40' alt=''></a></div>";

											foreach ($paging->list->item as $page) {

												if ($_REQUEST['page'] != $page) {

													$html .= " <div class='mod-news-pager-item'><a href='./?page={$page}&year={$select_year}'><div class='inner'><p>{$page}</p></div></a></div>";

												} else {

													$html .= " <div class='mod-news-pager-item mod-news-pager-item-active'><div class='inner'><p>{$page}</p></div></div>";

												}

											}

											$html .= " <div class='mod-news-pager-next'><a href='./?page={$paging->next}&year={$select_year}'><img src='../assets/fig/news/btn_next.png' height='80' width='40' alt=''></a></div>";

											$html .= "</div>";

										}

									}

								}

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







