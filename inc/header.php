<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
    <title>CRUD com Bootstrap</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/crud-bootstrap-php/sellcast-brands.svg" type="image/x-icon">
    
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 40px;
        }

        .btn-light
        {
          background-color : #999999;
          color: #FFFFFF;
        }
        .btn-light:hover 
        {
          background-color : #888888;
          color: #FFFFFF;
        }

        #actions 
        {
          margin-top:10px;
        }


    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/fontawesome.min.css">
</head>
<body>


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
       
        <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">CRUD</a>
        </div>
   
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">          
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <i class="fa fa-user-friends"></i>
                  Clientes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php"> <i class="fa fa-user-plus"></i> Novo Cliente</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item"  href="<?php echo BASEURL; ?>customers"> <i class="fa fa-user-cog"> </i> Gerenciar Clientes</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <i class="fas fa-box"></i>
                  Produtos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo BASEURL; ?>produtos/add.php"> <i class="fas fa-people-carry"></i> Novo Produto</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item"  href="<?php echo BASEURL; ?>produtos"> <i class="fas fa-box-open"></i> Gerenciar Produtos</a></li>
                </ul>
            </li>
      
      
      
          </ul>
        </div><!--/.navbar-collapse -->
  </div>
</nav>

    <main class="container">