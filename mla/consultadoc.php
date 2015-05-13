
			<?php				
				include "header.php" 
			?>

			<div class="content">
				<!--
				<script type="text/javascript">
					var w = window,
					    d = document,
					    e = d.documentElement,
					    g = d.getElementsByTagName('body')[0],
					    x = w.innerWidth || e.clientWidth || g.clientWidth,
					    y = w.innerHeight|| e.clientHeight|| g.clientHeight;
					alert(x + ' × ' + y);
				</script>
				-->
			<h1 class="title">Pendencias de Aprovação</h1>
			<div class="content">

						<?php				

							session_start();
						
							include "logado.php";
							
							//session_start();
							//ini_set('display_errors',0);
	        				require_once('lib/nusoap.php');
	        				$client = new nusoap_client('http://localhost:8080/wsa/integracao/wsdl?targetURI=urn:wsInegracao',true);

	        				// Call the SOAP method on the remote service            
	        				$mensagem = "";
	        				try {
	        					$par = array('cUsuario' => $_SESSION['usuario'],
	        							 'cDoc' => $_GET["id"]);	        				
	        				} catch (Exception $e) {
	        					$mensagem = "Documento inválido!";
	        				}	        					       	        		
	        				
	        				try {
	        					$result = $client->call('getpendbyuserbyid',$par);		        					
	        				} catch (Exception $e) {
	        					$mensagem = "Ocorreu um erro";	        					
	        				}
	        		
	        				if (is_null($result)){
	        					$mensagem = "Ocorreu um erro";
	        				}

	        				if ($mensagem == "") {
	        						        				
		        				$xml = simplexml_load_string(utf8_encode($result));		        				    					        		
						        
	        				}
	        				else
	        				{
	        					echo "<h2>".$mensagem ."</h2>";
	        				}
	        				
		        				$cont = 1;	        					        				

						        //echo "<table class=\"table table-bordered table-hover\">";
						        echo "<table class=\"table table-striped table-bordered table-hover\" style=\"border: 1px solid; align-content: center\" \>";
						        echo "<thead>";
						        echo "<tr>";
						        echo "<th> # </th>";						        
						        echo "<th>Detalhe Documento</th>";						        
						        
						        echo "<th></th>";
						        echo "<th></th>";
						        echo "<th></th>";
						        
						        echo "</tr>";
						        echo "</thead>";
						        echo "<tbody>";

						        print($xml);
		        				foreach($xml-> ttPendRow as $item){ 
		            			//faz o loop nas tag com o nome "item" 
		            			//exibe o valor das tags que estão dentro da tag "item" 
		            			//utilizamos a função "utf8_decode" para exibir os caracteres corretamente 
		        					echo "<tr>";
		        					echo "<td>". $cont ."</td>";		        					
		            				echo "<td><strong>Documento:</strong> ". $item ->{'chave'}. "<br/>"; 
		            				
		            				echo "<strong>Valor:</strong> ". $item ->{'valor'}. "<br/>"; 
		            				
		            				echo "<strong>Usuario:</strong> ".$item ->{'usuario'}."<br/></td>";
		            				echo "<td><a href=\"/mla/detalhe.php/?id=".$item ->{'nrTrans'}."\"><img src=\"/mla/public/imagens/zoom.png\" alt=\"Detalhe\"></a></td>";             				
		            				echo "<td><a href=\"#\"><img src=\"/mla/public/imagens/accept.png\" alt=\"Aprovar\"></a></td>";
		            				echo "<td><a href=\"#\"><img src=\"/mla/public/imagens/cancel.png\" alt=\"Reprovar\"></a></td>";
		            				echo "</tr>";
		            				$cont++;
		            				//echo "<br />"; 
		        				} //fim do foreach
		        				echo "</tbody>";
		        				echo '</table>';      

	        				//var_dump($xml);
						?>
			</div>
			<?php include "footer.php" ?>