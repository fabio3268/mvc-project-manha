<?php

namespace Source\App\Api;

class Api
{
    protected $headers;

    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');
        $this->headers = getallheaders();
    }

    protected function back (array $response, int $code = 200) : void
    {
        http_response_code($code);
        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

}