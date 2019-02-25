
<?php

session_start();

if($_SESSION['uid'] > 0){
    //select name from user where uid=xxx
    echo "登录成功"."<br/>";
   //sleep(2);
   // echo $_SESSION['uid']."<br/>";
    //header("Location:/login.php");

}else{
    $value = 0;
   // echo $_SESSION['uid']."<br/>";
    echo "欢迎登录";
    echo '<!DOCTYPE html>
        <html>
        <head>
            <meta charser= \'Unicode\'/>
            <title>ENTER</title>
        
        
        </head>
        <body>
        <form method="post" action="login.php">
            <table>
                <tr>
                     <td>    Enter user   	<input type=\'text2\' name="username" /></td>
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
        </html>';
}
exit;
