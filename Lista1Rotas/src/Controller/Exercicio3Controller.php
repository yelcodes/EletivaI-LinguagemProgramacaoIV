<?php


namespace Aluno\ProjetoPhp\Controller;


class Exercicio3Controller
{
    public static function exibir(){
        require_once("../src/View/exercicio3.php");
    }

    public static function exibirResultado(){
        $valor1 = $_POST['valor1'];
        if ($valor1 > 10)
          $resultado = "O valor é maior que 10";
        else if($valor1 == 10)
            $resultado = "Igual a 10";
        else
          $resultado = "O valor é menor que 10";      
        require_once("../src/View/exercicio3.php");

    }
}