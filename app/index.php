<html>
	<head>
		<meta charset="utf-8" />
    	<title>E-mail</title>
		<link rel="stylesheet" href="../css/styles.css">

	</head>
<body>
	<div class="principal">
		<div class="container">
		<form class="formulario" action="processo.php" method="post">
			<div class="form-group">
				<label for="para">Para</label><br>
				<input name="para" type="text" class="form-control" id="para" placeholder="joao@dominio.com.br">
			</div><br>

			<div class="form-group">
				<label for="assunto">Assunto</label><br>
				<input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assundo do e-mail">
			</div><br>
			<div class="form-group">
				<label for="mensagem">Mensagem</label><br>
				<textarea name="email" class="form-control" id="mensagem"></textarea>
			</div><br>

			<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
		</form>
		</div>
		<div class="container2">
			<img src="../img/esferas.png" alt="" class="rotate">
		</div>
	</div>
</body>
</html>
