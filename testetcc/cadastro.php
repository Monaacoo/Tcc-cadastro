<?php
    if (isset($_SESSION['sem_email'])) :
        ob_start() ?>
        <script>
            alert("Preencha seu e-mail");
        </script>
<?php 
    endif;
    unset($_SESSION['sem_email']);

    if (isset($_SESSION['sem_senha'])) :
        ob_start() ?>
        <script>
            alert("Preencha sua senha");
        </script>
<?php 
    endif;
    unset($_SESSION['sem_senha']);
    
    if (isset($_SESSION['sem_senha2'])) :
        ob_start() ?>
        <script>
            alert("Preencha sua senha novamente");
        </script>
<?php 
    endif;
    unset($_SESSION['sem_senha2']);
    
    if (isset($_SESSION['sem_escola'])) :
        ob_start() ?>
        <script>
            alert("Preencha sua escola");
        </script>
<?php 
    endif;
    unset($_SESSION['sem_escola']);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    
                </div>
                <div class="card-body">
                    <form method = "POST" action = "cadastrar.php">
                    <div class = "form-group">
                    <label for="Email1">Email address</label>
                    <input type="email" class="form-control" name="email" id="Email1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                    <label for="Password1">Password</label>
                    <input type="password" class="form-control" name="senha" id="Password1" placeholder="Password">
                    </div>

                    <div class="form-group">
                    <label for="Password2">Confirm Password</label>
                    <input type="password" class="form-control" name="senha2" id="Password2" placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                    <label for="Instituicao">Instituicao</label>
                    <input type="text" class="form-control" name="escola" id="Escola" placeholder="Instituicao">
                    </div>
                    <br>
                    <div class="form-group">
                    <select name="tipo" id="tipo">
                        <option value="aluno">Aluno</option>
                        <option value="professor">Professor</option>
                    </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    
                    
            </div>
        </div>

  </body>
</html>