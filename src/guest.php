<?php declare(strict_types = 1);


namespace nfq;


class guest
{
    private $name;
    private $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getSurname():string
    {
        return $this->surname;
    }

    public function __toString()
    {
        return $this->name . ' ' . $this->surname;
    }

}