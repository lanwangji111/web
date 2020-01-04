<?php

//<br /><b>Parse error</b>:  syntax error, unexpected '-', expecting T_VARIABLE or '$' in <b>D:\PHP\htdocs\day1\login.php</b> on line <b>12</b><br />
//显示这种错误是因为校验处$-POST['username'];‘-’应该是英文输入法下的下划线

//接收用户提交的用户名密码
if(empty($_POST['username'])||empty($_POST['password'])){
//    echo '请提交用户名和密码'；
    exit('请提交用户名和密码');
}

//校验
$username=$_POST['username'];
$password=$_POST['password'];
if($username === 'admin' && $password=== '123')
{
    exit('恭喜你');
}

exit('用户名或者密码错误');
//响应
