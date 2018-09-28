<?php
/**
 * Created by PhpStorm.
 * User: chisei
 * Date: 2018/09/21
 * Time: 午前10:11
 */
    session_start();
    if(isset($_SESSION["id"])){
        echo<<<EOM
    <h1>メンバーページ</h1>
    <a href="index.php">戻る</a>
    <br/>
   
    <a href="logout.php">ログアウト</a> 
EOM;

    }else{
        $_SESSION["error"]="ログインしてください";
        header('location: index.php');
    }
