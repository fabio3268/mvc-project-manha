<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Core\Model;

class Service extends Model
{
    private $id;
    private $categoryId;
    private $name;
    private $description;
    private $message;

    public function __construct(?int $id, int $categoryId, string $name, string $description)
    {
        $this->id = $id;
        $this->categoryId = $categoryId;
        $this->name = $name;
        $this->description = $description;
        $this->entity = "services";
    }

    public function listById (int $id)
    {
        $query = "SELECT services.id, services.name, services.description, 
                  services_categories.name as 'category_name'
                  FROM services
                  INNER JOIN services_categories ON services.service_category_id = services_categories.id
                  WHERE services.id = :service_id";

        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam("service_id",$id);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function listByCategory (int $categoryId): array
    {
        $query = "SELECT services.id, services.name, services.description, 
                  services_categories.name as 'category_name'
                  FROM services
                  INNER JOIN services_categories ON services.service_category_id = services_categories.id
                  WHERE services_categories.id = :category_id";
        $conn = Connect::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->bindParam("category_id", $categoryId);
        $stmt->execute();
        return $stmt->fetchAll();

    }

}