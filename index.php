<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>
<h1 id="actions">Dashboard</h1>
<hr />
<?php if ($db) : ?>

<h2 id="actions">

	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="customers/add.php" class="btn btn-secondary">
				<div class="row">
					<div class="col-xs-12 text-center">
					<i class="fas fa-user-plus fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Novo Cliente</p>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="customers" class="btn btn-default">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-user-friends fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Clientes</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</h2>

<h2>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="produtos/add.php" class="btn btn-secondary">
				<div class="row">
					<div class="col-xs-12 text-center">
					<i class="fas fa-parachute-box fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Novo Produto</p>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="produtos" class="btn btn-default">
				<div class="row">
					<div class="col-xs-12 text-center">
					<i class="fas fa-box fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Produtos</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</h2>
<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>
<?php endif; ?>
<?php include(FOOTER_TEMPLATE); ?>