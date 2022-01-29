<?php 
  require_once('functions.php'); 
  add();
?>
<?php include(HEADER_TEMPLATE); ?>

  <h2 id="actions" >Novo Produto</h2>

  <form action="add.php" method="post">
    <!-- area de campos do form -->
    <hr />
    <div class="row">
      <div class="form-group col-md-7">
        <label for="descricao">Descrição do produto *</label>
        <input type="text" class="form-control" name="produto[descricao]">
      </div>

      <div class="form-group col-md-3">
        <label for="campo2">Quantidade *</label>
        <input type="number" class="form-control" maxlength="11" name="produto[quantidade]">
      </div>

      <div class="form-group col-md-2">
        <label for="campo3">Preço unitário *</label>
        <input type="number" class="form-control" step="0.01" name="produto[precounit]"/>
      </div>
    </div>
    
    <div id="actions" class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-dark"> <i class="fas fa-hdd"></i> Salvar </button>
        <a href="index.php" class="btn btn-light"><i class="fas fa-ban"></i> Cancelar</a>
      </div>
    </div>
  </form>
<?php include(FOOTER_TEMPLATE); ?>