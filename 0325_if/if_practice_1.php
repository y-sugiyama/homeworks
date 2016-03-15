<?php
// 24時間単位の現在時
$hour = date('G');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>


<body class = "day">
<?php
$hour   = date('G');
$format = '<h1>昼と夜でページの見た目が変わります。</h1>';

if ($hour >= 6 && $hour <= 17) {
	echo $format;

}

?>
</body>

<body class = "night">
<?php

$hour   = date('G');
$format = '<h1>昼と夜でページの見た目が変わります。</h1>';

if ($hour >= 18 && $hour <= 29) {
	echo $format;

}

?>



</body>
</html>