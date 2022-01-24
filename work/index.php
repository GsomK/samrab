<?php
	session_start();	
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<style>
	body {
			background: #696969;
	}
	.sigma {	width: 300px;
			outline: 1px solid #000;
			border-radius: 10px;
			font-family: Helvetica;
			background: #br0;
			font-size: 30px;
			margin: 10px;
}
	.but {
			width: 200px;
			font-family: Helvetica;
			margin: 10px;
			outline: 1px solid #000;
			font-size: 25px;
			border-radius: 5px;
	}
	fieldset{
		background: #808080;
		font-size: 60px;
		position: relative;
		text-align: center;
		margin: 100px auto;
		width: 500px;
		outline: 5px solid #808080;
		border-radius: 5px;}
	
	
	
	</style>
	</head>
<body>
	<fieldset>
	<input class = sigma type="text" placeholder = "login" name="login" /></br>
	<input class = sigma type="text" placeholder = "password" name="pass" /></br>
	<button class = but type="submit" onClick='location.href="reg.php"'>Регистрация</button>
	<button class = but type="submit" onClick='location.href="menu.php"'>Вход</button>
	
	</fieldset>
</body>