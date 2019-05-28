<?php
            $user = $_POST['username'];
            $pass = $_POST['pass'];
            if(($user == "admin")&&($pass=="admin"))
                header('Location: admin.php');
            elseif(($user == "user")&&($pass=="password"))
                header('Location: user.php');
            elseif(($user == "guest")&&($pass=="0000"))
                header('Location: guest.php');
            else
                echo "Invalid name/password! Try again.";
?>