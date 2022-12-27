<?php
    session_start();
    include_once('conection.php');
    
    $stmt = $conn->prepare("INSERT INTO Cadastro (Firstname, Lastname, Username, Password, Email) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $username, $password, $email);

    $firstname = $_POST["FirstName"];
    $lastname = $_POST["LastName"];
    $username = $_POST["UserName"];
    $password = $_POST["Password"];
    $email = $_POST["Email"];
    
    $search = "SELECT Username FROM Cadastro WHERE Username='".$username."';";
    $result = $conn->query($search);
    
    if($result->num_rows > 0){
        $_SESSION['cadastro_erro'] = "Erro, usuário não cadastrado!";
        header("Location: https://joaovictoralvesteste.000webhostapp.com/index.php");
        exit;
    }else {
        if ($stmt->execute() === TRUE) {
            $_SESSION['cadastro_ok'] = "Usuário cadastrado com sucesso!";
            header("Location: https://joaovictoralvesteste.000webhostapp.com/index.php");
            exit;
        } else {
            $_SESSION['cadastro_erro'] = "Erro, usuário não cadastrado!";
            header("Location: https://joaovictoralvesteste.000webhostapp.com/index.php");
            exit;
        }
        
    }
    
    $stmt->close();
    $conn->close();
?>
