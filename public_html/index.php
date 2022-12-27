<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>
<body>
    <?php
        include_once('alerts.php');
    ?>
    <div class="h-full d-flex align-items-center">
        <div class="container border">
            <form class="row p-3" action="conexao_db/loginSys.php" method="post">
                <div class="mb-3 p-3">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" id="user" class="form-control" placeholder="Username" name="UserName">
                    <label for="user" class="px-4">Username</label>
                </div>  
                <div class="form-floating mb-4">
                    <input type="password" id="password" class="form-control" placeholder="Password" name="Password">
                    <label for="password"  class="px-4">Password</label>
                </div>
                <div class="mb-4 text-center">
                    <button type="submit" class="btn btn-outline-primary">entrar</button>
                </div>
                <div class="mb-4 text-center">
                    <a href="create.php">criar uma conta</a>
                </div>
            </form>
        </div>
    </div>
    <?php  session_destroy(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>