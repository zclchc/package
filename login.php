<?php
session_start();

//获取名字 密码
$name=$_POST['username'];
$psw=$_POST['password'];

$host = 'localhost';
$database = 'mydata';
$port = "8889";
$username = 'root';
$password = 'root';
//连接到数据库
$connection = mysqli_connect($host, $username, $password, $database, $port);
//php sql 语句
$sqlselect = "select * from test";

$result = mysqli_query($connection, $sqlselect);
if (!$result) {
    echo "select fail\n" . "<br/>";
}


while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";

    //打印出$row这一行

    echo "username: <td>{$row['username']}</td> password: <td>{$row['password']}</td>";
    echo "<br/>";

    //检测用户是否存在
    if($name == $row['username'] && $psw = $row['password']){

       // echo 'find user'."<br/>";

        $_SESSION['uid'] = 1;
        header("Location:/we.php");
        break;
    }
    else{
        header("Location:/register.php");

    }
}
