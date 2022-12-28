<?php 
include_once("conexao.php");

$nmProduto = $_POST["txtProduto"];
$categoria = $_POST["ddlCategoria"];
$descProduto = $_POST["txtDescricao"];

$sql = "INSERT INTO tbprodutos (nmProduto, idCategoria, descProduto)";
$sql .= " VALUES ('$nmProduto', $categoria, '$descProduto')";
//echo $sql;
if ($conn->query($sql) === TRUE){
    ?>
    <script>
        alert ("Registro salvo com sucesso!");
        window.location = "selecionarProduto.php";
    </script>
     <?php
    }else {
    ?>
    <script>
        alert ("Erro ao inserir o registro!");
        window.history.back();//retorna para página anterior
    </script>   
    <?php 
    }
    ?>
