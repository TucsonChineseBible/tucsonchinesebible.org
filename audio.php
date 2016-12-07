<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>新譯簡明聖經 The Holy Bible: A Dynamic Chinese Translation</title>
  <style type="text/css">
/*margin and padding on body element
  can introduce errors in determining
  element position and are not recommended;
  we turn them off as a foundation for YUI
  CSS treatments. */
body {
	margin:0;
	padding:0;
}
  </style>
  <link rel="stylesheet" type="text/css"
 href="yui/build/fonts/fonts-min.css">
  <link rel="stylesheet" type="text/css"
 href="yui/build/tabview/assets/skins/sam/tabview.css">
  <script type="text/javascript"
 src="yui/build/yahoo-dom-event/yahoo-dom-event.js"></script>
  <script type="text/javascript" src="yui/build/element/element-beta.js"></script>
  <script type="text/javascript" src="yui/build/tabview/tabview.js"></script><!--there is no custom header content for this example-->
</head>
<body class="yui-skin-sam">
<br>
<table align="center">
  <tbody>
	<tr>
	  <td><a href="new_cover.jpg"><img src="new_cover.jpg" height="168"></a></td>
	  <td>
		<h1 style="text-align: center;">新譯簡明聖經<br>
		  <small><font face="verdana" size="smaller"><small>The Holy
				Bible: A Dynamic Chinese Translation</small></font></small></h1>
		<div class="exampleIntro">
		  <p style="text-align: center;"><big><small>The Official
				Website of Tucson Chinese Bible Society</small><br>
			  <br>
			</big></p>
		</div>
	  </td>
	</tr>
  </tbody>
</table>

<!--BEGIN SOURCE CODE FOR EXAMPLE =============================== -->
<div id="demo" class="yui-navset">
<div align="center">
<ul class="yui-nav">

<?php
  // JUST UPDATE THIS ARRAY WHEN ADDING A NEW BOOK
  // array (name, folder, filename, chapters)
  $books = array (
    array("創世記", "Genesis", "gen ", 50),
    array("出埃及記", "Exodus", "Exodus ", 20),
    array("诗篇", "Psalms", "Psalm ", 150),
    array("箴言", "Proverbs", "Proverbs ", 31),
    array("约拿書", "Jonah", "Jonah ", 4),
    array("馬太福音", "Matthew", "Matt", 28),
    array("馬可福音", "Mark", "mrk", 16),
    array("路加福音", "Luke", "Luke ", 24),
    array("約翰福音", "John", "Jhn ", 21),
    array("使徒行傳", "Acts", "Acts ", 28),
    array("羅馬書", "Romans", "Romans ", 16),
    array("哥林多前書", "I cor", "I cor ", 16),
    array("哥林多後書", "2 Corthianians", "2 cor ", 13),
    array("加拉太書", "Galatians", "Gal", 6),
    array("以弗所書", "eph", "Eph ", 6),
    array("腓立比書", "Phil", "phil ", 4),
    array("歌羅西書", "Colossians", "Col ", 4),
    array("帖撒羅尼迦前書", "1 Thess", "1 thess ", 5),
    array("帖撒羅尼迦後書", "2 thess", "2 Thess ", 3),
    array("提摩太前書", "1 Timothy", "1tim ", 6),
    array("提摩太後書", "2 Timothy", "2tim ", 4),
    array("提多書", "Titus", "titus ", 3),
    array("腓利門書", "Philemon", "Philemon ", 1),
    array("希伯來書", "Hebrews", "Hebrews ", 13),
    array("雅各書", "James", "James", 5),
    array("彼得前書", "1 Peter", "1 peter ", 5),
    array("彼得後書", "2 peter", "2 peter ", 3),
    array("約翰一書", "123John", "1 john ", 5),
    array("約翰二書", "123John", "2 john ", 1),
    array("約翰三書", "123John", "3 john ", 1),
    array("猶大書", "Jude", "JUDE ", 1),
    array("啟示錄", "Revelation", "rev ", 22),
  ); 

  echo "<li class=\"selected\"><a href=\"#tab1".(1)."\"><em>".$books[0][0]."</em></a></li>";
  for ($i=1; $i<sizeof($books); $i++) {
 
    echo "<li><a href=\"#tab".($i+1)."\"><em>".$books[$i][0]."</em></a></li>";
 
  }	
  
?>
</ul>
</div>
<div class="yui-content">
<?php

  for ($i=0; $i<sizeof($books); $i++) {
 
    echo "<div id=\"tab".($i+1)."\">";
    echo "<div style=\"text-align: center;\"><big style=\"font-weight: bold;\"><br>經文朗讀</big>";
    echo "<p style=\"text-align: center;\"><big>";

    for ($j=1; $j<$books[$i][3]; $j++) {
      
      if ($books[$i][3] > 9 && $j < 10)
        $chapter = "0".$j;
      else 
        $chapter = $j;      

      echo "<a href=\"http://tucsonchinesebible.org/jmsj/audio/".$books[$i][1]."/".$books[$i][2].$chapter.".mp3\" target=\"_blank\">第".$j.($books[$i][1]=="Psalms"?"篇":"章")."</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;";

    }

 
    if ($books[$i][3] > 9 && $j < 10)
      $chapter = "0".$j;
    else 
      $chapter = $j;
    echo "<a href=\"http://tucsonchinesebible.org/jmsj/audio/".$books[$i][1]."/".$books[$i][2].$chapter.".mp3\" target=\"_blank\">第".$j.($books[$i][1]=="Psalms"?"篇":"章")."</a>";
    echo "</big></p></div></div>";
  }	
  
?>

</div>
<!-- FOOTER -->
<div class="exampleIntro">
<p style="text-align: center;">©2001- 凸桑中文聖經協會 --
致力於翻譯、推廣中文聖經之非營利機構
<br>
Tucson Chinese Bible Society -- A non-profit organization dedicated to
the Chinese translation and distribution of The Holy Bible</p>
</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo');

    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script><!--END SOURCE CODE FOR EXAMPLE =============================== -->
<script src="http://www.google-analytics.com/urchin.js"
 type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-702706-1";
urchinTracker();
</script>
</body>
</html>
