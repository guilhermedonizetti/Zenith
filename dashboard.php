<!DOCTYPE html>
<!-- saved from url=(0056)https://getbootstrap.com.br/docs/4.1/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/nav.css">
   
  <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">
  <script src="https://kit.fontawesome.com/8786c39b09.js" crossorigin="anonymous"></script>
  <title>ZENITH</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




</style>

<style type="text/css">
  @media only screen and (max-width: 600px) {
    body {
      width : 350px;
      text-align: center;
    }
  }


</style>
</head>


<body>
<nav class="menu">
        <ul class="menu-list">
          <li><a href="index.html"><img width="120px" height="50px" src="img/logo.png" alt="Zenith"></a></li>
          <li>
            <a href="dashboard.php">Conexao</a>
          </li>
          <li>
            <a href="dev.html">Desenvolvedores</a>
          </li>
        </ul>
      </nav>

  <div class="container-fluid" >
    <div class="row">
      <nav class="col-md-2 d-none d-md-block sidebar" style='background-color:#fff;border-right: 1px solid #f3f3f3'>
        <div class="sidebar-sticky">

          <ul class="nav flex-column"  style="padding-top: 20px">
            <li class="nav-item">
              <a class="nav-link active" href="?pagina" style="color:#000;text-decoration: none">

                <i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard <span class="sr-only">(atual)</span>
              </a>
            </li>
            
            <?php
     include 'conexao.php';
           $dados=$conexao->query("SHOW TABLES");
        foreach($dados as $linha){  
          
     
        ?>
           <li class="nav-item">
              <a class="nav-link" href="?pagina=dashvendas" style="color:#000;text-decoration: none"> 

                <i class="fas fa-box"></i>&nbsp;<?php var_dump($linha) ?>
              </a>
            </li>
         
            <?php } ?>
          </ul>


        </div>


        
      </nav>






      <!-- conteudo -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">

            </div>

          </div>
        </div>
        <?php

        if(isset($_GET['pagina'])) {

          switch ($_GET['pagina']) {
            case 'dashvendas':
            echo '<h2>Dados das Vendas</h2>';
            include 'vendas.php';
            break;

            case 'clientes':
            include 'cadastro_cliente.php';
            break;

            case 'vendas':

            include 'cadastro_vendas.php';
            break;
            case 'dashclientes':
              echo '<h2> Dados dos Clientes</h2>';
              include 'clientes.php';
            break;
            default:
            echo "<h2>Selecione uma tabela para a visualização dos dados</h2>"; 

            break;
          }



        }



        ?>


      </main>
    </div>
  </div>
  <div class="d-block d-sm-none">
    <nav class="navbar fixed-bottom navbar-light bg-light">
      <a class="navbar-brand" href="#">Ricardo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <a class="nav-link active" href="?pagina">

            Dashboard <span class="sr-only">(atual)</span>
          </a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="?pagina=pedidos" style="text-decoration: none"> 

            Pedidos
          </a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="?pagina=clientes">

            Cadastrar Clientes
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=vendas">

            Cadastrar Vendas
          </a>
        </li>-->

      </ul>
    </div>
  </nav>
</div> 

    <!-- Principal JavaScript do Bootstrap
      ================================================== -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


      <script type="text/javascript">

        $(window).resize(function(){
          drawChart();
          drawChart2();
         
        });

      </script>

    </body>
    </html>