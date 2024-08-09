<?php

namespace Source\App\Api;

use Source\Models\Service;

class Services extends Api
{
    public function __construct()
    {

    }

    public function getById(array $data)
    {
        $service = new Service();
        $serviceObj = $service->listById($data["serviceId"]);
        $this->back(array($serviceObj));
    }

    public function listByCategory (array $data)
    {
        $service = new Service();
        $listServices = $service->listByCategory($data["categoryId"]);
        $this->back($listServices);
    }

    public function update(array $data)
    {
        var_dump($data);
    }
}