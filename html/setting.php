<?php

// $conn=@mysqli_connect('127.0.0.1','root','root','signup') or die("数据库连接失败！");
$conn = @mysqli_connect('10.10.10.1:3306', 'root', '123456', 'signup') or die("数据库连接失败！");

mysqli_select_db($conn, "signup") or die("您要选择的数据库不存在");
$name = $_POST['identify_number'];
$sql = "update identify SET number='$name'";
mysqli_query($conn, $sql);

header("Location:http://127.0.0.1/general_teacher.php");

return null;
?>
<html>
<head>
<title>验证码</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>

<body>
</body>

</html>