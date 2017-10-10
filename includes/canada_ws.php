<div class="table-responsive">
<table class="table">


<?php
error_reporting(E_ERROR | E_PARSE);
$webservice = new SoapClient('http://crm.eplusbrasil.com.br/aWSScheduleLCL.aspx?wsdl');
$nomePorto= 'Toronto';  
$result = $webservice->SCHEDULELCLEXPO(); 
$result = get_object_vars($result); 

foreach($result as $key){ 
	 foreach($key as $filho=> $val){
		 
		foreach($val as $elemento){
			$elemento=get_object_vars($elemento);			
			if ($elemento['PortoDestinoScheduleExpoNome']==$nomePorto)
			{

		?>

			<tr>
				<td colspan="5">Destino: <strong><? echo($elemento['PortoDestinoScheduleExpoNome']); ?></strong> / TT: <? echo($elemento['LCLExpoTransitTime']); ?></td>
			</tr>	
			<tr>
			  <td bgcolor="#F5F5F5"><strong>VESSEL</strong></td>
			  <td bgcolor="#F5F5F5"><strong>VG</strong></td>
			  <td bgcolor="#F5F5F5"><strong>ETA</strong></td>
			  <td bgcolor="#F5F5F5"><strong>DEAD LINE</strong></td>
			  <td bgcolor="#F5F5F5"><strong>HORA</strong></td>
			</tr>
			
			<tr>
			  <td><? echo($elemento['LCLExpoVessel']); ?></td>
			  <td><? echo($elemento['LCLExpoVG']); ?></td>
			  <td><? echo(substr($elemento['LCLExpoETA'],8,2) . '/' . substr($elemento['LCLExpoETA'],5,2) . '/' . substr($elemento['LCLExpoETA'],0,4)); ?></td>
			  <td><? echo(substr($elemento['LCLExpoCutoff'],8,2) . '/' . substr($elemento['LCLExpoCutoff'],5,2) . '/' . substr($elemento['LCLExpoCutoff'],0,4)); ?></td>
			  <td>11:00</td>
			</tr>
			<tr>
			  <td><? echo($elemento['LCLExpoVessel1']); ?></td>
			  <td><? echo($elemento['LCLExpoVG1']); ?></td>
			  <td><? echo(substr($elemento['LCLExpoETA1'],8,2) . '/' . substr($elemento['LCLExpoETA1'],5,2) . '/' . substr($elemento['LCLExpoETA1'],0,4)); ?></td>
			  <td><? echo(substr($elemento['LCLExpoCutoff1'],8,2) . '/' . substr($elemento['LCLExpoCutoff1'],5,2) . '/' . substr($elemento['LCLExpoCutoff1'],0,4)); ?></td>
			  <td>11:00</td>
			</tr>
			<tr>
			  <td><? echo($elemento['LCLExpoVessel2']); ?></td>
			  <td><? echo($elemento['LCLExpoVG2']); ?></td>
			  <td><? echo(substr($elemento['LCLExpoETA2'],8,2) . '/' . substr($elemento['LCLExpoETA2'],5,2) . '/' . substr($elemento['LCLExpoETA2'],0,4)); ?></td>
			  <td><? echo(substr($elemento['LCLExpoCutoff2'],8,2) . '/' . substr($elemento['LCLExpoCutoff2'],5,2) . '/' . substr($elemento['LCLExpoCutoff2'],0,4)); ?></td>
			  <td>11:00</td>
			</tr>
			<tr>
			  <td><? echo($elemento['LCLExpoVessel3']); ?></td>
			  <td><? echo($elemento['LCLExpoVG3']); ?></td>
			  <td><? echo(substr($elemento['LCLExpoETA3'],8,2) . '/' . substr($elemento['LCLExpoETA3'],5,2) . '/' . substr($elemento['LCLExpoETA3'],0,4)); ?></td>
			  <td><? echo(substr($elemento['LCLExpoCutoff3'],8,2) . '/' . substr($elemento['LCLExpoCutoff3'],5,2) . '/' . substr($elemento['LCLExpoCutoff3'],0,4)); ?></td>
			  <td>11:00</td>
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
