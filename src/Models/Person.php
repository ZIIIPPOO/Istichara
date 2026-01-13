<?php 

abstract class Person
{
    private $id;
    private $name;
    private $cityId;
    private $anneesExperience;
    private $tarifHoraire;

    public function getId(){return $this->id;}
    public function getName(){return $this->name;}
    public function getCityId(){return $this->cityId;}
    public function getYearsOfEXp(){return $this->anneesExperience;}
    public function getTarifHoraire(){return $this->tarifHoraire;}

    public function setId($id){$this->id = $id;}
    public function setName($name){$this->name = $name;}
    public function setCityId($cityId){$this->cityId = $cityId;}
    public function setYearsOfEXp($anneesExperience){$this->anneesExperience = $anneesExperience;}
    public function setTarifHoraire($tarifHoraire){$this->tarifHoraire = $tarifHoraire;}

}