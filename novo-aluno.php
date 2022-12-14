<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Richard Carvalho, Vinicius de Souza, Kaique pinheiro, Kaique teruel, Guilherme De Paula Silva">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Kaushan+Script&family=Qwitcher+Grypen:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>www.EtecFoodControl</title>
  </head>
  <body>
     <header>
   <nav>
    <a class="logo" href="index1.php">Etecs</a>
    <ul class="nav-list">
      <li><a href="index1.php">Início</a></li>
      <li><a href="">Pedidos</a></li>
      <li><a href="novo-aluno.php">Cadastro</a></li>
      <li><a href="listar-alunos.php">Lista de alunos</a></li>
      <li><a href="">Ajuda</a></li>
    </ul>
   </nav>
 </header>

<main>
<h1>Cadastrar</h1>
</main>

<div class="container">
     <h1>Novo aluno</h1>

    <div class="form">
    <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar"><br><br>
     
          <label for="RM">RM</label>
          <input type="text" id="name" name="rm" class="form-control"><br>

          <label for="Nome">Nome</label>
          <input type="text" id="name" name="nome" class="form-control"><br>
 
          <label for="turma">Turma</label>
          <input type="text" id="name" name="turma" class="form-control"><br>
     
          <button type="submit" class="btn btn-primary">Cadastrar</button>
     </form>
    </div>

    <div class="form-image">
      <img src="img/cadastro.svg" alt="cadastro Aluno">
    </div>

</div>
     
</body>

</html>