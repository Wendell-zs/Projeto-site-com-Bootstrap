<?php
    require_once('functions.php');
    index();
?>
<?php include(HEADER_TEMPLATE); ?>
<style>
#actions 
        {
          margin-top:10px;
        }
</style>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2 id="actions">Produtos</h2>
		</div>
		<div id="actions" class="col-sm-6 text-right h2">
	    	<a class="btn btn-dark" href="add.php"><i class="fa fa-user-plus"></i> Novo Produto</a>
	    	<a class="btn btn-light" href="index.php"><i class="fa fa-sync-alt"></i> Atualizar</a>
	    </div>
	</div>
</header>
<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>
<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th style="width:30%">Descrição do produto</th>
		<th>Quantidade</th>
		<th>Preço</th>
		<th>Atualizado em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($produtos) : ?>
<?php foreach ($produtos as $produto) : ?>
	<tr>
		<td><?php echo $produto['id']; ?></td>
		<td><?php echo $produto['descricao']; ?></td>
		<td><?php echo $produto['quantidade']; ?></td>
		<td>R$ <?php echo $produto['precounit']; ?></td>
		<td><?php echo date_format (date_create($produto['modified'], new DateTimeZone("America/Sao_Paulo")), "d/m/Y - H:i:s"); ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-light"><i class="fa fa-user-edit"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#delete-modal-produto" data-produto="<?php echo $produto['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>
<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>