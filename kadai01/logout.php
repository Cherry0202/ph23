<?php
/**
 * Created by PhpStorm.
 * User: chisei
 * Date: 2018/09/21
 * Time: 午前10:11
 */
    session_start();
    session_destroy();
    session_unset();
//    echo<<<EOM
//    <h1>セッション破棄</h1>
//    <a href="index.php">ログインへ</a>
//EOM;
    header("Location: index.php");
