<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Falcon-用户登录</title>
<link rel="stylesheet" type="text/css" href="html/style.css" />
</head>
<body>
<div class="wrap">
	<form action="./login.php" method="POST">
  <div class="loginbox">
    <div class="name">
      <input type="text" name="username" id="username"/>
    </div>
    <div class="pass">
      <input type="password" name="password" id="password"/>
    </div>
    <div class="login">
      <input type="submit" name="submit" value="登陆" id="sub"/>
      <input type="reset" name="reset" value="重置" id="ret"/>
    </div>
  </div>
  </form>
  <div class="loginfo"><?php echo $this->data->message; ?></div>
