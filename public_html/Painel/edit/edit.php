<?php
    session_start();
    if( !isset($_SESSION['name']) ){
        $_SESSION['cadastro_erro'] = "Erro, usuário não logado!";
        header('Location: https://joaovictoralvesteste.000webhostapp.com/index.php');
        exit;
    }
    
    $dbservername = "localhost";
    $dbusername = "id18769768_adm";
    $dbpassword = "Mortadela_123";
    $dbname = "id18769768_db_teste";
    
    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $idEdit = $_GET['id'];
    $sql = "SELECT * FROM Manga WHERE Id='".$idEdit."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="new.css">
    <title>Editando Conteúdo</title>
</head>
<body>
    <div class="h-full d-flex align-items-center">
        <div class="container border">
            <form action="/conexao_db/update.php" method="POST" class="row p-3">
                <div class="mb-3 p-3">
                    <h3 class="text-center">Editando mangá</h3>
                </div>
                <input type="hidden" name="id" value="<?php echo $row['Id'] ?>" >
                <div class="mb-4">
                    <input type="text" class="form-control" name="titulo" value="<?php echo $row['Titulo']?>" required>
                </div>
                <div class="mb-4">
                    <input type="number" class="form-control" name="ano" value="<?php echo $row['Ano']?>" required>    
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" name="autor" value="<?php echo $row['Autor']?>" required>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" name="arte" value="<?php echo $row['Arte']?>">
                </div>
                <div class="mb-4">
                    <label class="form-label" for="tipo">Tipo: </label>
                    <select class="form-select" aria-label="Default select example" id="tipo" name="tipo" required>
                        <option value="<?php echo $row['Tipo']?>" selected><?php echo $row['Tipo']?></option>
                        <option value="shonen">Shonen</option>
                        <option value="shoujo">Shoujo</option>
                        <option value="josei">Josei</option>
                        <option value="seinen">Seinen</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="status">Status: </label>
                    <select class="form-select" aria-label="Default select example" id="status" name="status" required>
                        <option value="<?php echo $row['Status']?>" selected><?php echo $row['Status']?></option>
                        <option value="Ativo">Ativo</option>
                        <option value="Completo">Completo</option>
                    </select>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/Painel/painel.php" class="btn btn-outline-primary">cancel</a>
                    <button class="btn btn-outline-success" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
    <?php $conn->close(); ?>
</body>
</html>