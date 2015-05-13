<?php
 /************************************************************
  **** Autor: Eduardo Marcos Fiorini *************************
  **** Data Criação: 07/10/2012 - 02:15 **********************
  **** Ultima Modificação: 18/12/2012 - 14:42 ****************
  ************************************************************/
 ?>
 
 <?php
 // Nivel 0 não Cifra nada.
 // Nivel 10 é o Nivel Padrão Recomendado.
 // Nivel 30 é o Nivel Maximo acima de 30 pode ocorrer erros e o arquivo ficar muito grande.  
 define("NIVEL_CIFRAGEM", 10);
 
 Class Codificar {
     private $arquivo="";
     private $prefixo="cod";
     private $arquivo_c="";
     private $erro=array();
 
 // Função de Construção.
 
     public function __construct($prefixo=""){
         if (trim($prefixo)!="") {
             $this->prefixo=$prefixo;
         }
     }
 
 // Função de Codificação do Arquivo.
 
     public function codificador($arquivo) {
         if (trim($arquivo)=="") {
             $this->erro[]="Nome do arquivo não pode ficar em branco na função ".__FUNCTION__;
             return false;
         }
         if (!is_readable($arquivo)){
             $this->erro[]="Falha ao abrir o arquivo $arquivo na função ".__FUNCTION__;
             return false;
         }
         $this->arquivo=trim($arquivo);
 
         $ext=end(explode(".",$this->arquivo));
         $pfx=strrpos($this->arquivo,".");
         $arquivo=substr($this->arquivo,0,$pfx);
         $this->arquivo_c=$arquivo_c=$arquivo."_".$this->prefixo.".".$ext;
 
         if(($fp=fopen($arquivo_c,"w+"))===false){
             $this->erro[]="Falha ao abrir o arquivo $arquivo_c ao escrever a função ".__FUNCTION__;
             return false;
         }
         else {
             fwrite($fp,"<?php \r\n");
             $linha=file_get_contents($this->arquivo);
             
             $linha=str_replace("<?php","",$linha);
             $linha=str_replace("<?","",$linha);
             $linha=str_replace("?>","",$linha);
             $linha=trim($linha);
             $linha=$this->codificar_string($linha,NIVEL_CIFRAGEM);
             $linha.="\r\n";
             fwrite($fp,$linha);
             fwrite($fp,"?>");
         }
         fclose($fp);
         return $arquivo_c;
     }
     
 // Função para codificar o conteúdo do arquivo antes de escrevê-lo.
 
     private function codificar_string($string, $levels=""){
         if (trim($levels)=="") {
             $levels=rand(1,9);
         }
         $levels=(int) $levels;
         for ($i=0; $i<$levels;$i++){
             $string=base64_encode($string);
             $string='eval(base64_decode("'.$string.'"));';
         }
         return $string;
     }
     
 // Função para retornar todos os erros encontrados.
 
     public function pegar_erro(){
         return $this->erro;
     }
 
 // Função para descobrir se havia alguma erro.
 
     public function erro(){
         if (count($this->erro)>0) {
             return true;
         }
         else {
             return false;
         }
     }
 }
 ?> 