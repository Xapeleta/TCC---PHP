<h1>Novo Aluno</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
     <div class="mb-3">
          <label>RM</label>
          <input type="text" name="rm" class="form-control">
     </div>
     <div class="mb-3">
          <label>Nome</label>
          <input type="text" name="nome" class="form-control">
     </div>

     <div class="mb-3">
          <label>Turma</label>
          <input type="text" name="turma" class="form-control">
     </div>

     <div class="mb-3">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
     </div>
     
</form>