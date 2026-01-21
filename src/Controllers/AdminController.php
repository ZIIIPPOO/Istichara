<?php

class AdminController
{
    public function getAllNonApprouved()
    {
        require_once __DIR__ . '/../Models/Avocat.php';

        $Avocat = new Avocat();
        $avocats = $Avocat->getAllByStatus();

        require_once __DIR__ . '/../Models/Huissier.php';

        $Huissier = new Huissier();
        $huissiers = $Huissier->getAllByStatus();

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/professional/dashboard.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

}