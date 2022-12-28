<?php
    session_start();
    if( !isset($_SESSION['name']) ){
        $_SESSION['cadastro_erro'] = "Erro, usuário não logado!";
        header('Location: https://joaovictoralvesteste.000webhostapp.com/index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="new.css">
    <title>Novo Conteúdo</title>
</head>
<body>
    <div class="h-full d-flex align-items-center">
        <div class="container border">
            <form action="/conexao_db/novoItem.php" method="POST" class="row p-3">
                <div class="mb-3 p-3">
                    <h3 class="text-center">Novo mangá</h3>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" placeholder="Titulo" id="" name="titulo" required>
                </div>
                <div class="mb-4">
                    <input type="number" class="form-control" placeholder="Ano" id="" name="ano" required>    
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" placeholder="Autor" id="" name="autor" required>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" placeholder="Arte" id="" name="arte">
                </div>
                <div class="mb-4">
                    <label class="form-label" for="tipo">Tipo: </label>
                    <select class="form-select" aria-label="Default select example" id="tipo" name="tipo" required>
                        <option value="shonen" selected>Shonen</option>
                        <option value="shoujo">Shoujo</option>
                        <option value="josei">Josei</option>
                        <option value="seinen">Seinen</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="status">Status: </label>
                    <select class="form-select" aria-label="Default select example" id="status" name="status" required>
                        <option value="ativo" selected>Ativo</option>
                        <option value="completo">Completo</option>
                    </select>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/Painel/painel.php" class="btn btn-outline-primary">cancel</a>
                    <button class="btn btn-outline-success" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>