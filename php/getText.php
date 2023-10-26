<?php
    session_start();
    function goto_url($url, $seconds=0) { die("<meta http-equiv='REFRESH' content='$seconds;url=$url'>"); }
//header('constant-Type:text/html; charset=utf-8');
    header("Content-Type: text/html; charset=UTF-8");
 
 
//  $_GET는 정해진 방식 그리고 []인 이유는 index에 넘겨준 값이 두개 이상으므로
    $id = $_POST['ID'];
    $password = $_POST['Password'];

    $db_host="localhost";
    $db_user="root";
    $db_password="1234";
    $db_name="prepare";
    $con=mysqli_connect($db_host,$db_user,$db_password,$db_name);

    if(mysqli_connect_error($con))
    {
        echo "MySQL 접속 실패", "<br>";
        echo "오류 원인 : ", mysqli_connect_error();
        exit();
    }

    $sql="SELECT * FROM user";
    $result=mysqli_query($con,$sql);
    $loginConfirm="0";
    while($query_data=mysqli_fetch_row($result))
    {

        if($query_data[0]==$id && $query_data[1]==$password)
        {
            $loginConfirm="1";
            mysqli_close($con);

            
            $_SESSION["ssen"] = $id;
            goto_url("mainInterface.php");
        }
    }

    echo '<script>alert("로그인 실패");</script>';
    mysqli_close($con);

    goto_url("../Chungman.html");


    //echo <meta http-equiv='refresh' content='0;url=project.html'>;
?>