<?php
    $nome = $_POST['txtNome'];
    $classe = $_POST['txtClasse'];
    
    
    include "clsConexaoPersonagem.php";
    
    if( isset($_REQUEST['inserir'])){
        $query = "INSERT INTO personagens (nome, classe) VALUES ('$nome', '$classe')";
        Conexao::executar($query);
        header("Location: addPersonagem.php");
    }






?>