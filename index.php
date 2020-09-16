<!DOCTYPE html>
<html>
	<head>
		<title>test</title>
		<meta charset="utf-8">
	</head>

	<body>
		<form action="" method="POST">
			Логин: <input type="text" name="login" value=""><br>
			Пароль: <input type="text" name="password" value=""><br>
			<input type="submit" value="Авторизоваться"><br>
		</form>
		<?php
		if ($_POST['login'] == 'root' and $_POST['password'] == 'root1'){
			echo "Доступ открыт!";
		} else{
			echo "Доступ закрыт";
		}
		?>
	</body>
</html>