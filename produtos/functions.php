<?php

require_once('../config.php');
require_once(DBAPI);

$produtos = null;
$produto = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $produtos;
	$produtos = find_all('produtos');
}
?>
<?php
/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['produto'])) {
    
    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $produto = $_POST['produto'];
    $produto['modified'] = $produto['created'] = $today->format("Y-m-d H:i:s");
    
    save('produtos', $produto);
    header('location: index.php');
  }
}
?>
<?php

    function edit() {

      $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

      if (isset($_GET['id'])) {

        $id = $_GET['id'];

        if (isset($_POST['produto'])) {

          $produto = $_POST['produto'];
          $produto['modified'] = $now->format("Y-m-d H:i:s");

          update('produtos', $id, $produto);
          header('location: index.php');
        } else {

          global $produto;
          $produto = find('produtos', $id);
        } 
      } else {
        header('location: index.php');
      }
    }
?>
<?php

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $produto;
  $produto = find('produtos', $id);
}
?>
<?php

/**
 *  Formatação
 */

 function FormataData($data = null, $formato = "") {
  $data = date_create($data , new DateTimeZone('America/Sao_Paulo')) -> format ($formato);
  return $data;
}

?>
<?php
/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $produto;
  $produto = remove('produtos', $id);

  header('location: index.php');
}
?>