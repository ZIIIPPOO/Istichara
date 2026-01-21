<?php

class AdminController
{
    public function getProfessionels()
    {
        require_once __DIR__ . '/../Models/Avocat.php';

        $Avocat = new Avocat();
        $avocats = $Avocat->getAllByStatus();
        foreach ($avocats as &$avocat):
        $avocat['type'] = "avocat";
        endforeach;
        unset($avocat);
        

        require_once __DIR__ . '/../Models/Huissier.php';

        $Huissier = new Huissier();
        $huissiers = $Huissier->getAllByStatus();
        foreach ($huissiers as &$huissier):
        $huissier['type'] = "huissier";
        endforeach;
        unset($huissier);

        $profDemand = array_merge($avocats, $huissiers);
        $keys = array_keys($profDemand);
        shuffle($keys);

        $professionels = [];
        foreach ($keys as $key) {
            $professionels[$key] = $profDemand[$key];
        }
        return $professionels;
    }

    public function index()
    {
        $colors = [
            'blue'   => 'bg-blue-300',
            'amber'  => 'bg-amber-300',
            'green'  => 'bg-green-300',
            'purple' => 'bg-purple-300',
            'red'    => 'bg-red-300',
            'linear1'=> 'bg-gradient-to-br from-indigo-300 to-purple-600',
            'linear2'=> 'bg-gradient-to-br from-pink-400 to-red-400'
        ];

        $professionels = $this->getProfessionels();

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/professional/dashboard.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }
    
    public function listDemandes()
    {
        $colors = [
            'blue'   => 'bg-blue-300',
            'amber'  => 'bg-amber-300',
            'green'  => 'bg-green-300',
            'purple' => 'bg-purple-300',
            'red'    => 'bg-red-300',
            'linear1'=> 'bg-gradient-to-br from-indigo-300 to-purple-600',
            'linear2'=> 'bg-gradient-to-br from-pink-400 to-red-400'
        ];

        $professionels = $this->getProfessionels();
        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/professional/AdminToutesDemandes.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

}