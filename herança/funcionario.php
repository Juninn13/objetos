<?php  

    //indicar herança
    require_once "pessoa.php";
    class funcionario extends pessoa{

    //salario protegido
    //protected $salario;
    private $salario;
    public $funcao;

    public function exibirfuncionario(){
        $this->exibirdados();
        $this->print($this->salario);

    }

    //dando parametro ao salario 
    public function setsalario($salario){
        if($this->salario<$salario){
            $this->salario = $salario;
        } else {
            echo "alteração de salario não permitida para valor menor";
        }
    }

    public function descontosalario($desconto){
        if($desconto<$this->salario){
            $this->salario = $this->salario - $desconto;
        }
    }
    //retorna salario
    public function getsalario(){
        $this->print($this->salario);
    }

    }