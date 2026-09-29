<?php   

    require_once "carro.php";

    //váriavel do lado esquerdo e o meu objeto, ao lado direito a criação
    $fusca = new carro();
    $gtr34 = new carro();

    //indicar o modelo e o valor
    $fusca->modelo = "1300";
    $gtr34->modelo = "r-34";

    //apontar oque quero saber sobre o modelo
    //echo "modelo",$fusca->modelo;
    //echo "modelo"

    $fusca->ligar();
    $fusca->exibirstatus();
    $fusca->desligar();
   //
    $fusca->exibirstatus();