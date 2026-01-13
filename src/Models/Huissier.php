<?php

class Huissier extends Person
{
    private $typeActes;

    public function getId(){return $this->typeActes;}

    public function setId($typeActes){$this->typeActes = $typeActes;}
}