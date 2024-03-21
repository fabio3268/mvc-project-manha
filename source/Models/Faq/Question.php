<?php

namespace Source\Models\Faq;

use Source\Core\Connect;
use Source\Core\Model;

class Question extends Model {
    protected $id;
    protected $idType;
    protected $question;
    protected $answer;

    public function __construct(
        int $id = null,
        int $idType = null,
        string $question = null,
        string $answer = null
    )
    {
        $this->id = $id;
        $this->idType = $idType;
        $this->question = $question;
        $this->answer = $answer;
        $this->entity = "questions";

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getIdType(): ?int
    {
        return $this->idType;
    }

    public function setIdType(?int $idType): void
    {
        $this->idType = $idType;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): void
    {
        $this->question = $question;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): void
    {
        $this->answer = $answer;
    }


}
