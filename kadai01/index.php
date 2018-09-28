<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action = "login.php" method="post">
        ID : <input type="text" name="id" placeholder="IDを入力" autofocus required>
        <br/>
        Password : <input type="password" name="pass" placeholder="Passwordを入力">
        <br/>
        <input type="submit" value="ログイン" name="submit">
        <br/>
        <?php
        session_start();
        if(!empty($_SESSION["error"])) {
            echo $_SESSION["error"];
            echo '<br/>';
            $_SESSION = array();
//            // 最終的に、セッションを破壊する
            session_destroy();
        }
     ?>

        <a href="add_form.php">新規ユーザ登録</a>
    </form>
</body>
</html>