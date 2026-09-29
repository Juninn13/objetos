<?php   
    class carro {
        public $modelo;
        public $ligado=0;
        public $captanque;
        public $tanque;
        
        public function ligar(){
            if($this->ligado==0){
                $this->ligado=1;
                
            }
        }

        public function desligar(){
            if($this->ligado==0){
                echo "<br>desligando carro ...<br>";
            } else {
                $this->ligado = 0;
                echo "<br>carro desligado";
            }
        }

        public function abastecer(){

        }

        //metódo para exibir o modelo. $This-> exibir modelo da classe
        public function exibir(){
            echo "modelo:".$this->modelo;
        }

        public function exibirstatus(){
            echo "<br>ligado?<br>";
            if($this->ligado==0){
                echo "Desligado";
            } else {
                echo "Ligado.";
            }
        }
        
    }