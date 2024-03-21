<?php

namespace Source\Core;

use PDO;
use PDOException;

abstract class Model
{

    protected $entity;

    private $massage;

    public function getMessage(): ?string
    {
        return $this->massage;
    }

    public function selectAll (): ?array
    {
        $conn = Connect::getInstance();
        $query = "SELECT * FROM {$this->entity}";
        return $conn->query($query)->fetchAll();
    }

    public function selectById (int $id): ?array
    {
        $conn = Connect::getInstance();
        $query = "SELECT * 
                  FROM {$this->entity}
                  WHERE id = {$id}";
        return $conn->query($query)->fetchAll();
    }
    public function insert(): ?int
    {
        $values = get_object_vars($this);// pegar os valores dos atributos e inserir em um arra
        array_shift($values);
        array_shift($values);

        foreach ($values as $key => $value){
            echo "{$value} => {$key} <br>";
            $values[$key] = is_null($value) ? "NULL" : "'{$value}'";
        }

        $valuesString = implode(",", $values);

        $conn = Connect::getInstance();
        $query = "INSERT INTO {$this->entity} VALUES ({$valuesString})";

        try {
            $result = $conn->query($query);
            $this->massage = "Registro inserido com sucesso!";
            return $result ? $conn->lastInsertId() : null;
        } catch (PDOException $exception) {
            $this->massage = "Erro ao inserir: {$exception->getMessage()}";
            return false;
        }

    }

}