<?php

namespace App;

class Acronym{
    public string $text;
    function helloWorld()
    {
        return "hello world";
    } 

    function acronym(string $text): string
{
    $resultado="";
    $frase = explode(" ", $text);
    if (sizeof($frase)==1){
    return "";
    }
    foreach ($frase as &$valor){     
        $resultado=$resultado.substr($valor,0,1);
        $cont=0;
        for($i=1;$i<strlen($valor);$i++){    
          if((ctype_upper($valor[1])==true)) {
               $cont+=1;
          }
          if((ctype_upper($valor[$i])==true) && ($cont==0)){
               $resultado=$resultado.$valor[$i];
               $cont+=1;
         }
      }
        $frase2= explode("-",$valor);
        unset($frase2[0]);
        foreach ($frase2 as &$valor2){
             $resultado=$resultado.substr($valor2,0,1);
        }
     }
            
return strtoupper(($resultado));    
}


    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }
} 

?>