<?php

$db_name = "mslyunkov";

$connect = mysqli_connect("localhost", "mslyunkov", "neto1919", $db_name);

$sql = 'show tables';
$res = mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Управление таблицами и базами данных</title>
</head>
<body>
	<h1>Список таблиц в базе данных: <?php echo $db_name; ?></h1>
	<table>
		<?php while ($data = mysqli_fetch_array($res)) { ?>
		<tr>
			<td><?php echo '<a href="table.php?into=' . $data['0'] . '">'.$data['0'].'</a>'?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>