<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>学生界面</title>
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
    <h1>请开始签到</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <p style='text-align:center;color:#1C86EE;font-size:20px;'>
      </p>
    <form method="post" class="am-form" action="identify.php">
      <label for="uname">学生姓名:</label>
      <input type="text" name="username" id="email" value="">
      <br>
      <label for="uname">签到码:</label>
      <input type="text" name="post_number" id="email" value="">
      <br>
      <div class="am-cf">
        <input type="submit" name="sub" value="签到" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
    <hr>
    <p>© Private System.</p>
  </div>
</div>
</body>
</html>