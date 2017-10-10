<div class="table-responsive">
<table class="table">


<?php
error_reporting(E_ERROR | E_PARSE);
$webservice = new SoapClient('http://crm.eplusbrasil.com.br/aWSProximasSaidasImpo.aspx?wsdl');
$nomePorto= 'Santos'; //$_GET['porto'];  
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
			  <td colspan="5">Origem:<strong> Antwerp</strong> / Destino: <strong>Santos</strong></td>
			</tr>	
			<tr>
			  <td width="53" bgcolor="#F5F5F5"><strong>M/V</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>VG</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>ETA</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>ETD</strong></td>
			  <td width="53" bgcolor="#F5F5F5"><strong>DEAD LINE</strong></td>
			</tr>
			
			<tr>
			  <td>CAP SAN ARTEMISSIO</td>
			  <td>635S</td>
			  <td>2016-09-15</td>
			  <td>2016-08-31</td>
			  <td>2016-08-26</td>
			</tr>
			<tr>
			  <td>CAP SAN LORENZO</td>
			  <td>636S</td>
			  <td>2016-09-22</td>
			  <td>2016-09-07</td>
			  <td>2016-09-02</td>
			</tr>
			<tr>
			  <td>CAP SAN AUGUSTIN</td>
			  <td>637</td>
			  <td>2016-09-29</td>
			  <td>2016-09-14</td>
			  <td>2016-09-09</td>
			</tr>
			<tr>
			  <td>CAP SAN ANTONIO</td>
			  <td> 638S</td>
			  <td>2016-10-06</td>
			  <td>2016-09-21</td>
			  <td>2016-09-16</td>
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
