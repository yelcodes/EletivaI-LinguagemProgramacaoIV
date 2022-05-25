<?php

    require_once __DIR__.'/vendor/autoload.php';

    //Aqui a gente recupera o que o usuário digitou e qual método HTPP ele utilizou

    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER["PATH_INFO"];

    //Instânciar classe Router
    
    $router = new \Aluno\ProjetoPhp\Router($method, $path);

    //Adicionar as rotas válidas abaixo

   

    $router->get('/exemplo1', '\Aluno\ProjetoPhp\Controller\ExercicioController::exibir');

    $router->post('/resultado1','\Aluno\ProjetoPhp\Controller\ExercicioController::exibirResultado');


    //Adicionar as rotas válidas acima

    $result = $router ->handler();

    if (!$result){
        http_response_code(404);
        echo "Página não encontrada";
        die();
    }

    echo $result($router->getParams());