<?php
    namespace PHP\Modelo\DAO; 
    
    class Conexao{
        public function Conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','PHP');
                if($conn){
                    return $conn;
                }
                echo "<br>|----------NÃO DEU BOM CZ!----------|";
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do conectar
    }//FIm da Classe

?>