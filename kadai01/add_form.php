<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新規登録</title>
</head>
<body>
    <h1>ユーザ登録</h1>
    <form action="./add_db.php" method="post">
        ID : <input type="text" name="n_id" required placeholder="新規ID入力" autofocus>
        <br/>
        パスワード : <input type="password" name="n_pass" required placeholder="新規パスワード入力">
        <br/>
        <input type='submit' value="登録" name="submit">
        <br/>
        <?php
            session_start();
            if(isset($_SESSION["error"])){
                echo $_SESSION["error"]."<br/>";
                session_destroy();
            }
        //else{
//                echo "<h1>OK</h1><br/>";
//            }
            //session_destroy();
        ?>
        <a href="index.php">戻る</a>
        <!--<input type="button" value="戻る" onclick="history.back()">-->
    </form>
</body>
</html>