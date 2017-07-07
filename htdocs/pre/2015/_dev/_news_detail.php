				<?php

				/* ====================================================================== */

				/*********************************/
				/* ニュース詳細 */
				/*********************************/

				$param = array(
				'mode'=> 19,
				'id'=> $_REQUEST['id'],

				//アーティストコード
				'artist_cd'	=> 'SMTTS',

				//環境設定
				// production => 本番
				// test => テスト
				'env'=> 'test',
				);

				// 文字コード
				// UTF-8
				// EUC-JP
				// SJIS
				$enc = 'UTF-8';

				/*********************************/


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

							$html .= "<p class='mod-news-articleTitle'>".$title."</p>\n";
							$html .= "<p class='mod-news-articleReleaseDate'>".$date."</p>\n";
							$html .= "<div class='mod-news-article'>".$contents."<ul class='mod-news-article-share'><li><a href='https://twitter.com/share' class='twitter-share-button' data-url='".$shareUrl."'' data-text='".$title."' data-lang='ja'>ツイート</a></li><li><div class='fb-like' data-href='".$shareUrl."' data-width='The pixel width of the plugin' data-height='The pixel height of the plugin' data-colorscheme='light' data-layout='button_count' data-action='like' data-show-faces='false' data-share='false'></div></li></ul></div>\n";
							$html .= "<div class='mod-news-backtop'><a href='./'><img src='../assets/fig/news/btn_return.png' height='60' width='236' alt=''></a></div>\n";

							print out($html, (string)$xml->carrier);
						}
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

					

					

					