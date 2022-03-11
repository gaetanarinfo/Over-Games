<?php 

// conversion d'un message en html
function BBCode2Html($aTxt){
	// 1- remplace les retour à la ligne par des balises <br />
	$aTxt = nl2br($aTxt);

	// 2- liste des balises BBCode
	$tag = array(
		'/\[b\](.*?)\[\/b\]/is',
		'/\[i\](.*?)\[\/i\]/is',
		'/\[u\](.*?)\[\/u\]/is',
		'/\[s\](.*?)\[\/s\]/is',
		'/\[sup\](.*?)\[\/sup\]/is',
		'/\[sub\](.*?)\[\/sub\]/is',
		'/\[size\=(.*?)\](.*?)\[\/size\]/is',
		'/\[color\=(.*?)\](.*?)\[\/color\]/is',
		'/\[code\](.*?)\[\/code\]/is',
		'/\[quote\](.*?)\[\/quote\]/is',
		'/\[quote\=(.*?)\](.*?)\[\/quote\]/is',
		'/\[left](.*?)\[\/left\]/is',
		'/\[right](.*?)\[\/right\]/is',
		'/\[center](.*?)\[\/center\]/is',
		'/\[justify](.*?)\[\/justify\]/is',
		'/\[list\](.*?)\[\/list\]/is',
		'/\[list=1\](.*?)\[\/list\]/is',
		'/\[\*\](.*?)(\n|\r\n?)/is',
		'/\[img\](.*?)\[\/img\]/is',
		'/\[video\](.*?)\[\/video\]/is',
		'/\[url\](.*?)\[\/url\]/is',
		'/\[url\=(.*?)\](.*?)\[\/url\]/is',
		'/\[email\](.*?)\[\/email\]/is',
		'/\[email\=(.*?)\](.*?)\[\/email\]/is',
		'/\[emo=0\]/',
		'/\[emo=1\]/',
		'/\[emo=2\]/',
		'/\[emo=3\]/',
		'/\[emo=4\]/',
		'/\[emo=5\]/',
		'/\[emo=6\]/',
		'/\[emo=7\]/',
		'/\[emo=8\]/',
		'/\[emo=9\]/',
		'/\[emo=10\]/',
		'/\[emo=11\]/',
		'/\[emo=12\]/',
		'/\[emo=13\]/',
		'/\[emo=14\]/',
		'/\[emo=15\]/',
		'/\[emo=16\]/',
		'/\[emo=17\]/',
		'/\[emo=18\]/',
		'/\[emo=19\]/',
		'/\[emo=20\]/',
		'/\[emo=21\]/',
		'/\[emo=22\]/',
		'/\[emo=23\]/',
		'/\[emo=24\]/',
		'/\[emo=25\]/',
		'/\[emo=26\]/',
		'/\[emo=27\]/',
		'/\[emo=28\]/',
		'/\[emo=29\]/',
		'/\[emo=30\]/'
	);

	// 3- correspondance HTML
	$h = array(
		'<strong>$1</strong>',
		'<em>$1</em>',
		'<u>$1</u>',
		'<span style="text-decoration:line-through;">$1</span>', 
		'<sup>$1</sup>',
		'<sub>$1</sub>',
		'<span style="font-size:$1px;">$2</span>',  
		'<span style="color:$1;">$2</span>',   
		'<code><pre>$1</pre></code>', 
		'<blockquote>$1</blockquote>',
		'<blockquote><cite>$1 : </cite>$2</blockquote>',  
		'<div style="text-align:left;">$1</div>',
		'<div style="text-align:right;">$1</div>',
		'<div style="text-align:center;">$1</div>',
		'<div style="text-align:justify;">$1</div>',
		'<ul>$1</ul>',
		'<ol>$1</ol>',
		'<li>$1</li>',
		'<img src="$1" />',
		'<iframe src="$1" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen /></iframe>',
		'<a href="$1">$1</a>',
		'<a href="$1">$2</a>',
		'<a href="mailto:$1">$1</a>',
		'<a href="mailto:$1">$2</a>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (0).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (1).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (2).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (3).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (4).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (5).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (6).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (7).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (8).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (9).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (10).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (11).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (12).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (13).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (14).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (15).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (16).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (17).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (18).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (19).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (20).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (21).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (22).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (23).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (24).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (25).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (26).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (27).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (28).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (29).png"></img>',
		'<img style="width: 40px;" src="../assets/images/bbcode/Emoji-Psck (30).png"></img>'
	);

	// 4- remplace les balises BBCode par des balises HTMLdans le texte
	$n = 1;
	while($n > 0){
		$aTxt = preg_replace($tag, $h, $aTxt, -1, $n);
	}

	// 5- balise vidéo
	if(function_exists($VidProviderUrl2Player)) $aTxt = preg_replace_callback('/\[video\](.*?)\[\/video\]/is', 'VidProviderUrl2Player', $aTxt);

	// 6- fais le ménage dans les balises restantes
	return preg_replace(array('/\[(.*?)\]/is', '/\[\/(.*?)\]/is'), '', $aTxt);
}

?>