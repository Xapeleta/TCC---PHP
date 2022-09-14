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
<h1>Listar Alunos</h1>
</main>

<?php
    $sql = "SELECT * FROM alunos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table-hover table-striped table-bordered'>";
            print"<tr>";
            print "<th>RM</th>";
            print "<th>NOME</th>";
            print "<th>TURMA</th>";
            print "<th>Ações</th>";
            print"</tr>";
        while($row = $res->fetch_object()){
            print"<tr>";
            print "<td>".$row->RM."</td>";
            print "<td>".$row->NOME."</td>";
            print "<td>".$row->TURMA."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&rm=".$row->RM."';\" class='btn btn-success'>Editar</button>


                    <button  onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&rm=".$row->RM."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
                   </td>";
            print"</tr>";
            
        }
        print "</table>";

    }else{
        print "<p class='alert alet-danger'>Não encontrou resultados1</p>";
    }
?>
  </body>
</html>