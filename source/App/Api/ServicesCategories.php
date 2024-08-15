<?php

namespace Source\App\Api;

use Source\Models\ServiceCategory;

class ServicesCategories extends Api
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert (array $data) : void
    {
        if(!$this->userAuth){
            $this->back([
                "type" => "error",
                "message" => "Você não pode estar aqui..."
            ]);
            return;
        }

        echo "Olá, eu sou o INSERT POST CREATE";
    }

    public function getCategory (array $data) : void
    {
        $servicesCategories = (new ServiceCategory())->selectAll();
        $this->back($servicesCategories);
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