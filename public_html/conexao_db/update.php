<?php
    session_start();
    include_once('conection.php');

    $Id = $_POST["id"];
    $Titulo = $_POST["titulo"];
    $Ano = $_POST["ano"];
    $Autor = $_POST["autor"];
    $Arte = $_POST["arte"];
    $Tipo = $_POST["tipo"];
    $Status = $_POST["status"];
    
    $sql = "UPDATE Manga SET Id='".$Id."', Titulo='".$Titulo."', Ano='".$Ano."', Autor='".$Autor."', Arte='".$Arte."', Tipo='".$Tipo."', Status='".$Status."' WHERE Id='".$Id."';";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['cadastro_ok'] = "Update realizado com sucesso!";
        header("Location: https://joaovictoralvesteste.000webhostapp.com/Painel/painel.php");
        exit;
    } else {
        $_SESSION['cadastro_erro'] = "Ops!, algo deu errado.";
        header("Location: https://joaovictoralvesteste.000webhostapp.com/Painel/painel.php");
        exit;
    }
    
    $conn->close();
?>