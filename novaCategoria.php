<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    

<form action="inserirCategoria.php" method="POST" form-control>
<div class= "container mb-3 mt-3">
<h2> Cadastro de categorias</h2>
    <label for="idCategoria" class="form-label"> Id da categoria </label>
    <br>
    <input type="text" name="idCategoria" class="form-control" id="idCategoria" required autofocus placeholder="id da categoria">
    <br>

    <label for="txtCategoria" class="form-label"> Nome da categoria </label>
    <br>
    <input type="text" name="txtCategoria" class="form-control" id="txtCategoria" required autofocus placeholder="Nome da categoria">
    <br>

    <input type="submit" class="btn btn-primary" value="Salvar">
    <input type="reset" class="btn btn-danger" value="Cancelar">

</form>
<footer>
  <p>Author: José Araújo Damasceno - Prática CRUD - @ProgramadorLifeStyle</p>
  <p><a href="mailto:joaraujotec@hotmail.com">joaraujotec@hotmail.com</a></p>
</footer>
</div>
</body>
</html>