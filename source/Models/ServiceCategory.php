<?php

namespace Source\Models;

use Source\Core\Model;

class ServiceCategory extends Model
{
    private $id;
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function __construct()
    {
        $this->entity = "services_categories";
    }

}