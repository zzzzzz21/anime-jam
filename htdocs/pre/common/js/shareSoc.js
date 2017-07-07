
// share artist
var tweetArtist = 'アニメJAM';

// share social graph
function shareSoc(shareTitle, shareInit, shareURL) {
	if (shareURL == undefined) {
		shareURL = location.href;
	}
	var shareArray = shareInit.split(',');
	for (var i = 0; i < shareArray.length; i++) {
		// tweetview.js
		if (shareArray[i] == 'tw') {
			//document.write('\n<a href="' + shareURL + '" onclick="tweet(\'' + tweetArtist + '\',\'' + shareTitle + '\',\'' + shareURL + '\'); return false;"><img src="http://twitter-badges.s3.amazonaws.com/twitter-a.png" alt="この記事を Tweet"></a>');
			var sTitle = shareTitle + '\ \#' + tweetArtist;
			document.write('\n<a href="http://twitter.com/share" class="twitter-share-button" data-text="' + sTitle + '" data-count="horizontal" data-lang="ja">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>');
		} else if (shareArray[i] == 'mv') {
			document.write('\n<a href="' + shareURL + '" onclick="mixiVoice(\'' + shareTitle + '\',\'' + shareURL + '\'); return false;"><img src="http://img.mixi.jp/img/basic/mixicheck_entry/bt_voice_1.png" alt="この記事を mixi Voice でつぶやく"></a>');
		} else if (shareArray[i] == 'md') {
			mixiDiary(shareTitle,shareURL);
		} else if (shareArray[i] == 'mc') {
			document.write('\n<a href="http://mixi.jp/share.pl" class="mixi-check-button" data-key="179d5ad7a4196e292a9aa01c100316cc27fb79a0">Check</a><script type="text/javascript" src="http://static.mixi.jp/js/share.js"></script>');
		} else if (shareArray[i] == 'ml') {
			document.write('\n<iframe scrolling="no" frameborder="0" allowTransparency="true" style="overflow:hidden; border:0; width:80px; height:18px;" src="http://plugins.mixi.jp//favorite.pl?href=' + encodeURIComponent(shareURL) + '&service_key=280d215766c7a7a19f1fa841e989bad02d9a6262&show_faces=true&width=80"></iframe>');
		} else if (shareArray[i] == 'fs') {
			document.write('\n<a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php?u=' + encodeURIComponent(shareURL) + '&t=' + encodeURIComponent(shareTitle) + '" onclick="var wo = window.open(this.href); return false;">シェア</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>');
		} else if (shareArray[i] == 'fl') {
			facebooklike(shareURL);
		}
	}
}





// bit.ly account
var bitly_id  = 'avex';
var bitly_key = 'R_5005dd6a3b1cd8a77f396a1610f35b6f';

// artist name, document title, target link
var twartist = '';
var twtitle = '';
var twlink = '';
// method
function tweet(artist, title, link) {
    // get value
    twartist = artist;
    twtitle = title;
    // get link
    if (link != undefined) {
    	twlink = link;
    } else {
    	twlink = location.href;
    }
	// temp pop up window
	var twWindow = window.open('','tweet');
	// create api link
    api = 'http://api.bit.ly/shorten'
        + '?version=2.0.1'
        + '&format=json'
        + '&callback=tweetCallback'
        + '&login=' + bitly_id
        + '&apiKey=' + bitly_key
        + '&longUrl=';
	// create script tag
    var script = document.createElement('script');
    script.setAttribute('type', 'text/javascript');
    script.setAttribute('src',  api + encodeURIComponent(twlink));
    document.body.appendChild(script);
}
// bit.ly callBack
function tweetCallback(json) {
    var d = document;
    var w = window;
    var l = location;
    var e = encodeURIComponent;
    var sel = '';
    if (d.selection) {
        sel = d.selection.createRange().text;
    } else if (w.selection) {
        sel = w.selection.createRange().text;
    } else if (d.getSelection) {
        sel = d.getSelection();
    } else if (w.getSelection) {
        sel = w.getSelection();
    }
    var f = 'http://twitter.com/home/?status='
          + e(sel + twtitle + ' ' + json.results[twlink]['shortUrl'] + ' ' + '#' + twartist);
    if(!w.open(f,'tweet')) {
        l.href = f;
    }
}

// mixi Voice
// artist name, document title, target link
var mixiTitle = '';
var mixiLink = '';

// mixi Voice method
function mixiVoice(title, link) {
    // get value
    mixiTitle = title;
    // get link
    if (link != undefined) {
    	mixiLink = link;
    } else {
    	mixiLink = location.href;
    }
	// temp pop up window
	var mixiWindow = window.open('','mixiVoice');
	// create api link
    api = 'http://api.bit.ly/shorten'
        + '?version=2.0.1'
        + '&format=json'
        + '&callback=mixiCallback'
        + '&login=' + bitly_id
        + '&apiKey=' + bitly_key
        + '&longUrl=';
	// create script tag
    var script = document.createElement('script');
    script.setAttribute('type', 'text/javascript');
    script.setAttribute('src',  api + encodeURIComponent(mixiLink));
    document.body.appendChild(script);
}
// bit.ly callBack
function mixiCallback(json) {
    var d = document;
    var w = window;
    var l = location;
    var e = encodeURIComponent;
    var sel = '';
    if (d.selection) {
        sel = d.selection.createRange().text;
    } else if (w.selection) {
        sel = w.selection.createRange().text;
    } else if (d.getSelection) {
        sel = d.getSelection();
    } else if (w.getSelection) {
        sel = w.getSelection();
    }
    var f = 'http://mixi.jp/simplepost/voice?status='
          + e(sel + mixiTitle + ' ' + json.results[mixiLink]['shortUrl']);
    if(!w.open(f,'mixiVoice')) {
        l.href = f;
    }
}

// write Diary
function mixiDiary(title, url) {
	// URL
	var linkTxt = url;
	if (linkTxt == undefined) {
		linkTxt = location.href;
	}
	// body text
	var bodyTxt = encodeURIComponent(title + '\n' + linkTxt);
	// URL String
	var URLs = 'http://mixi.jp/simplepost/diary?&body=' + bodyTxt;
	// write
	document.write('\n<a href="' + URLs + '" target="_blank"><img src="http://img.mixi.jp/img/basic/mixicheck_entry/bt_diary_1.png" /></a>');
}


// facebook like button
function facebooklike(uri,w,h) {
	var width = !w ? 120 : w;
	var height = !h ? 20 : h;
	var url = 'http://www.facebook.com/plugins/like.php?href=' + encodeURIComponent(uri) + '&amp;layout=button_count&amp;show_faces=false&amp;width=' + width + '&amp;action=like&amp;colorscheme=light&amp;height=' + height;
	document.write('\n<iframe src="' + url + '" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:' + width + 'px; height:' + height + 'px;" allowTransparency="true"></iframe>');
}
