<?php

class Avocat extends Person
{
    private $specialites;
    private $consultationEnLigne;

    public function getId(){return $this->specialites;}
    public function getConsultationEnligne(){return $this->consultationEnLigne;}

    public function setId($specialites){$this->specialites = $specialites;}
    public function setConsultationEnligne($consultationEnLigne){$this->consultationEnLigne = $consultationEnLigne;}
}