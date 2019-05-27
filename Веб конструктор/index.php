<?php
error_reporting(-1);
ini_set('displays_errors',1);
header('Content-type: text/html');
//include('html\header.html');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 TRANSITIONAL//EN">
<html>
<head>
<link rel="stylesheet" href="css/styles.css">
<meta charset="ut8-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Web-constructor</title>
</head>


<body>
<form method="post" action="constructor.php">
    <div id="text">
    <textarea name="header" rows="1" cols="100">Title</textarea><br>
    <textarea name="text" rows="15" cols="100">
      Enter text here.  
    </textarea>
    </div>
    <table border="2">
        <tr>
            <td colspan="2">WEB-designer</td>
        </tr>
        <tr>
            <td>Object</td>
            <td>Property</td>
        </tr>
        <tr>
            <td>The size of the header</td>
            <td>
                <select name="headerSize">
                    <option value="h1">h1</option>
                    <option value="h2">h2</option>
                    <option value="h3">h3</option>
                    <option value="h4">h4</option>
                    <option value="h5">h5</option>
                    <option value="h6">h6</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>The title font</td>
            <td>
                <select name="headerFont">
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Tahoma">Tahoma</option>
                    <option value="Arial">Arial</option>
                    <option value="Georgia">Georgia</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Text font</td>
            <td>
                <select name="textFont">
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Tahoma">Tahoma</option>
                    <option value="Arial">Arial</option>
                    <option value="Georgia">Georgia</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Frame style</td>
            <td>
                <select name="borderStyle">
                    <option value="none">without a frame</option>
                    <option value="ridge">ribbed</option>
                    <option value="groove">with the notch</option>
                    <option value="double">double</option>
                    <option value="inset">concave</option>
                    <option value="outset">convex</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Frame size</td>
            <td>
                <select name="borderSize">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Size type</td>
            <td>
                <select name="sizeType">
                    <option value="px">pixels</option>
                    <option value="pt">points</option>
                    <option value="cm">centimeters</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Frame width (in px)</td>
            <td>
                <select name="width">
                    <option value="500">500</option>
                    <option value="600">600</option>
                    <option value="700">700</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Frame height (in px)</td>
            <td>
                <select name="height">
                    <option value="500">500</option>
                    <option value="600">600</option>
                    <option value="700">700</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Background color</td>
            <td>
                <select name="backgroundColor">
                    <option value="white">white</option>
                    <option value="azure">azuric</option>
                    <option value="blanchedalmond">almond</option>
                </select>
            </td>
        </tr>

    </table>
    <input type="submit"
    value="Show">
</form>
</body>
</html>