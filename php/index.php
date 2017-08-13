<?php

$offset=0;

 if(isset($_POST['text'])&& isset($_POST['replace'])&& isset($_POST['search']))
{
	$text=$_POST['text'];
	$search=$_POST['search'];
	$replace=$_POST['replace'];
    $search_length=strlen($search);

  if(!empty($text)&&!empty($search)&&!empty($replace))

  	 {
  	 	while($strpos = strpos($text,$search,$offset))
            {

  	 	       echo $offset = $strpos + $search_length;
         
            }
  	 }

  	 else
  	 {
  	 	 echo '<script >alert("Fill all input")</script>';
  	 }

}


?>

<form action="index.php" method="POST">
    <textarea name="text" rows="6" cols="30"></textarea><br><br>
    SEARCH:<br>
    <input type="text" name="search"><br><br>
    REPLACE:<br>
    <input type="text" name="replace"><br><br>
    <input type="submit" value="FIND AND REPLACE" >

</form>

