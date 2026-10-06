<?php   
    require_once "funcionario.php";
    require_once "supervisor.php";

    $fnc = new funcionario();

    //formulario de cadastro
    $fnc->nome = "ney";
    $fnc->cpf ="40028922";
    //nao tem acesso pois esta protegido (Salario)
    //$fnc->salario = 5000.00
    $fnc->setsalario(5000);

    //$fnc->exibir dados
    $fnc->exibirfuncionario();

    //usando a função desconto 
    $fnc->setsalario(5000);
    $fnc->getsalario();
    $fnc->descontosalario(5000);
     $fnc->exibirfuncionario();
     echo "<hr>";

     $super = new supervisor();
     $super->nome = "pombo";
     $super->setsalario(7000);
     $super->exibirfuncionario();
     $super->cadastratsalario(10000);
     echo "<hr>";
     $super->exibirfuncionario();