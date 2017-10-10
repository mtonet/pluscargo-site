<div class="table-responsive">
<table class="table">


<?php
error_reporting(E_ERROR | E_PARSE);
$webservice = new SoapClient('http://crm.eplusbrasil.com.br/aWSScheduleLCL.aspx?wsdl');
$nomePorto= 'Paranaguá';  
$result = $webservice->SCHEDULELCLIMPO(); 
$result = get_object_vars($result); 

foreach($result as $key){ 
	 foreach($key as $filho=> $val){
		foreach($val as $elemento){
			$elemento=get_object_vars($elemento);			
			if ($elemento['PortoDestinoNome']==$nomePorto)
			{

		?>

			<tr>
			  <td colspan="5">Origem:<strong> <? echo($elemento['PortoOrigemNome']); ?></strong> / Destino: <strong><? echo($elemento['PortoDestinoNome']); ?></strong> / TT: <? echo($elemento['ProximasSaidasLCLImpoTT']); ?></td>
			</tr>	
			<tr>
			  <td width="53" bgcolor="#F5F5F5"><strong>M/V</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>VG</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>ETD</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>DEAD LINE</strong></td>
			</tr>
			
			<tr>
			  <td><? echo($elemento['LCLImpoVessel']); ?></td>
			  <td><? echo($elemento['LCLImpoVG']); ?></td>			  			  
			  <td><? echo(substr($elemento['LCLImpoETD'],8,2) . '/' . substr($elemento['LCLImpoETD'],5,2) . '/' . substr($elemento['LCLImpoETD'],0,4)); ?></td>
			  <td><? echo(substr($elemento['LCLImpoCutoff'],8,2) . '/' . substr($elemento['LCLImpoCutoff'],5,2) . '/' . substr($elemento['LCLImpoCutoff'],0,4)); ?></td>
			</tr>
			<tr>
			  <td><? echo($elemento['LCLImpoVessel1']); ?></td>
			  <td><? echo($elemento['LCLImpoVG1']); ?></td>
			  <td><? echo(substr($elemento['LCLImpoETD1'],8,2) . '/' . substr($elemento['LCLImpoETD1'],5,2) . '/' . substr($elemento['LCLImpoETD1'],0,4)); ?></td>
			  <td><? echo(substr($elemento['LCLImpoCutoff1'],8,2) . '/' . substr($elemento['LCLImpoCutoff1'],5,2) . '/' . substr($elemento['LCLImpoCutoff1'],0,4)); ?></td>
			</tr>
			<tr>
			  <td><? echo($elemento['LCLImpoVessel2']); ?></td>
			  <td><? echo($elemento['LCLImpoVG2']); ?></td>
			  <td><? echo(substr($elemento['LCLImpoETD2'],8,2) . '/' . substr($elemento['LCLImpoETD2'],5,2) . '/' . substr($elemento['LCLImpoETD2'],0,4)); ?></td>
			  <td><? echo(substr($elemento['LCLImpoCutoff2'],8,2) . '/' . substr($elemento['LCLImpoCutoff2'],5,2) . '/' . substr($elemento['LCLImpoCutoff2'],0,4)); ?></td>
			</tr>
			<tr>
			  <td><? echo($elemento['LCLImpoVessel3']); ?></td>
			  <td><? echo($elemento['LCLImpoVG3']); ?></td>
			  <td><? echo(substr($elemento['LCLImpoETD3'],8,2) . '/' . substr($elemento['LCLImpoETD3'],5,2) . '/' . substr($elemento['LCLImpoETD3'],0,4)); ?></td>
			  <td><? echo(substr($elemento['LCLImpoCutoff3'],8,2) . '/' . substr($elemento['LCLImpoCutoff3'],5,2) . '/' . substr($elemento['LCLImpoCutoff3'],0,4)); ?></td>
			</tr>
			<tr>
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
