<?php
    session_start();
    if( !isset($_SESSION['name']) ){
        $_SESSION['cadastro_erro'] = "Erro, usuário não logado!";
        header('Location: https://joaovictoralvesteste.000webhostapp.com/index.php');
        exit;
    }
    
    include "../conexao_db/conection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="painel.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Painel</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MangaView</a>
          <a class="btn btn-primary" href="exit/exit_session.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg> Sair</a>
        </div>
    </nav>
    <main>
        <?php
            include_once('../alerts.php');
        ?>
        <div class="alert alert-light text-center my-0">
            <p class="p-3">Bem vindo, <?php echo $_SESSION['name'] ?>.</p>
        </div>
        <div class="table-responsive my-0">
            <table class="table table-striped table-bordered">
                <thead>
                  <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Arte</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
               <tbody>
                   <?php
                        $sql = "SELECT * FROM Manga";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                   ?>
                    <tr>
                        <th scope="row"> <?php echo $row['Id'] ?> </th>
                        <td><?php echo $row['Titulo']?></td>
                        <td><?php echo $row['Ano']?></td>
                        <td><?php echo $row['Autor']?></td>
                        <td><?php echo $row['Arte']?></td>
                        <td><?php echo $row['Tipo']?></td>
                        <td><?php echo $row['Status']?></td>
                        <td>
                            <a href="edit/edit.php?id=<?php echo $row['Id'] ?>" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['Id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo $row['Id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Deletar mangá</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <p>Tem certeza que deseja deletar esse mangá ?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                    <form action="/conexao_db/delete.php" method="POST">
                                        <input type="hidden" name="idDelete" value="<?php echo $row['Id'] ?>">
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                            };
                        };
                    $conn->close();
                    
                    unset($_SESSION['cadastro_erro']);
                    unset($_SESSION['cadastro_ok']);
                    
                    ?>
               </tbody>
                <tfoot>
                    <a class="btn btn-success" href="novo/new.php">Novo</a>
                </tfoot>
            </table>
        </div>
    </main>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
