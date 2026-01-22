<?php
require_once __DIR__ . '/../Models/Dashboard.php';
class DashboardController
{

    public function index()
    {
        $dashboard = new Dashboard();


        // var_dump($dashboard->getHourOfWork());

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/dashboard/stats.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }
}
