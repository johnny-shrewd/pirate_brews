<?php
/////////////////////////////try include /////////////////////////////
$dbhost = 'elephant.ecs.westminster.ac.uk';
$dbuser = 'w1469432';
$dbpass = '5FV3qg7lngXb';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) ;
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("w1469432_0", $conn);

/////////////////////////////try include /////////////////////////////

//Fetching Values from URL
$db_fav=$_POST['db_fav'];
$db_hints=$_POST['db_hints'];  
$db_tokens=$_POST['db_tokens'];
$db_score=$_POST['db_score'];
$db_nickname=$_POST['db_nickname'];

$query = mysql_query("insert into people(favorites, hints, tokens, score ) values ('".$db_fav."', '".$db_hints."', '".$db_tokens."', '".$db_score."') WHERE nickname ='".$db_nickname."'"); 

?>