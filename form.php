<?php


ini_set('display_errors', 1);


require_once __DIR__ . "/Validator/Validator.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $att = Validator::validator([
        "name" => "required",
        "email" => "required|email",
        "password" => "required"
    ]);

    echo $att;

   
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validator</title>
    <style>
        form {
            width: 400px
        }

        div {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        div+div {
            margin-top: 10px;
        }

        div input {
            height: 35px;
        }
    </style>
</head>

<body>

    <form action="./form.php" method="POST">
        <div>
            <label>İsim</label>
            <input type="text" name="name">
            <span style="color:red">
                <?= isset(Validator::$error["name"]) ? Validator::$error["name"] : null ?>
            </span>
        </div>
        <div>
            <label>E-posta</label>
            <input type="text" name="email">
            <span style="color:red">
                <?= isset(Validator::$error["email"]) ? Validator::$error["email"] : null ?>
            </span>
        </div>
        <div>
            <label>Şifre</label>
            <input type="password" name="password">
            <span style="color:red">
                <?= isset(Validator::$error["password"]) ? Validator::$error["password"] : null ?>
            </span>
        </div>
        <br>
        <button>Gönder</button>
    </form>

</body>

</html>