<!DOCTYPE html>
<meta charset="utf-8">
<?php
error_reporting(E_ERROR | E_PARSE);
$webservice = new SoapClient('http://crm.eplusbrasil.com.br/aWSProximasSaidasImpo.aspx?wsdl');

//array(1) { [0]=> string(86) "WSProximasSaidasImpo.ExecuteResponse Execute(WSProximasSaidasImpo.Execute $parameters)" } 
//var_dump($webservice->__getFunctions());
$result = $webservice->Execute(); 
$result = get_object_vars($result);
$nomePorto= $_GET["porto"];  
 
 include("inicio.php");
 
foreach($result as $key){ 
	 foreach($key as $filho=> $val){
		$i=1;	
		foreach($val as $elemento){
			echo('<br>');
			$elemento=get_object_vars($elemento);
			if ($elemento['PortoDestinoNome']==$nomePorto)
			{			
				echo('<b>Porto de Origem ' . $i . '=></b>' . $elemento['PortoOrigemNome']);
				echo(' <b>Porto de Destino ' . $i . '=></b>' . $elemento['PortoDestinoNome']);
				echo(' <b>M/V ' . $i . '=></b>' . $elemento['LCLImpoVessel']);
				
				$i=$i+1;
			}
		}	
	 }
}
 
function validaPorto($porto) {
	if($porto['PortoDestinoNome']='Santos')
		return true;
	else
		return false;
} 
 
?>