<!DOCTYPE html>
<html>
<head>
    <meta charser= 'Unicode'/>
    <title>REGISTER</title>

</head>
<body>
<form method="post" action="register.php">
    <table>
        <tr>
            <td>    register  </td>
        <tr>

        <tr>
            <td>    Enter user   	<input type='text' name="username" /></td>
        </tr>

        <tr>
            <td>    Enter password   	<input type="password" name="password"/> </td>
        </tr>


        <tr>
            <td><input type="submit" value="submit" /> </td>

        </tr>
    </table>
</form>

</body>
</html>

<?php
/*
//error_reporting(E_ALL);
//session_stare();
//ecggg
*/

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
//mysql_query("set names 'utf8'");//编码转化

//诊断连接错误
if (!$connection) {
    var_dump(mysqli_connect_errno());
    die("could not connect to the database.\n" . mysqli_error($connection));
}

$mydatabase = mysqli_select_db($connection, $database);//选择数据库

if ($mydatabase) {
    echo "select fail";
}

//PHP sql 语句
$sqlinsert = "insert into test(username,password) values('{$name}','{$psw}')";
//$sqlinsert="insert into test('{$name}','{$psw}')";

//对数据库进行一次  执行
$inserbool = mysqli_query($connection, $sqlinsert);
if (!$inserbool) {
    echo "insert fail\n" . "<br/>";
}else{
    header("Location:/we.php");

}

?>