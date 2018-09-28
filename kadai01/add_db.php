<?php
/**
 * Created by PhpStorm.
 * User: chisei
 * Date: 2018/09/21
 * Time: 午前10:13
 */
    session_start();
if(isset($_POST["submit"])){
    $n_id=$_POST["n_id"];
    $n_pass=$_POST["n_pass"];
//    echo $n_id;
//    echo $n_pass;
    $password_hash=password_hash($n_pass, PASSWORD_DEFAULT);
//    echo $password_hash;

    //INSERT
    $con = mysqli_connect("localhost", "root", "") or die("接続失敗");
    mysqli_set_charset($con, "utf8");
    mysqli_select_db($con, "ph23_kadai01");
    $sql = "INSERT INTO kadai01_users(id,password) VALUES(?,?)";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'ss', $n_id, $password_hash);
    $result = mysqli_stmt_execute($stmt);
    if(mysqli_error($con)){
        //$_SESSION["error"] = mysqli_error($con);
        $_SESSION["error"] = "DB登録でエラーが発生しました";
    }else{
        //正常処理
        $_SESSION["error"] = "正常登録されました";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);

    //
    header("Location: add_form.php");

}else{
    $_SESSION["error"]="不正なリクエストです";
    header("Location: add_form.php");
}



