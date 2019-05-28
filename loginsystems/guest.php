<?php
$comments = file_get_contents("comments.txt");
$comments = explode("\n", $comments);
$result = array();
$i = 0;
foreach ($comments as $comment) {
if ($comment != "") {
    $temp = explode("\"", $comment);
    $result[$i]["name"] = $temp[0];
    $result[$i]["text"] = $temp[1];
    $i++;
}
}
$result = array_reverse($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Гость</title>
</head>
<body>
<h2>Комментарии</h2>
<?php foreach ($result as $r) { ?>
    <p><b><?=$r["name"]?></b>: <?=$r["text"]?></p>
<?php }?>
<h3><a href="loginPage.php">Выйти и вернуться на главную</a></h3>
</body>
</html>

