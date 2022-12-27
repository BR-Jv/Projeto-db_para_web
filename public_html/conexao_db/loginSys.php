<?php
    session_start();
    include_once('conection.php');
    
    $username = $_POST["UserName"];
    $password = $_POST["Password"];

    $search = "SELECT Username, Password, Firstname FROM Cadastro WHERE Username='".$username."' AND Password='".$password."';";
    $result = $conn->query($search);
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $_SESSION['name'] = $row['Firstname'];
        header("Location: https://joaovictoralvesteste.000webhostapp.com/Painel/painel.php");
        exit;
    }else{
        $_SESSION['cadastro_erro'] = "Username ou senha incorretos!";
        header('Location: https://joaovictoralvesteste.000webhostapp.com');
        exit;
    }
    
    $conn->close();
?>