<!DOCTYPE html>
<html>
<head>
	<title>系统|用户注册</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="global.css">
</head>
<body>
	<form action="regcheck.php" method="post">
	<fieldset>
	<legend>用户注册</legend>
    <p><label>用户名:</label><input type="text" name="username"/> </p> 
    <p><label>密码:</label><input type="password" name="password"/> </p> 
    <p><label>确认密码:</label><input type="password" name="confirm"/></p>  
    <p>
    	<input type="Submit" name="Submit" value="注册"/>
    	<a href="login.php">返回登录</a>
    </p>
    </fieldset>  
</form>  
</body>
</html>
