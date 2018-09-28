<?php
/**
 * Created by PhpStorm.
 * User: chisei
 * Date: 2018/09/21
 * Time: 午前10:11
 */
    session_start();

if(isset($_POST["submit"])){
        $pass=$_POST["pass"];
        echo $pass;
        $id=$_POST["id"];
        //echo $id;
        $con = mysqli_connect("localhost", "root", "") or die("接続失敗");
        mysqli_set_charset($con, "utf8");
        mysqli_select_db($con, "ph23_kadai01");
        $sql = "SELECT password FROM kadai01_users WHERE id = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt,'s',$id);
        mysqli_stmt_execute($stmt);
        if(mysqli_error($con)){
            $_SESSION["error"]= mysqli_error($con);
        }
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_array($result);
        mysqli_stmt_close($stmt);
        echo "<br/>".$row["password"]."<br/>";
        $password_hash=$row["password"];
        mysqli_close($con);
        // password_verify("$n_pass","$password_hash";
        if (password_verify($pass, $password_hash)) {
            //echo 'Password is valid';
            //url直アクセス
            $_SESSION["id"]=$id;
            header("Location: member.php");
        } else {
            //echo 'Invalid password';
            $_SESSION["error"]= "IDまたはPasswordが間違っています";
            header("Location: index.php");
        }
    }else{
        $_SESSION["error"]="ログインしてください";
        header("Location: index.php");
    }
