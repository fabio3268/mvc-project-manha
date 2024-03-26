<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{
    private $view;

public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
    }

    public function home ()
    {
        //echo "<h1>Eu sou a Home...</h1>";
        echo $this->view->render("home",[]);
    }

    public function contact ()
    {
        echo $this->view->render("contact",[]);
        //echo "<h1>Olá, eu sou o Contato...</h1>";
    }

    public function location ()
    {
        //echo "<h1>Eu sou a Localização</h1>";
        echo $this->view->render("location",[]);
    }

    public function cart(): void
    {
        echo "<h1>Olá, eu sou o carrinho de compras...</h1>";
    }

    public function services(): void
    {
        echo "<h1>Olá, eu sou os serviços</h1>";
    }

    public function error (array $data)
    {
        var_dump($data);
    }

}