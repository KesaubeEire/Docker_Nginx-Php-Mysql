<?php

function echoKesa($fname)
{
    // echo "$fname<br>";
}

$conn = @mysqli_connect('10.10.10.1:3306', 'root', '123456', 'signup') or die("数据库连接失败！");
mysqli_select_db($conn, "signup") or die("您要选择的数据库不存在");

$pro = $_POST['profession'];
echoKesa("所选类别:\t$pro");

if ($pro == "student") {

    $name = $_POST['username'];
    $pwd = $_POST['password'];
    echoKesa("密码:\t$name");
    echoKesa("用户名:\t$pwd");

    $sql = "select * from students where name='$name'";
    $query = mysqli_query($conn, $sql);

    $test = "select * from students where name='$name' and number='$pwd' ";
    $quest = mysqli_query($conn, $test);

    @$arr = mysqli_fetch_array($query);
 
    if ($query) {
        if ($quest) {
            if ($pwd == $arr['number']) {
                echoKesa("登陆成功~");
                header("Location:http://localhost/welcome_student.php");
            } else {
                echoKesa("密码错误");
                header("Location:http://localhost/index.php");
            }
        }
    } else {
        echoKesa("并不存在此用户");
    }
} else if ($pro == "teacher") {

    $name = $_POST['username'];
    $pwd = $_POST['password'];
    echoKesa("密码:\t$name");
    echoKesa("用户名:\t$pwd");

    $sql = "select * from teachers where name='$name'";
    $query = mysqli_query($conn, $sql);

    $test = "select * from teachers where name='$name' and number='$pwd' ";
    $quest = mysqli_query($conn, $test);
    @$arr = mysqli_fetch_array($query);

    if ($quest) {
        if ($query) {
            if (mysqli_num_rows($query) > 0) {
                if ($pwd != $arr['number']) {
                    echoKesa("您的用户名或密码输入有误，<a href=\"index.php\">请重新登录！</a>");
                } else {
                    echoKesa("登陆成功~");
                    header("Location:http://localhost/welcome_teacher.php");
                }
            }
        }
    }
}

return null;
?>
<html>
<head>
    <title>登录验证</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>

<body>
</body>

</html>
