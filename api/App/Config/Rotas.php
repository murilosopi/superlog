<?php

namespace App\Config;

use App\Utils\Response;

class Rotas
{
    public function __construct()
    {
        $rotas = $this->iniciarRotas();
        $uri = $_SERVER['REQUEST_URI'];

        if (!isset($rotas[$uri])) Response::NaoEncontrado('Rota não encontrada');

        $this->executar($rotas[$uri]['controller'], $rotas[$uri]['action']);
    }

    private function iniciarRotas()
    {
        return [

            '/contato/enviar-email' => [
                'controller' => 'Contato',
                'action' => 'enviarEmail'
            ]

        ];
    }

    private function executar($nomeController, $action)
    {
        $classeController = "App\\Controllers\\{$nomeController}Controller";
        
        if (!method_exists($classeController, $action))
            Response::NaoEncontrado('Método inesxistente para o controller');
        
        $controller = new $classeController;
        $controller->$action();
    }
}
