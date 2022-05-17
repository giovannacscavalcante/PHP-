<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
</head>
<body>
	<h1>Cadastrar Usuário</h1>
	<?php
 	if (isset($_SESSION['msg'])) {
 		echo $_SESSION['msg'];
 		unset($_SESSION['msg']);
 	}
?>
<form action="processa.php" method="post">
	<label> Nome: 	</label>
	<input type="text" name="nome" placeholder="Digite o nome completo: ">
	<label> Email: 	</label>
	<input type="text" name="email" placeholder="Digite o e-mail: ">
	<input type="submit" value = "Cadastrar">
</form>
</body>
</html>

