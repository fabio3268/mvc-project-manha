<?php

namespace Source\App\Api;

use Source\Models\User;

class Users extends Api
{
    public function listUsers ()
    {
        $users = new User();
        $this->back($users->selectAll());
    }

    public function createUser (array $data)
    {
        echo "Criando Usuário";
        var_dump($data);
    }
}