<?php
$con = mysqli_connect("localhost","root","","panel");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<title>Panel</title>
<meta charset="utf-8">

		<style>
.main {
	width:100%;
	height:100%;
}
#img_opt{
	flaot:left;
	width:400px;
	height:400px;
}
#wpis_opt{
	float:left;
	width:400px;
	height:400px;
	
}
		</style>

</head>
<body>
<div class="main">

		<div id="img_opt">
		<h1>ZDJECIA</h1>
<input type="text" name="img_title">

		
		</div>
		<div id="wpis_opt">
<h1>WPISY</h1>
<input type="text" name="wpis_title">
		
		</div>
	</div>

</body>
</html>
