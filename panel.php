<!--baza danych o nazwie panel_test bez hasla -->
// przyda sie http://www.kess.snug.pl/?sid=10&pid=42
// tez sie przyda https://www.w3schools.com/php/php_mysql_insert.asp
<?php
$con = mysqli_connect("localhost","root","","panel");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else {
  echo "connected";
  }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<title>Panel</title>
<meta charset="utf-8">
<style>
#img_options {
	float:left;
	}
#x {
	width:50px;
	height:50px;
	float:left;
	}
</style>
</head>
<body>
<div id="menu">
<br />
<br />
<br />
<br />
<br />
<div id="img_options">
ZDJECIA
<br />
<br />
<button type="button" name="add_img" onclick="add_img()">WPROWADZ </button> <button type="button" name="eddit_img"onclick="eddit_img()">EDYTUJ</button><button type="button" name="del_img" onclick="del_img()">USUŃ</button>
</div>
<div id="x"></div>
<div id="wpis_options">
WPISY
<br />
<br />
<button type="button" name="add_wpis" onclick="add_wpis()">WPROWADZ </button> <button type="button" name="eddit_wpis" onclick="eddit_wpis()">EDYTUJ</button><button type="button" name="del_wpis" onclick="del_wpis()">USUŃ</button>
</div>
</div>
<br />
<br />
<br />
<br />
<div id="include">
<?php

?>
	</div>
</body>
</html>
