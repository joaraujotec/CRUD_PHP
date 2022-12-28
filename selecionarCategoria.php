<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de categorias cadastradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script>
        function confirmarExclusao(id, cate){
            if (window.confirm("Deseja realmente excluir a categoria? \n" +id + " - " + cate + "\n\n\n???")){
                window.location = "excluirCategoria.php?idCategoria="+id;
            }
        }
        </script>
</head>
<body>
    <div class= "container mb-3 mt-3">
    <h2 class="text-secondary"> Lista de categorias cadastrados</h2>
    <a href="novaCategoria.php" style="text-decoration: none;"  class="btn btn-success">Adicionar categoria</a>
    <br>
    <br>
    <?php
// incorporando o arquivo de conexão

include_once("conexao.php");

// definindo a string com o comando sql

$sql = "select * from tbcategoria order by nmCategoria";
// executando o comando sql

$dadosCategorias = $conn->query($sql);

// verificando se foi retronado algum registro

if ($dadosCategorias->num_rows > 0){
?>

<table class="table table-primary table-hover">
    <tr>
    <th> Id </th> 
    <th> Nome da Categoria </th>
    <th> Editar </th>
    <th> Excluir</th>

    </tr>
<?php
    
    while ($exibirCategoria = $dadosCategorias->fetch_assoc()){
    ?>
        <tr> 
            <td><?php echo $exibirCategoria["idCategoria"]?> </td>
            <td><?php echo $exibirCategoria["nmCategoria"]?>  </td>
            <?php 
                $sqlCategoria = "select * from tbCategoria where idCategoria = " . $exibirCategoria["idCategoria"];
                $dadosCategoria = $conn->query($sqlCategoria);
                $exibirCategoria = $dadosCategoria -> fetch_assoc();
            ?>
            
          
            <td> <a href="editarCategoria.php?idCategoria=<?php echo $exibirCategoria["idCategoria"]?>"><i class="fa fa-edit"></i></a> </td>
            <td> <a href="#" onclick="confirmarExclusao (<?php echo $exibirCategoria['idCategoria']?>, '<?php echo $exibirCategoria['nmCategoria']?>')"><i class="fa fa-trash"></i></a> </td>
        </tr>
    <?php
   }
?>
</table>

<?php
} else{
    echo "Nenhuma categoria encontrada!";
}
?>
<footer>
  <p>Author: José Araújo Damasceno - Prática CRUD - @ProgramadorLifeStyle</p>
  <p><a href="mailto:joaraujotec@hotmail.com">joaraujotec@hotmail.com</a></p>
</footer>
</div>

</body>
</html>