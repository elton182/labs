
			<?php include "header.php" ?>
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
						<?php

							session_start();
								
							include "logado.php";

							//ini_set('display_errors',0);
	        				require_once('lib/nusoap.php');
	        				$client = new nusoap_client('http://localhost:8080/wsa/integracao/wsdl?targetURI=urn:wsInegracao',true);

	        				// Call the SOAP method on the remote service            
	        				$par = array('cUsuario' => $_SESSION['usuario']);
	        
	        				$mensagem = "";
	        				try {
	        					$result = $client->call('getPendTypesByUser',$par);	
	        				} catch (Exception $e) {
	        					$mensagem = "Ocorreu um erro";
	        				}
	        		
	        				if (is_null($result)){
	        					$mensagem = "Ocorreu um erro";
	        				}

	        				if ($mensagem == "") {
	        					
	        				
		        				$xml = simplexml_load_string(utf8_encode($result));
		        				

						        //echo "<table class=\"table table-bordered table-hover\">";
						        echo "<table class=\"table table-striped table-bordered table-hover\" style=\"border: 1px solid; align-content: center\" \>";
						        echo "<thead>";
						        echo "<tr>";
						        echo "<th> # </th>";
						        echo "<th>Tipo Documento</th>";	  						        
						        
						        echo "</tr>";
						        echo "</thead>";
						        echo "<tbody>";
		        				
		        				foreach($xml-> ttPendRow as $item){ 
		            			//faz o loop nas tag com o nome "item" 
		            			//exibe o valor das tags que estão dentro da tag "item" 
		            			//utilizamos a função "utf8_decode" para exibir os caracteres corretamente 
		        					echo "<tr>";
		        					echo "<td><a href=\"consultadoc.php/?id=".$item ->{'num'}."\">". $item ->{'num'} . "</a><br/></td>";
		        					echo "<td><a href=\"consultadoc.php/?id=".$item ->{'num'}."\">". $item ->{'tipo'} . "</a><br/></td>";		            						            						            				
		            				echo "</tr>";
		            				
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

			</div>
			<?php include "footer.php" ?>