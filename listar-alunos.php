<h1>Listar Alunos</h1>
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