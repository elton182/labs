						

						<?php				
							session_start();

							include "header.php";

							echo "<div class=\"content\">";

							include "logado.php";

							function form_text($label, $value){

							echo "<tr>";
								echo "<td>";
      							echo "".$label."";      							
      							echo "</td>";
      							echo "<td>";
        				    	echo "".$value."";
        				    	echo "</td>";
							echo "</tr>";      					    	
    						

							}

							function form_text2($label, $value, $value2){

							echo "<tr>";
								echo "<td>";
      							echo "".$label."";
      							echo "</td>";
      							echo "<td>";
        				    	echo "".$value."-".$value2.  "";
      					    	echo "</td>";
							echo "</tr>";   
    						

							}
						
	        				require_once('lib/nusoap.php');
	        				$client = new nusoap_client('http://localhost:8080/wsa/integracao/wsdl?targetURI=urn:wsInegracao',true);

	        				// Call the SOAP method on the remote service            
	        				$par = array('iNrTrans' => $_GET["id"]);
	        				
	       
	        				$mensagem = "";

	        				
	        				try {
	        					$result = $client->call('getdetailpendbyid',$par);		        					
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

	        				
	        				echo "<div class=\"well bs-component\">";
	        				
	        				
	        			    echo "<legend>Detalhe da Pendência</legend>";	
	        			    echo "</div>";

	        			    
	        			    echo "<table class=\"table table-striped table-bordered\">";
	        			    
							//echo "<form class=\"form-inline\">";
  								form_text("Número Trans:", $xml->ttDetalheRow->{'nrTrans'});	        	
  							

  							
								form_text2("Dt Geração:",$xml->ttDetalheRow->{'dtGeracao'},$xml->ttDetalheRow->{'hrGeracao'});	
							
							//echo "</form>";	


							

							//echo "<form class=\"form-inline\">";					
							form_text2("Empresa:",$xml->ttDetalheRow->{'epCodigo'},$xml->ttDetalheRow->{'nomeEmpresa'});													
							form_text2("Estabel:",$xml->ttDetalheRow->{'codEstabel'},$xml->ttDetalheRow->{'nomeEstabel'}); 
							//echo "</form>";	

																			

							//echo "<form class=\"form-inline\">";					
							form_text("Usuar Transação:",$xml->ttDetalheRow->{'usuarTrans'});  
							form_text("Usuar Documento:",$xml->ttDetalheRow->{'usaurDoc'});    
							//echo "</form>";	

							//form_text("Aprovador:",$xml->ttDetalheRow->{'aprovador'});   							

							

							//echo "<form class=\"form-inline\">";					
							form_text("Valor:",$xml->ttDetalheRow->{'valor'});       
							form_text("Moeda:",$xml->ttDetalheRow->{'moeda'});      
							//echo "</form>";	

							

							//echo "<form class=\"form-inline\">";					
							form_text("Lotação Transação:",$xml->ttDetalheRow->{'lotacaoTrans'});
							form_text("Lotação Documento:",$xml->ttDetalheRow->{'lotacaoDoc'});  							
							//echo "</form>";	

							//echo "<form class=\"form-inline\">";					
							
							form_text("Chave:",$xml->ttDetalheRow->{'chave'});       

							//echo "</form>";	

							//echo "<form class=\"form-inline\">";					
							form_text("Motivo:",$xml->ttDetalheRow->{'motivo'});      					
							form_text("Histórico:",$xml->ttDetalheRow->{'historico'});
							//echo "</form>";	   

							
							echo "</table>";			
							
							
							
	        				//var_dump($xml);

	        				echo "</div>";
						?>

			</div>
			<div class="footer">
				Desenvolvido por...
			</div>
		</div>

	</body>

</html>		
