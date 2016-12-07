<?php
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != ".." && $file != "index.php")
	  {
          	$thelist .= '<a href="'.$file.'">'.$file.'</a><br>';
          }
       }
  closedir($handle);
  }
?>
<h4>List of files:</h4>
<?=$thelist?>

 