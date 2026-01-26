<?php
require __DIR__.'/../Models/City.php';
require __DIR__.'/../config/database.php';
class CityController {
    private $db;
    public function __construct()
    {
        $this->db=Database::getInstance()->getConnection();
    }

    public function getAllCity()
    {
        $result=(new City)->getAll();
        require __DIR__.'/../Views/professional/Multi_form.php';
    }

    public function create()
    {
        $ext= explode('.',$_FILES['lienPdf']['name']);
        $filename=uniqid('',true).'.'.end($ext);
        move_uploaded_file($_FILES['lienPdf']['tmp_name'],__DIR__.'/../public/assets/pdf/'.$filename);
        (new Huissier)->create([$_POST['fullname'],$_POST['ville_id'],$_POST['type_actes'],$_POST['annees_experience'],$_POST['tarif_horaire'],$_POST['email'],__DIR__.'/../public/assets/pdf/'.$filename]);
    }
}