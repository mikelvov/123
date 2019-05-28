<html>
<head>
    <title>Страница авторизации</title>
    <style>
        body {
            font-family: Georgia, Helvetica, sans-serif;
            width: 500px;
            margin-left: 400px;
            margin-top: 150px;
        }
        form {
            border: 5px solid #86868a;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 10px 20px;
            margin: 13px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #33ff33;
            color: white;
            padding: 15px 30px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        input[type=submit]:hover {
            opacity: 1.8;
        }

    </style>
</head>
<body>
<form action="next.php" method="post">
    Пользователь
    <input type="text" name="username"><br>
    Пароль
    <input type="password" name="pass"><br>
    <input type="submit" value="Login" name="submit">
</form>
</body>
</html>




