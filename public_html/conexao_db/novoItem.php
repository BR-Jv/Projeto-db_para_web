<?php
    session_start();
    include_once('conection.php');
    
    $stmt = $conn->prepare("INSERT INTO Manga (Titulo, Ano, Autor, Arte, Tipo, Status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sissss", $titulo, $ano, $autor, $arte, $tipo, $status);
    
    $titulo = $_POST['titulo'];
    $ano = $_POST['ano'];
    $autor = $_POST['autor'];
    $arte = $_POST['arte'];
    $tipo = $_POST['tipo'];
    $status = $_POST['status'];
    
    $search = "SELECT Titulo FROM Manga WHERE Titulo='".$titulo."';";
    $result = $conn->query($search);
    
    if($result->num_rows > 0){
        $_SESSION['cadastro_erro'] = "Esse mangá já está cadastrado!";
        header("Location: https://joaovictoralvesteste.000webhostapp.com/Painel/painel.php");
        exit;
    }else {
        if ($stmt->execute() === TRUE) {
            $_SESSION['cadastro_ok'] = "Mangá cadastrado com sucesso!";
            header("Location: https://joaovictoralvesteste.000webhostapp.com/Painel/painel.php");
            exit;
        } else {
            $_SESSION['cadastro_erro'] = "Erro, algo deu errado!";
            header("Location: https://joaovictoralvesteste.000webhostapp.com/Painel/painel.php");
            exit;
        }
    }
    
    $stmt->close();
    $conn->close();

?>