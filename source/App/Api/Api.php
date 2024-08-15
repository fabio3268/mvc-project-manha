<?php

namespace Source\App\Api;

use Source\Core\TokenJWT;

class Api
{
    protected $headers;
    protected $userAuth = false;

    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');
        header('Access-Control-Allow-Origin: *'); // Permitir todas as origens
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS'); // Métodos permitidos
        header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, token'); // Cabeçalhos permitidos
        header('Access-Control-Allow-Credentials: true'); // Permitir credenciais
        $this->headers = getallheaders();

        if(!empty($this->headers["token"]) || isset($this->headers["token"])){
            $jwt = new TokenJWT();
            if($jwt->verify($this->headers["token"])){
                $this->userAuth = $jwt->token->data;
            }
        }
    }

    protected function back (array $response, int $code = 200) : void
    {
        http_response_code($code);
        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

}