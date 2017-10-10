<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
			// Place this in your between your <head> and </head> tags
			require_once("nuggetz/init.php");
		?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PLUSCARGO BRASIL</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 
     <?php include("includes/nav.php"); ?>  
 
<div class="banner-header">
<p>estrutura ideal para o<br>
transporte Das suas mercadorias</p>
<img src="img/banner-servicos.jpg" class="img-responsive" alt="banner">
</div>
 
 
 <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      
      
        <div class="col-md-8">
          <h2>Programação de Navios</h2>
          <hr>
          <p>Selecione a opção de IMPORTAÇÃO ou EXPORTAÇÃO 
para visualizar os navios programados:</p>
        </div>                        
      </div>
      
      
      
                                                                       
        <div class="row" style="margin-bottom:30px;">                                          
        <div class="col-md-2">
          <h4><a href="programacao.php" style="color:#999;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="font-size:15px;"></span>IMPORTAÇÃO</a></h4>
          </div>
        <div class="col-md-2">          
          <h4><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="font-size:15px;"></span>EXPORTAÇÃO</h4>
          </div>          
          </div>
      
           <ul class="nav nav-pills">
  <li role="presentation"><a href="exportacao.php">AFRICA DO SUL</a></li>
  <li role="presentation"><a href="alemanha.php">ALEMANHA</a></li>
  <li role="presentation"><a href="argentina.php">ARGENTINA</a></li>
    <li role="presentation" ><a href="belgica.php">BELGICA</a></li>
    <li role="presentation" class="active"><a href="canada.php">CANADA</a></li>
    <li role="presentation"><a href="chile.php">CHILE</a></li>
    <li role="presentation"><a href="colombia.php">COLOMBIA</a></li>
    <li role="presentation"><a href="costa-rica.php">COSTA RICA</a></li>
    <li role="presentation"><a href="ecuador.php">ECUADOR</a></li>
    <li role="presentation"><a href="espanha.php">ESPANHA</a></li>
    <li role="presentation"><a href="eua.php">ESTADOS UNIDOS</a></li>
    <li role="presentation"><a href="holanda.php">HOLANDA</a></li>
        <li role="presentation"><a href="italia.php">ITALIA</a></li>
    <li role="presentation"><a href="mexico.php">MEXICO</a></li>
    <li role="presentation"><a href="panama.php">PANAMA</a></li>
    <li role="presentation"><a href="peru.php">PERU</a></li>
    <li role="presentation"><a href="singapura.php">SINGAPURA</a></li>
</ul>              

<?php include("includes/canada_ws.php");?>



      <footer>
        <hr>
        <p><?php new nuggetzControl();?></p>
   </footer>
  </div>
 
 
 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80464322-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/23421967-7143-4515-9dde-f9406cbb0d31-loader.js"></script>
</body>
</html>