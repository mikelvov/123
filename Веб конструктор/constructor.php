<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Web-constructor</title>
    <style>
        textarea {
            width: 500px;
        }
    </style>
</head>
<body>
<center>
    <?php
    $borderStyle = $_REQUEST["borderStyle"];
    $borderSize = $_REQUEST["borderSize"];
    $sizeType = $_REQUEST["sizeType"];
    $width = $_REQUEST["width"];
    $height = $_REQUEST["height"];
    $headerSize = $_REQUEST["headerSize"];
    $headerFont = $_REQUEST["headerFont"];
    $textFont = $_REQUEST["textFont"];
    $type = "px";
    $backgroundColor = $_REQUEST["backgroundColor"];

    $text = $_REQUEST["text"];
    $header = $_REQUEST["header"];

    $theStyle = "font-family: $textFont; width: $width$type; border-width: $borderSize$sizeType; border-style: $borderStyle; border-color: black;";

    print <<<STYLE
<body style="background-color: $backgroundColor;">
<$headerSize style="font-family: $headerFont;">$header</$headerSize>
<p style = "$theStyle">$text</p>    
</body>
    
STYLE;
    ?>
</center>
</body>
</html>