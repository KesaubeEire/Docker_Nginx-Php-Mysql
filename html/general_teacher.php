<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>教师主页</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="stylesheet" href="css/style.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>签到情况</h1>
  </div>
  <hr/>
</div>

<?php
$conn = @mysqli_connect('10.10.10.1:3306', 'root', '123456', 'signup') or die("数据库连接失败！");
mysqli_select_db($conn, "signup") or die("您要选择的数据库不存在");
$sql = "select * from students where SignUp='1'";
$result = @mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while (@$row = mysqli_fetch_array($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 结果";
}

?>
</body>
</html>