<?php
include_once("conexao.php");

$idProduto = $_POST['txtId'];
$produto = $_POST["txtProduto"];
$descricao = $_POST["txtDescricao"];
$categoria= $_POST["ddlCategoria"];

$sql = "UPDATE tbProdutos SET nmproduto = '$produto', descProduto = '$descricao',
idCategoria = $categoria WHERE idProduto = $idProduto";
//echo $sql;

if ($conn->query($sql) === TRUE){
    ?>
    <script>
        alert ("Registro atualizado com sucesso!");
        window.location = "selecionarProduto.php";
    </script>
<?php
}else {
?>
    <script>
        alert("Erro ao atualizar o registro");
        window.history.back();
    </scritp>
<?php
}
?>