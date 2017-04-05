<!DOCTYPE html>
<html>
<head>
	<title>系统|用户登录</title>
	<link rel="stylesheet" type="text/css" href="global.css">
</head>
<body>
	<form action="loginCheck.php" method="post">
	<!--将表单数据发送到loginCheck登录界面，以请求的方式发送-->
	<fieldset>
    <legend>用户登录</legend>
    <p><label>用户名:</label><input type="text" name="username" /></p>  
    <p><label>密码:</label> <input type="password" name="password" /><p> 
    <p>
    	<input type="submit" name="submit" value="登录" /> 
    	<a href="register.php">注册</a>
    </p>
    </fieldset>

</form>  
</body>
</html>
