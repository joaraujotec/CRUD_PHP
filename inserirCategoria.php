<?php 
include_once("conexao.php");

$nmCategoria = $_POST["txtCategoria"];
$categoria = $_POST["idCategoria"];


$sql = "INSERT INTO tbcategoria (idCategoria, nmCategoria)";
$sql .= " VALUES ($categoria, '$nmCategoria')";
//echo $sql;
if ($conn->query($sql) === TRUE){
    ?>
    <script>
        alert ("Registro salvo com sucesso!");
        window.location = "selecionarCategoria.php";
    </script>
     <?php
    }else {
    ?>
    <script>
        alert ("Erro ao inserir o registro!");
        window.history.back();//retorna para página anterior das categorias
    </script>   
    <?php 
    }
    ?>
