<?php

$comments = file_get_contents("comments.txt");
$error = false;
if(isset($_POST['add_comment'])) {
    $name = htmlspecialchars($_POST['name']);
    $text = htmlspecialchars($_POST['text']);
    if ($name && $text) {
        $text = str_replace("\r\n", "<br>", $text);
        file_put_contents("comments.txt", $comments."$name\"$text\n");
        header("Location: admin.php");
        exit;
    }
    else $error = true;
}

$number = 0;
$comments = explode("\n", $comments);
if(isset($_POST['delete_comment'])) {
    $number = htmlspecialchars($_POST['number']);
    $temp = $comments[$number-1];
    $comments = implode("\n", $comments);
    $comments = str_replace($temp."\n", "", $comments);
    file_put_contents("comments.txt", $comments);
    header("Location: admin.php");
    exit;
}
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
//$result = array_reverse($result);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Администратор</title>
</head>
<body>
<h1>Оставить комментарий</h1>
<?php if ($error) {?><p>Заполните форму!</p><?php } ?>
<form name="add_comment" action="admin.php" method="post">
    <div>Имя: <input type="text" name="name"></div>
    <div>Комментарий: <br><textarea name="text" cols="30" rows="10"></textarea></div>
    <div><input type="submit" name="add_comment" value="Send"></div>
</form>
<h2>Комментарии</h2>
<?php $i=1; foreach ($result as $r) { ?>
    <p><i><?=$i++?></i>) <b><?=$r["name"]?></b>: <?=$r["text"]?></p>
<?php }?>
<h2 style="display: inline;">Удалить комментарий под номером </h2><form name="delete_comment" action="admin.php" method="post"><input type="text" name="number"><input type="submit" name="delete_comment" value="Delete"></form>
<h3><a href="loginPage.php">Выйти и вернуться на главную</a></h3>




</body>
</html>

