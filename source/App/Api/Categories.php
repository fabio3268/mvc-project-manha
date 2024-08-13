<?php

namespace Source\App\Api;

class Categories extends Api
{
    public function __construct()
    {

    }

    public function insert (array $data) : void
    {
        echo "Olá, eu sou o INSERT POST CREATE";
    }

    public function getCategory (array $data) : void
    {
        echo "Olá, eu sou o GET READ";
    }

    public function update (array $data) : void
    {
        echo "Olá, eu sou o UPDATE PUT";
    }

    public function remove (array $data) : void
    {
        echo "Olá, eu sou o DELETE  ";
    }

}