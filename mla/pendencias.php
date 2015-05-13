						<?php

							//ini_set('display_errors',0);
	        				require_once('lib/nusoap.php');
	        				$client = new nusoap_client('http://localhost:8080/wsa/integracao/wsdl?targetURI=urn:wsInegracao',true);


	        				// Call the SOAP method on the remote service            
	        				$par = array('cUsuario' => $_SESSION['usuario']);
	        
	        				$mensagem = "";
	        				try {
	        					$result = $client->call('getpendbyuser',$par);	
	        				} catch (Exception $e) {
	        					$mensagem = "Ocorreu um erro";
	        				}
	        		
	        				if (is_null($result)){
	        					$mensagem = "Ocorreu um erro";
	        				}

	        				if ($mensagem == "") {
	        					
	        				
		        				$xml = simplexml_load_string(utf8_encode($result));

		        				$cont = 1;	        					        				

						        //echo "<table class=\"table table-bordered table-hover\">";
						        echo "<table class=\"table table-striped table-bordered table-hover\" style=\"border: 1px solid; align-content: center\" \>";
						        echo "<thead>";
						        echo "<tr>";
						        echo "<th> # </th>";
						        echo "<th>Tipo Documento</th>";	  
						        echo "<th>Chave</th>";
						        echo "<th>Valor</th>";
						        echo "<th>Usuário Documento</th>";
						        echo "<th></th>";
						        echo "<th></th>";
						        echo "<th></th>";
						        
						        echo "</tr>";
						        echo "</thead>";
						        echo "<tbody>";
		        				foreach($xml-> ttPendRow as $item){ 
		            			//faz o loop nas tag com o nome "item" 
		            			//exibe o valor das tags que estão dentro da tag "item" 
		            			//utilizamos a função "utf8_decode" para exibir os caracteres corretamente 
		        					echo "<tr>";
		        					echo "<td>". $cont ."</td>";
		        					echo "<td>". $item ->{'tipo'} . "<br/></td>"; 
		            				echo "<td>". $item ->{'chave'}. "<br/></td>"; 
		            				echo "<td>". $item ->{'valor'}. "<br/></td>"; 
		            				
		            				echo "<td><strong>Usuario:</strong> ".$item ->{'usuario'}."<br/></td>";
		            				echo "<td><a href=\"detalhe.php/?id=".$item ->{'nrTrans'}."\"><img src=\"public/imagens/zoom.png\" alt=\"Detalhe\"></a></td>";             				
		            				echo "<td><a href=\"#\"><img src=\"public/imagens/accept.png\" alt=\"Aprovar\"></a></td>";
		            				echo "<td><a href=\"#\"><img src=\"public/imagens/cancel.png\" alt=\"Reprovar\"></a></td>";
		            				echo "</tr>";
		            				$cont++;
		            				//echo "<br />"; 
		        				} //fim do foreach
		        				echo "</tbody>";
		        				echo '</table>';      
	        				}
	        				else
	        				{
	        					echo "<h2>".$mensagem ."</h2>";
	        				}
						?>
