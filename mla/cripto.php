<?php
 /************************************************************
  **** Autor: Eduardo Marcos Fiorini *************************
  **** Data Criação: 07/10/2012 - 02:15 **********************
  **** Ultima Modificação: 18/12/2012 - 14:42 ****************
  ************************************************************/
 ?>
 
 <html>
 <body>
 
 <form action="cripto.php" method="post" enctype="multipart/form-data">
 <input type="file" name="Arquivo" id="Arquivo"><br> 
 <input type="submit" value="Enviar">
 <input type="reset" value="Apagar">
 </form>
 
 <?php
 if (isset($_FILES["Arquivo"])){
     if (!empty($_FILES["Arquivo"])) {
         
         //Upload do arquivo.
         $nome_temporario=$_FILES["Arquivo"]["tmp_name"]; 
         $nome_real=$_FILES["Arquivo"]["name"]; 
         copy($nome_temporario,"cifrado/$nome_real"); 
 
         // Chamar o arquivo com as Funções. 
         include_once("/mla/funcao.php");
         // Arquivo que irá ser Cifrado.
         $arquivo = "cifrado/$nome_real";
         // Cria a Class Codificar.
         $codificador = new Codificar();
         // Executa a função de Cifragem
         $arquivo_c = $codificador->codificador($arquivo);
 
         // Se gerar erro apresente o erro.
         if($codificador->erro()){
             $erros=$codificador->pegar_erro();
             echo "<pre>";
             print_r($erro);
         }
         // Se não apresente o resultado.
         else {
             print("<p>O arquivo <u>$nome_real</u> foi cifrado com sucesso, Para testar a cifragem acesse: <a href='$arquivo_c'><strong>$arquivo_c</strong></a></p>");
         }
     }
 }
 ?>
 </body>
 </html> 