<?php 
include_once("conexao.php");

$idCategoria = $_POST["idCategoria"];
$nmCategoria = $_POST["nmCategoria"];

$sql = "UPDATE tbcategoria SET idCategoria = $idCategoria, nmCategoria = '$nmCategoria',
    idCategoria = $idCategoria WHERE  idCategoria = $idCategoria";

if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert ("Categoria atualizada com sucesso!");
    window.location = "selecionarCategoria.php";
    </script>
<?php
} else {
?>
    <script>
        alert ("Erro ao atualizar categoria!");
        window.history.back();
    </script>
<?php
}
?>