<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar protudos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class= "container mb-3 mt-3">
    <h2> Cadastro de produtos</h2>

<form action="inserirProduto.php" method="POST">
<label for="txtProduto" class="form-label"> Nome do Produto </label>
<br>
<input type="text" name="txtProduto" id="txtProduto" required autofocus placeholder="Nome do produto">
<br>
<br>

<label for="ddlCategoria" class="form-label"> Categoria do Produto: </label>
<br>
<select name="ddlCategoria" id="ddlCategoria">
    <option value="0"> -- Selecione uma categoria --</option>
    <?php 
      $sql = "SELECT * FROM tbCategoria ORDER BY nmCategoria asc";
      $registros = $conn->query($sql);
      while ($exibir = $registros->fetch_assoc()){
      ?>
      <option value="<?php echo $exibir["idCategoria"]?>"> <?php echo $exibir["nmCategoria"]?> 
      <?php 
      }
      ?>
</select>
<br>
<br>
<label for="txtDescricao" class="form-label"> Descrição do Produto</label>
<br>
<textarea name="txtDescricao" id="txtDescricao" cols="30" rows="10" placeholder="Descrição do produto"></textarea>
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