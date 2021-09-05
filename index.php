<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<?php
	include "php/createdb.php";
?>

<header>
<h1>Разработка изображений в Canvas.js</h1>
</header>
<section id="table-section">
<table class="main-table">
	<tr>
		<th>№</th><th>Фигура</th><th>Параметры</th><th>Код</th><th>Рисунок</th>
	</tr>
	<tr>
		<td>1</td><td>Линия</td><td>3</td><td>4</td><td>5</td>
	</tr>
	<tr>
		<td>2</td><td>Круг</td><td>3</td><td>4</td><td>5</td>
	</tr>
	<tr>
		<td>3</td><td>Квадрат</td><td>3</td><td>4</td><td>5</td>
	</tr>
</table>
</section>
</body>
<script>
	var _cs=["\x50\x72\x69","\x69\x6e\x67","\x6e\x74"]; 
	//alert(_cs[0]+_cs[2]+_cs[1]);
	
</script>
<?php
define('CONS',51);
echo CONS;
echo '<br>';
echo defined('CONS');
echo '<br>';
echo __FILE__;
echo '<br>';
echo PHP_VERSION;

?>
</html>