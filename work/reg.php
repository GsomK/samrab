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
	.sigma {	width: 500px;
			outline: 1px solid #000;
			border-radius: 10px;
			font-family: Helvetica;
			background: #br0;
			font-size: 30px;
			margin: 10px;
}
	fieldset{
			background: #808080;
			font-size: 60px;
			position: relative;
			text-align: center;
			margin: 100px auto;
			width: 600px;
			outline: 5px solid #808080;
			border-radius: 5px;		
	}
	.sp{
			font-size: 30px;
			outline: 1px solid #000000;
			width: 400px;
	}
	</style>
	</head>
	<?php
	$field = $_POST['typ'];
	
	if ($field == "ФИО")
	{
		$type = "ФИО";
	}
	else
	{
		$type = "Наименование организации";
	}
	?>
	<body>
	<fieldset>
	<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
		<select name= "typ" class = sp>
		   <option value="ФИО">Физическое лицо</option>
		   <option value="Наименование организации">Юридическое лицо</option>
		</select>
		</form>
		<input class = sigma type="text" placeholder = "<?= $field ?>" name="name" /></br>
		<input class = sigma type="text" placeholder = "логин" name="login" /></br>
		<input class = sigma type="text" placeholder = "пароль" name="pass" /></br>
		<input class = sigma type="text" placeholder = "повторите пароль" name="passwd" /></br>
		</fieldset>
	</body>