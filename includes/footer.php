<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="js/ddaccordion.js">

/***********************************************
* Accordion Content script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

</script>


<style type="text/css">

.technology{ /*header of 2nd demo*/
	cursor: hand;
	cursor: pointer;
    width: 240px;
    font-size: 12px;

}


.thelanguage {
	font-size:11px;	width:190px; color:#666;}

.openlanguage{ /*class added to contents of 2nd demo when they are open*/
color:#328ca6;
letter-spacing:1px;
}

.closedlanguage{ /*class added to contents of 2nd demo when they are closed*/
color:#328ca6;
letter-spacing:1px;

}

</style>

<script type="text/javascript">


//Initialize 2nd demo:
ddaccordion.init({
	headerclass: "technology", //Shared CSS class name of headers group
	contentclass: "thelanguage", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: false, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	scrolltoheader: false, //scroll to header each time after it's been expanded by the user?
	persiststate: false, //persist state of opened contents within browser session?
	toggleclass: ["closedlanguage", "openlanguage"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["prefix", "<img src='img/minus.jpg' /> ", "<img src='img/plus.jpg' /> "], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})

</script>
</head>

<body>

<div class="container-footer">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3"><h2>40 escritórios próprios em 7 países das Américas:</h2></td>
    </tr>
  <tr>
    <td colspan="2"><h3>Uruguai, Argentina, Bolívia, Brasil, Chile, México e Paraguai</h3></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div class="technology">Pluscargo – Uruguai</div>
      <div class="thelanguage"> Calle Guatemala, s/n - C.P.11.800 Recinto Portuario<br>
        Puerto De Montevideo - Uruguay<br>
        Tel: (598) 2924-4525<br>
        Fax: (598) 2924-3788 </div></td>
    <td><div class="technology">Pluscargo – Joinville</div>
      <div class="thelanguage"> 
        Rua Abdon Batista, 121 - sala 1203 - Ed. Hannover<br>
        Joinville - SC - CEP 89201-010<br>
        Tel: (55) 47 3029-2439
      </div></td>
    
    <td><div class="technology">Pluscargo – Rio de Janeiro</div>
      <div class="thelanguage"> 
        Av. Presidente Vargas, 482 – sala 1306<br>
        Centro Rio de Janeiro - RJ - CEP 20071-909<br>
        Tel/Fax: (55) 21 3553-4655
      </div></td>
  </tr>
  <tr>
    <td><div class="technology">Pluscargo – Porto Alegre</div>
<div class="thelanguage">
Av. Cristovão Colombo, 3000 conj. 402<br>
Higienópolis - CEP 90560-002<br>
Tel: (55) 51 3021-0600<br>
Fax: (55) 51 3021-0615<br>
Email: <a href="mailto:supervisor@pluscargo.com.br">supervisor@pluscargo.com.br</a> </div></td>
    <td><div class="technology">Pluscargo – Paranaguá</div>
      <div class="thelanguage"> 
Rua Nestor Victor, 593<br>
Bairro 29 de Julho - Paranaguá - PR - CEP 83203-540<br>
Tel: (55) 41 3424-9058
</div></td>
        
    <td><div class="technology">Pluscargo – Argentina</div>
      <div class="thelanguage"> 
Av. Bernardino Rivadavia, n° 413 Piso 5 - Ofinica I<br>
C1002aac Ciudad Autonoma Bs As Cap Fed<br>
Tel: (5411) 4345-1614<br>
Fax: (5411) 4345-0022
     </div></td>
  </tr>
  <tr>
    <td><div class="technology">Pluscargo – Campinas</div>
<div class="thelanguage">
Av. Imperatriz Dona Tereza Cristina, 646<br>
CEP 13100-200 - Jardim Guarani<br>
Tel: (55) 19 3705-5370<br>
Fax: (55) 19 3294-4182 - Ramal 215<br>
Email: <a href="mailto:richard.witte@pluscargo.com.br">richard.witte@pluscargo.com.br</a> </div></td>
    <td><div class="technology">Pluscargo – São Paulo</div>
      <div class="thelanguage"> 
Rua Fidêncio Ramos, 100 – 9º andar<br>
Vila Olímpia – SP - CEP 04551-010<br>
Tel: (55) 11 3047-3500<br>
Fax: (55) 11 3045-5756 
</div></td>
    <td><div class="technology">Pluscargo – Argentina (Litoral)</div>
      <div class="thelanguage">
Mitre 868 P.4 Of.4 - Rosario - Argentina<br>
Tel: (54341) 426 7068<br>
Fax: (54341) 426 7068
</div></td>
  </tr>
  <tr>
    <td><div class="technology">Pluscargo – Curitiba</div>
<div class="thelanguage">
Avenida Cândido de Abreu, 776 Cj.1204,1205 - Ed. World Business<br>
Centro Cívico - Curitiba - PR - CEP 80530-000<br>
Tel: (55) 41 3353-7587
</div></td>
    <td><div class="technology">Pluscargo – Santos</div>
      <div class="thelanguage"> 
Av. Senador Feijó, 31 - sala 01<br>
Centro - Santos - SP - CEP 11015-501<br>
Tel: (55) 13 3202-4545<br>
Fax: (55) 13 3216-1062<br>
Email: <a href="mailto:operationalplus@pluscargo.com.br">operationalplus@pluscargo.com.br</a> </div></td>
      
      
    <td><div class="technology">Pluscargo – Paraguai</div>
      <div class="thelanguage">
Estrela 692 Piso 3 Of.35 - Edificio Lider IV<br>
Asuncion - Paraguay<br>
Rm 444300 Cód 60890<br>
Tel/Fax: (595-21) 498 122/123 - (595-21) 441 606 </div></td>
  </tr>
  <tr>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


    <div class="form">
    Entre em contato
    <form>
    <select name="">
      <option selected>Selecione o escritório</option>
      <option>Campinas</option>
      <option>Curitiba</option>
      <option>Porto Alegre </option>
      <option>Rio de janeiro</option>
      <option>Santos </option>
      <option>São Paulo</option>
    </select><br>
    
    <input name="" type="text" value="Nome">
    <input name="" type="text" value="Email">
    <input name="" type="text" value="Telefone">
    <input name="" type="text" value="Mensagem" class="mensagem">
    
    
    </form>
  </div>


</div> <!-- fim container footer -->










</body>