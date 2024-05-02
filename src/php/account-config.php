<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Configurações da Conta</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Configuração da conta do aluno">
		<link rel="stylesheet" type="text/css" href="../css/general.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">

	<style>

		.delete-acc { color: red; }


	</style>

	</head>

	<body>

		<header class="header">

			<h1>Configurações de <?php echo $_SESSION["sname"]; ?></h1>

		</header>

		<main class="main">

			<form id="del-acc-form" name="del-acc-form" action="del-acc-server.php" method="POST">

				<div class="form-part">

				<label for="del-acc-btn" class="del-acc">Deletar <?php echo $_SESSION["sname"] ?>:</label>
					<button type="submit" id="del-acc-btn" name="del-acc-btn">Deletar</button>

				</div>

			</form>

		</main>

		<footer class="footer">

			<p>Handyman group INC. &copy;2024</p>

		</footer>

	</body>

</html>