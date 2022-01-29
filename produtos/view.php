<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>
<h2>Produtos <?php echo $produto['id']; ?></h2>
<hr>
<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>
<dl class="dl-horizontal">
	<dt>Descrição do produto:</dt>
	<dd><?php echo $produto['descricao']; ?></dd>

	<dt>Quantidade:</dt>
	<dd>
    <?php echo $produto['quantidade']; ?> 
    </dd>

	<dt>Preço:</dt>
	<dd>
    <?php echo $produto['precounit']; ?> 
    </dd>

</dl>

<dl class="dl-horizontal">
		<dt>Data de Cadastro:</dt>
	<dd><?php echo FormataData($produto['created'], "d/m/Y - H:i:s"); ?></dd>
</dl>

<div id="actions" id="left" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-dark"> <i class="fas fa-edit"></i> Editar </button>
	  <a href="index.php" class="btn btn-light"> Voltar</a>
	</div>
</div>
<?php include(FOOTER_TEMPLATE); ?>