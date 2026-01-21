<?php

class AdminController
{
    public function getAllNonApprouved()
    {
        require_once __DIR__ . '/../Models/Admin.php';

        $Avocat = new Avocat();
        $avocats = $Avocat->getAll();

        require_once __DIR__ . '/../Models/Huissier.php';

        $Huissier = new Huissier();
        $huissiers = $Huissier->getAll();
        

    }

}