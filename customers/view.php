<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>
    <h2>Cliente <?php echo $customer['id']; ?></h2>
    <hr>
<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>
    <dl class="dl-horizontal">
        <dt>Nome / Razão Social:</dt>
        <dd><?php echo $customer['name']; ?></dd>

        <dt>CPF / CNPJ:</dt>
        <dd>
            <?php 
            $cep = substr($customer['cpf_cnpj'], 0, 3) . "." . 
            substr($customer['cpf_cnpj'], 3, 3) . "." . 
            substr($customer['cpf_cnpj'], 6, 3) . "-" . 
            substr($customer['cpf_cnpj'], 9, 2);
            echo $cep; 
            
            ?>
        </dd>

        <dt>Data de Nascimento:</dt>
        <dd><?php echo FormataData($customer['birthdate'], "d/m/Y"); ?></dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>Endereço:</dt>
        <dd><?php echo $customer['address']; ?></dd>
        
        <dt>Bairro:</dt>
        <dd><?php echo $customer['hood']; ?></dd>

        <dt>CEP:</dt>
        
        <dd>
            <?php 
            $cep = substr($customer['zip_code'], 0, 5) . "-" . 
            substr($customer['zip_code'], 5, 3);
            echo $cep; 
            ?>
        </dd>

        <dt>Data de Cadastro:</dt>
        <dd><?php echo FormataData($customer['created'], "d/m/Y - H:i:s"); ?></dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>Cidade:</dt>
        <dd><?php echo $customer['city']; ?></dd>
        <dt>Telefone:</dt>
        <dd>
            (
        <?php 
            $telefone =substr($customer['phone'], 0, 2) . " ) " . 
            substr($customer['phone'], 2, 5) . "-" .
            substr($customer['phone'], 7, 4);
            echo $telefone;     
        ?>
        </dd>

        <dt>Celular:</dt>
        <dd>
            (
            <?php 
            $telefone =substr($customer['mobile'], 0, 2) . " ) " . 
            substr($customer['mobile'], 2, 5) . "-" .
            substr($customer['mobile'], 7, 4);
            echo $telefone;     
        ?></dd>

        <dt>UF:</dt>
        <dd><?php echo $customer['state']; ?></dd>

        <dt>Inscrição Estadual:</dt>
        <dd><?php echo $customer['ie']; ?></dd>
    </dl>

    <div id="actions" class="row">
        <div class="col-md-12">
        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-dark"> <i class="fas fa-edit"></i> Editar </button>
        <a href="index.php" class="btn btn-light"> Voltar</a>
        </div>
    </div>
<?php include(FOOTER_TEMPLATE); ?>