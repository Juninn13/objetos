<?php  

    class pessoa {

        //atributos
        public $nome;
        public $cpf;
        
        //metodos publicos
        public function exibirDados(){
            $this->print($this->nome);
            $this->print($this->cpf);
        }

        public function print($dados){
            echo "<br>".$dados."<br>";
        }
    }