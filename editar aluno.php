<h1>Editar Aluno</h1>
<?php
    $sql = "SELECT * FROM alunos WHERE rm=".$_REQUEST["rm"];
    $res = $conn->query($sql);
    $row  = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="RM" value="<?php print $row->RM; ?>">
     <div class="mb-3">
          <label>RM</label>
          <input type="text" name="rm" value="<?php print $row->RM; ?>" class="form-control">
     </div>
     <div class="mb-3">
          <label>Nome</label>
          <input type="text" name="nome" value="<?php print $row->NOME; ?>" class="form-control">
     </div>

     <div class="mb-3">
          <label>Turma</label>
          <input type="text" name="turma" value="<?php print $row->TURMA; ?>" class="form-control">
     </div>

     <div class="mb-3">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
     </div>
     
</form>