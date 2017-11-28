<?php $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);?>
 
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo-header.jpg" alt="Pluscargo"></a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="institucional.php" <?php if($paginaCorrente == 'institucional.php') {echo 'class="corrente"';} ?>>INSTITUCIONAL</a></li>
        <li><a href="servicos.php" <?php if($paginaCorrente == 'servicos.php') {echo 'class="corrente"';} ?>>SERVIÇOS</a></li>
        <li><a href="programacao.php" <?php if($paginaCorrente == 'programacao.php') {echo 'class="corrente"';} ?>>PROGRAMAÇÃO DE NAVIOS</a></li>
        <li><a href="escritorios.php" <?php if($paginaCorrente == 'escritorios.php') {echo 'class="corrente"';} ?>>ESCRITÓRIOS</a></li>
        <li><a href="contato.php" <?php if($paginaCorrente == 'contato.php') {echo 'class="corrente"';} ?>>CONTATO</a></li>
        <!--<li><a href="http://tracking.web2406.uni5.net/login.aspx" target="_blank">TRACKING</a></li> -->       
      </ul>

      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
