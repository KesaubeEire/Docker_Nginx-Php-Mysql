<?php

$conn = @mysqli_connect('10.10.10.1:3306', 'root', '123456', 'signup') or die("数据库连接失败！");
mysqli_select_db($conn, "signup") or die("您要选择的数据库不存在");

$number = $_POST['post_number'];
$name = $_POST['username'];
$test = "select * from identify";
$about = "select * from students where name='$name'";

$qust = mysqli_query($conn, $test);
$thename = mysqli_query($conn, $about);

if ($qust) {

    $arr = mysqli_fetch_array($qust);
    $arr2 = mysqli_fetch_array($thename);
    if ($number != $arr['number'] or $name != $arr2['name']) {
        echo "姓名/验证码有误，<a href=\"welcome_student.php\">请重新输入！</a>";
    } else {

        $set = "update students set SignUp='1' where name='$name'";

        mysqli_query($conn, $set);

        header("Location:http://localhost/general_student.php");
    }
}

return null;

?>
<html>
<head>
<title>签到</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>

<body>
</body>

</html>