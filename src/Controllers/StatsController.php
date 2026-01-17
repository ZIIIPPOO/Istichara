<?php

class StatsController 
{
    public function index()
    {
        require_once __DIR__ . '/../Models/Avocat.php';
        require_once __DIR__ . '/../Models/Huissier.php';
        require_once __DIR__ . '/../Models/City.php';

        $avocat = new Avocat();
        $avocats = $avocat->getAll();
        $totalAvocats = count($avocats);

        $huissier = new Huissier();
        $huissiers = $huissier->getAll();
        $totalHuissiers = count($huissiers);

        $city = new City();
        $cities = $city->getAll();

        $topThree = $avocat->getTopThree();
        // var_dump($topThree);
        // return;

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/stats/index.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }
}