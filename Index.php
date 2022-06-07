<!DOCTYPE html>
<html>
<head>
	<title>Upload de imagens</title>
</head>
<body>
	<h1>Cadastrar imagem</h1>
	<form action="inserir.php" method="POST" enctype="multipart/form-data">
		<div>
			<label>Título</label>
			<input type="text" name="title" required>
		</div>
		<div>
			<label>Descrição</label>
			<textarea name="description">
				
			</textarea>
		</div>
		<div>
			<label>Imagem</label>
			<input type="file" name="image">
		</div>
		<div>
			<input type="submit" value="Cadastrar">
		</div>
	</form>
</body>
</html>