<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
//include('html/header.html');
?>

<?php
/* подключение к базе данных */
require_once 'connection.php'; /* подключаем скрипт */
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); /* подключаемся к серверу */

/* проверка соединения */
if ($link->connect_errno) 
{
	printf("Соединение не удалось: %s\n", $mysqli->connect_error);
	exit();
}
?>

<h1 class="text-center">Задание № 1: </h1>

<div id="form-block">

<form class="form-horizontal" method="post">
	<div id="agent-select" class="row">

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<label class="control-label">Имя: </label>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<select class="form-control" name="name">

				<?php
				/* выполняем запрос */
				$query ="SELECT * FROM `first_table`";

				if ($result = $link->query($query)) 
					while ($row = $result->fetch_assoc())
        				echo '<option>'.$row["name"].'</option>';
				?>
      		</select>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<input name="btn" type="submit" class="btn btn-primary" value="отправить запрос">
		</div>

	</div>
</form>
</div>

<?php
if(isset($_POST['btn'])){
	$name = $_POST['name'];
	echo '<h2 class="text-center"> Информация об агенте '.$name.': </h2>';

	$query ="SELECT * FROM `first_table` WHERE name='$name'";

	if ($result = $link->query($query)) 
		$row = $result->fetch_assoc();

	echo '<h4 class="text-center">';
	foreach ($row as $key => $value) 
    	echo "$key: $value, ";
    echo '</h4>';
        				

}
?>

<?php mysqli_close($link); ?>
</body>
</html>