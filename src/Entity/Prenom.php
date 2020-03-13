<?php


namespace App\Entity;


class Prenom
{

    private $prenom;
    private $length;
    private $description;


    public function __construct(string $prenom = 'Pierre',int $length=0, string $description ="")
    {
        $this->prenom=$prenom;
        $this->length=$length;
        $this->description=$description;
    }

    public function getLength(): int
    {
       return $this->length;
    }

    public function setLength(int $length)
    {
        $this->length = $length;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }


    public function getSpecification()
    {
        return sprintf(
            '%s %s à %d caractères',
            $this->prenom,
            $this->description,
            $this->length
        );
    }

}