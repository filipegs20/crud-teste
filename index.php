<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <a class="navbar-brand" href="#">FGS CONSULTING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=novo">Novo cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar usuários</a>
            </li>
        </ul>
             <span class="navbar-text">
             Por Filipe
             </span>
        </div>
</div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
                
                <?php
                    include ("config.php");
                    switch (@$_REQUEST["page"]){
                        case "novo":
                            include ("novo-usuario.php");
                            break;
                        case "listar":
                            include ("listar-usuario.php");
                            break;
                        case "salvar":
                            include ("salvar-usuario.php");
                            break;
                        case "editar":
                            include ("editar-usuario.php");
                            break;                            
                        default:
                        print "<h1>Bem-Vindos!</h1>";


                    }


                ?>
        </div>
    </div>
</div>
  </body>
</html>