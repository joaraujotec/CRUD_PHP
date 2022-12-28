<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class= "container mb-3 mt-3">
    <h2> Editar categoria</h2>
    <?php 
    $idCategoria = $_GET["idCategoria"];
   
    $sql = "SELECT * FROM tbcategoria WHERE idCategoria = $idCategoria";
    $executa = $conn->query($sql);
    $categoria = $executa->fetch_assoc();

    ?>

<form action="updateCategoria.php" method="POST">
<label for="idCategoria" class="form-label"> Id da categoria </label>
<br>
<input type="text" name="idCategoria" id="idCategoria" class="form-control" value="<?php echo $categoria["idCategoria"] ?>" readonly >
<br>

<label for="nmCategoria" class="form-label"> Nome da categoria </label>
<br>
<input type="text" name="nmCategoria" id="nmCategoria" class="form-control" value="<?php echo $categoria["nmCategoria"] ?>">
<br>
<br>
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