<ul id="nav">
  <li><a href="index.php">Home</a></li>
	<li><a href="institucional.php">Institucional</a></li>
	<li><a href="servicos.php">Serviços</a></li>
	<li><a href="utilitarios.php">Utilitários</a></li>    
</ul>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
	$("#nav").addClass("js").before('<div id="menu">&#9776;</div>');
	$("#menu").click(function(){
		$("#nav").toggle();
	});
</script>