<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Restaurar Base de Dados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Restaurar Base de Dados</h1>
	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
	<form method="POST" action="processa.php" enctype="multipart/form-data">
		<label>Servidor: </label>
		<input type="text" name="servidor" placeholder="Nome do servidor"><br><br>

		<label>Usuário: </label>
		<input type="text" name="usuario" placeholder="Usuário da base de dados"><br><br>

		<label>Senha: </label>
		<input type="password" name="senha" placeholder="Senha da base de dados"><br><br>

		<label>Base de dados: </label>
		<input type="text" name="dbname" placeholder="Nome da base de dados"><br><br>

		<label>Backup: </label>
		<input type="file" name="arquivo"><br><br>

		<input type="submit" value="Importar">
	</form>	
</body>
</html>