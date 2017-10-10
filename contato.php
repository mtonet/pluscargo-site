<!DOCTYPE html>
<html lang="en">
  <head>
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
      
      
        <div class="col-md-6">
          <h2>Contato</h2>
          <hr>
          <p>Selecione o escritório que você deseja falar ou nos envie uma mensagem e esclareça todas as suas dúvidas sobre os nossos serviços e consulte nossos fretes.</p>
        </div>                        
      </div>
<hr>

<form method="post" action="envia.php">

  <div class="form-group">
    <label for="exampleInputEmail1">Selecione o escritório</label>
<select class="form-control"  name ="escritorio" id="escritorio">
  <option selected value ="0"></option>
  <option value ="1" >BELO HORIZONTE</option> 
    <option value ="2" >BRASÍLIA</option>
  <option value ="3">CAMPINAS</option>
  <option value ="4">CURITIBA</option>
  <option value ="5">JOINVILLE</option>
   <option value ="6">LONDRINA</option>
     <option value ="7">PARANAGUÁ</option>
    <option value ="8">PORTO ALEGRE</option>
  <option value ="9">RIO DE JANEIRO</option>
  <option value ="10">SANTOS</option>
 <option value ="11">SÃO PAULO</option>
    
</select>  
</div>


  <div class="form-group">
<input type="text" class="form-control" name ="nome" id="nome" placeholder="Nome">
</div>

  <div class="form-group">
<input type="text" class="form-control" name ="telefone" id="telefone" placeholder="Telefone">
</div>



  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" name ="email" id="email" placeholder="Email">
  </div>


  <div class="form-group">
<input type="text" class="form-control" name ="assunto" id="assunto" placeholder="Assunto">
</div>

  <div class="form-group">
<textarea class="form-control" rows="3" name ="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
</div>

  <button type="submit" class="btn btn-default" >Enviar</button>
</form>




      <footer>
        <hr>
        <p></p>
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