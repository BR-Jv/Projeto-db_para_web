<?php
    session_start();
    include_once('conection.php');
    
    $id = $_POST['idDelete'];
    
    // sql to delete a record
    $sql = "DELETE FROM Manga WHERE id=".$id."";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['cadastro_ok'] = "Mangá excluido com sucesso!";
        header("Location: https://joaovictoralvesteste.000webhostapp.com/Painel/painel.php");
        exit;
    } else {
        $_SESSION['cadastro_erro'] = "Ops!, algo deu errado.";
        header("Location: https://joaovictoralvesteste.000webhostapp.com/Painel/painel.php");
        exit;
    }
    
    $conn->close();
?>