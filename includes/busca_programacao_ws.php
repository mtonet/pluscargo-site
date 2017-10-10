
<div class="table-responsive">
<table class="table">
<tbody>
<?php
error_reporting(E_ERROR | E_PARSE);
$webservice = new SoapClient('http://crm.eplusbrasil.com.br/aWSProximasSaidasImpo.aspx?wsdl');
$nomePorto= $_GET['porto'];  
$result = $webservice->Execute(); 
$result = get_object_vars($result); 
 
foreach($result as $key){ 
	 foreach($key as $filho=> $val){
		foreach($val as $elemento){
			$elemento=get_object_vars($elemento);			
			if ($elemento['PortoDestinoNome']==$nomePorto)
			{
		?>
			<tr>
			  <td colspan="5">Origem:<strong> <? echo($elemento['PortoOrigemNome']); ?></strong> / Destino: <strong><? echo($elemento['PortoDestinoNome']); ?></strong></td>
			</tr>	
			<tr>
			  <td width="53" bgcolor="#F5F5F5"><strong>M/V</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>VG</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>ETA</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>ETD</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>DEAD LINE</strong></td>
			</tr>
			
			<tr>
			  <td><? echo($elemento['LCLImpoVessel']); ?></td>
			  <td><? echo($elemento['LCLImpoVG']); ?></td>
			  <td><? echo date($elemento['LCLImpoETA']); ?></td>
			  <td><? echo($elemento['LCLImpoETD']); ?></td>
			  <td><? echo($elemento['LCLImpoCutoff']); ?></td>
			</tr>
			<tr>
			  <td><? echo($elemento['LCLImpoVessel1']); ?></td>
			  <td><? echo($elemento['LCLImpoVG1']); ?></td>
			  <td><? echo($elemento['LCLImpoETA1']); ?></td>
			  <td><? echo($elemento['LCLImpoETD1']); ?></td>
			  <td><? echo($elemento['LCLImpoCutoff1']); ?></td>
			</tr>
			<tr>
			  <td><? echo($elemento['LCLImpoVessel2']); ?></td>
			  <td><? echo($elemento['LCLImpoVG2']); ?></td>
			  <td><? echo($elemento['LCLImpoETA2']); ?></td>
			  <td><? echo($elemento['LCLImpoETD2']); ?></td>
			  <td><? echo($elemento['LCLImpoCutoff2']); ?></td>
			</tr>
			<tr>
			  <td><? echo($elemento['LCLImpoVessel3']); ?></td>
			  <td><? echo($elemento['LCLImpoVG3']); ?></td>
			  <td><? echo($elemento['LCLImpoETA3']); ?></td>
			  <td><? echo($elemento['LCLImpoETD3']); ?></td>
			  <td><? echo($elemento['LCLImpoCutoff3']); ?></td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>		
		
		<?php
			}
		}	
	 }
}
 

?>
</table>
</div>