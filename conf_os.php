<?php
	require_once('session_start.php');
	require_once('cod_barra_os.php');
	$os = 'OS000001';
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>OS Fácil</title>

        <!--javascript		-->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/fazerRequisicao.js"></script>

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" rel="stylesheet" >
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" rel="stylesheet" >
        <link href="css/estilos.css" type="text/css"  rel="stylesheet">
	</head>

	<body>

		
	    	<div class="col-md-2">
	    		<h6>OS Nº: <?= $_SESSION['usuario']?></h6>
	    		<?=  geraCodigoBarra($os); ?>
	    	</div>   	
	    		
	    		<div class="col-md-8">	

	    			<h4 align="center">
	    				Ordem de Serviço
	    			</h4>
	    			<h5 align="center">Assistência Técnica</h5>
	    			
	    			<hr />
	    			<p><h6>O contratante: <?= $_SESSION['usuario'] ?> CPF: <?= $_SESSION['usuario'] ?> Endereço: <?= $_SESSION['usuario'] ?>,<?= $_SESSION['usuario'] ?> CEP: <?= $_SESSION['usuario'] ?> Bairro: <?= $_SESSION['usuario'] ?> Cidade:<?= $_SESSION['usuario'] ?> UF: <?= $_SESSION['usuario'] ?> Telefone: <?= $_SESSION['usuario'] ?> Celular: <?= $_SESSION['usuario'] ?></h6></p>
	    			<!--depois lancar variaveis em tudo-->
	    			<p><h6><b>Contratada: Assistencia técnica Ltda- Av Principal 666 - Centro - SPA -SC CNPJ: 11.179.931/0001-15 Telefone: (48) 991719504</b></h6></p>
	    			
	    			

	    			<p><h6>Serviço a ser realizado: <?= $_SESSION['servico'] ?></h6></p>
	    			
	    			

	    			<p><h6>O Contratante requer o procedimento de backup, tais como fotos e contatos, pelo valor de R$ <?= $_SESSION['valor'] ?>?</h6></p>
	    			<p><h6>(X)Sim ( )Não</h6></p>
	    			<p><h6>Salientamos bem, caso seja negativa a escolha do cliente, fica o meso ciente que a contratada não se responsabiliza por perda de dados durante quaisquer procedimentos de assistência técnica. </h6></p>
	    			<hr />
	    			
	    			<div class="container h6">

	    			<p><b>Check List de funcionamento do Dispositivo:</b></p>	
	    			
	    			
	    			<div class="col-md-3 table-responsive-md" style="float:left">
	    			<table class="table-striped" border=3 cellspacing=0 cellpadding=0 bordercolor="666633">
						<tbody align="center"> 

								<tr>

									<th>Entrada</th><th><center>Item</center></th><th>Saida</th>
								</tr>

						

						
						
						<tr>
						<td></td><td>Ligando</td><td></td>
						</tr>

						<tr>
						<td></td><td>Conector usb</td><td></td>
						</tr>

						<tr>
						<td></td><td>Display</td><td></td>
						</tr>

						<tr>
						<td></td><td>Touch</td><td></td>
						</tr>

						<tr>
						<td></td><td>Touch ID</td><td></td>
						</tr>

						<tr>
						<td></td><td>Botão Power</td><td></td>
						</tr>

						<tr>
						<td></td><td>Volume +</td><td></td>
						</tr>

						<tr>
						<td></td><td>Volume -</td><td></td>
						</tr>

						
					</tbody>
					</th>
					</tr>
					</tfoot>
					</table>
					</div>				

					<div class="col-md-3 table-responsive-md" style="float:left">
	    			<table class="table-striped" border=3 cellspacing=0 cellpadding=0 bordercolor="666633">
						<tbody align="center"> 
								<tr>

									<th>Entrada</th><th><center>Item</center></th><th>Saida</th>
								</tr>

						
						
						<tr>
						<td></td><td>Botão Home</td><td></td>
						</tr>

						<tr>
						<td></td><td>Vibra Call</td><td></td>
						</tr>

						<tr>
						<td></td><td>Cam traseira</td><td></td>
						</tr>

						<tr>
						<td></td><td>Flash traseiro</td><td></td>
						</tr>

						<tr>
						<td></td><td>Cam frontal</td><td></td>
						</tr>

						<tr>
						<td></td><td>Flash frontal</td><td></td>
						</tr>

						<tr>
						<td></td><td>Mic de video</td><td></td>
						</tr>

						<tr>
						<td></td><td>Mic ligação</td><td></td>
						</tr>

						
						</tbody>
						</th>
						</tr>
						</tfoot>
						</table>
						</div>					

				<div class="col-md-3 table-responsive-md" style="float:left">
	    			<table class="table-striped" border=3 cellspacing=0 cellpadding=0 bordercolor="666633">
						<tbody align="center"> 
								<tr>

									<th>Entrada</th><th><center>Item</center></th><th>Saida</th>
								</tr>

						
						
						
						<tr>
						<td></td><td>Sensor prox</td><td></td>
						</tr>

						<tr>
						<td></td><td>Viva voz</td><td></td>
						</tr>

						<tr>
						<td></td><td>Auricular</td><td></td>
						</tr>

						<tr>
						<td></td><td>Fone de ouvido</td><td></td>
						</tr>

						<tr>
						<td></td><td>Rede de dados</td><td></td>
						</tr>

						<tr>
						<td></td><td>WI-FI</td><td></td>
						</tr>

						<tr>
						<td></td><td>%Bateria</td><td></td>
						</tr>

						<tr>
						<td></td><td>Outros</td><td></td>
						</tr>

						
						</tbody>
						</th>
						</tr>
						</tfoot>
						</table>
						</div>
			
		</div>

					<p class="h6">O contratante está ciente que os itens assinalados acima no check list como NF(não estão funcionando) e, em caso de impossibilidade da realização do checklis por motivo <?php echo '____'?>, a contratada não se responsabiliza por quaisquer problemas que venham a se apresentar no dispositivo ou falta de peças e componentes. O contratante autoriza a realizar todos os serviços necessários e troca de peças em seu dispositivo até o valor de R$ <?php echo '____'?>. Caso supere esse valor, a contratada solicitará a aprovação do orçamento para conclusão dos serviços a serem realizados.</p>
					<br />
					<p class="h6">
						<span class="esquerda">São Pedro de Alcântara, <?php echo $date ?></span>

						<span class="direita">_______________________________</span>
					</p>							
					<br />
					<p class="h6">
						<span class="direita">
							<?= 'Asinatura do cliente'?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
					</p>
					<br />
					<br />
					
					<div class="p-3 mb-2 bg-primary text-white h6" align="center">
					Laudo, Serviço e orçamento:</div>
					

					<table class="table h6" border=3 cellspacing=0 cellpadding=0 bordercolor="#000000">
						<tbody class="h6">

								<tr>

									<th><center> Técnico: <?= $_SESSION['tecnico'] ?></center> </th>
									
								</tr>
							<tr>
								<td> Entrada: <?php echo $date2 ?> </td>
							</tr>
							<tr>
								<td>Problemas identificados: </td>
							</tr>

							<tr>
								<td>Orçamento: </td>
							</tr>

							<tr>
								<td>Serviço/Peças: </td>
							</tr>

							<tr>
								<td>Prazo: ____/____/________</td>
							</tr>

							<tr>
								<td>Valor: R$</td>
							</tr>
						</tbody>
						
					</table>	
					
					<p>Contratante aprova e autoriza pessoalmente ou por ______________________ a realização dos serviços relacionados neste orçamento definitivo achima: (  ) Sim (  ) Não.</p>
					<br />
					<p class="h6"><span class="direita">_______________________________</span></p>
					<br />
					<p class="h6"><span class="direita"><?= 'Assinatura do cliente' ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

					<br />
					<hr size="1" style="border:1px dashed black;">



					<p><b>Retirei</b> meu aparelho em ____/____/________, declarando para todos os devidos fins que todos os ítens do check list de entrada e saida, foram testados e encontram -se funcinando normalmente ou conforme parecer técnico, bem como estou ciente que a garantia legal possui o periodo de 90 (noventa) dias abrange tão somente o serviço realizado e as peças trocadas. Podendo o cliente consultar o exemplar do código do consumidor para sanar suas duvidas.</p>

					<br />
					<p class="h6"><span class="direita">_______________________________</span></p>
					<br />
					<p class="h6"><span class="direita"><?= 'Assinatura do cliente' ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p></h6>





	    		
	    	
		</div>




			<div align="center" class="col-md-2">
				
	    		<button id="imprimir" class="btn btn-primary" >Imprimir</button>
			</div>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>