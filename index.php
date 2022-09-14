<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Richard Carvalho, Vinicius de Souza, Kaique pinheiro, Kaique teruel, Guilherme De Paula Silva">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Kaushan+Script&family=Qwitcher+Grypen:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Cadastro</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
     </li>
           <li class="nav-item">
        <a class="nav-link" href="?page=novo">Novo Aluno</a>
     </li>
           <li class="nav-item">
        <a class="nav-link" href="?page=listar">Listar Alunos</a>
     </li>
</ul>

       
      </div>
    </div>
  </div>
</nav>

  <div class="container"> 
    <div class="row">
      <div calss="col mt-5"> 
      <?php
      include("config.php");
    switch(@$_REQUEST["page"]){
      case "novo":
        include("novo-aluno.php");
        break;
        case "listar":
          include("listar-alunos.php");
          break;
          case "salvar":
            include("salvar-aluno.php");
            break;
            case "editar":
              include("editar aluno.php");
          default:
          print "<h1>Bem Vindos!</h1>";
    } 
?>
      </div>
    </div> 
  </div>

    
    <script src="js/bootstrap.bundle.min.js" ></script>

   
  </body>
</html>
