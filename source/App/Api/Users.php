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
        if(in_array("", $data)) {
            $this->back([
                "type" => "error",
                "message" => "Preencha todos os campos"
            ], 400);
            return;
        }

        $user = new User(
            null,
            $data["name"],
            $data["email"],
            $data["password"]
        );

        $insertUser = $user->insert();

        if(!$insertUser){
            $this->back([
                "type" => "error",
                "message" => $user->getMessage()
            ], 400);
            return;
        }

        $this->back([
            "type" => "success",
            "message" => "Usuário cadastrodo com sucesso!"
        ]);

    }
}