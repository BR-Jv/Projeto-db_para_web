<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="create.css">
    <title>Create account</title>
</head>
<body>
    <div class="h-full d-flex align-items-center">
        <div class="container border">
            <form action="conexao_db/cadastrodb.php" method="POST" class="row p-3">
                <div class="mb-3 p-3">
                    <h3 class="text-center">Cadastro</h3>
                    <a href="index.php">voltar</a>
                </div>
                <div class="col-sm-6 mb-4">
                    <input type="text" class="form-control" placeholder="First name" id="FirstName" name="FirstName" required>
                    <span></span>
                </div>
                <div class="col-sm-6 mb-4">
                  <input type="text" class="form-control" placeholder="Last name" id="LastName" name="LastName">
                </div>
                <div class="col-sm-12 mb-4">
                    <div class="input-group">
                        <span class="input-group-text" id="span-username">@</span>
                        <input type="text" aria-describedby="span-username" class="form-control" placeholder="Username" id="UserName" name="UserName" required>   
                    </div>
                    <span></span>        
                </div>
                <div class="col-sm-12 mb-4">
                    <input type="password" class="form-control" placeholder="Password" id="Password" name="Password" required>
                    <span></span> 
                </div>
                <div class="col-sm-12 mb-4">
                    <input type="email" class="form-control" placeholder="Email" id="Email" name="Email" required>
                </div>
                <div class="col-sm-12 mb-4">
                    <input type="submit" value="Cadastrar" class="btn btn-outline-primary">
                </div>
            </form>
        </div>
    </div>
</body>
</html>