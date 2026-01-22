<?php

class HuissierController
{

    public function profile()
    {
        require_once __DIR__ . '/../Models/Huissier.php';

        $id = $_SESSION['user']['id'];

        $Huisier = new Huissier();
        $huissier = $Huisier->profile($id);
        
        require_once __DIR__ . '/../Repositories/DisponibilitesRepo.php';

        $Disponibilite = new DisponibilitesRepo();
        $disponibilites = $Disponibilite->getAllDispoHuissier($id);

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/huissier/profile.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

    public function index()
    {
        require_once __DIR__ . '/../Models/Huissier.php';

        $huissier = new Huissier();
        $huissierss = $huissier->getAll();
        $total = count($huissierss);

        $resultPerPage = 5;

        $totalPages = ceil($total / $resultPerPage);
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $start = ($page - 1) * $resultPerPage;
        $huissiers = $huissier->getAllPagination($start, $resultPerPage);

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/huissier/index.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../Models/Huissier.php';
        require_once __DIR__ . '/../Models/City.php';
        
        $cityy = new City();
        $cities = $cityy->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $huissier = new Huissier();

            $huissier->setName($_POST['nom']);
            $huissier->setYearsOfEXp($_POST['annees_experience']);
            $huissier->setTypeActes($_POST['types-actes']);
            $huissier->setTarifHoraire($_POST['tarif_horaire']);

            $cityId = $cityy->getIdByName($_POST['ville']);
            $huissier->setCityId($cityId);

            $huissier->create();

            header('Location: /huissiers');
            exit();
        }
        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/huissier/create.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

    public function edit()
    {
        require_once __DIR__ . '/../Models/Huissier.php';
        require_once __DIR__ . '/../Models/City.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $huissier = new Huissier();
            $cityy = new City();
            $result = $huissier->getById($id);

            $name = $result['name'];
            $villeId = $result['city_id'];
            $city = $cityy->getNameById($villeId);
            $anneesExp = $result['annees_experience'];
            $tarifHoraire = $result['tarif_horaire'];
            $typeOfActes = $result['type_actes'];

            $cities = $cityy->getAll();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $huissier = new Huissier();
            $id = $_GET['id'];

            $huissier->setId($id);
            $huissier->setName($_POST['nom']);
            $huissier->setYearsOfEXp($_POST['annees_experience']);
            $huissier->setTypeActes($_POST['types-actes']);
            $huissier->setTarifHoraire($_POST['tarif_horaire']);

            $cityId = $cityy->getIdByName($_POST['ville']);
            $huissier->setCityId($cityId);

            $huissier->update();

            header('Location: /huissiers');
            exit();
        }

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/huissier/edit.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

    public function delete()
    {
        require_once __DIR__ . '/../Models/Huissier.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $huissier = new Huissier();
            $huissier->delete($id);
            header('Location: /huissiers');
            exit();
        }
    }
}