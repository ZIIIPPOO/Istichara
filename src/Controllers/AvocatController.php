<?php

class AvocatController
{
    public function index()
    {
        require_once __DIR__ . '/../Models/Avocat.php';

        $avocat = new Avocat();
        $avocatss = $avocat->getAll();
        $total = count($avocatss);

        $resultPerPage = 5;

        $totalPages = ceil($total / $resultPerPage);
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $start = ($page - 1) * $resultPerPage;
        $avocats = $avocat->getAllPagination($start, $resultPerPage);
        // var_dump($avocats);
        // return;

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/avocat/index.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

    public function profile()
    {
        require_once __DIR__ . '/../Models/Avocat.php';

        $id = $_SESSION['user']['id'];

        $Avocat = new Avocat();
        $avocat = $Avocat->profile($id);

        require_once __DIR__ . '/../Repositories/DisponibilitesRepo.php';

        $Disponibilite = new DisponibilitesRepo();
        $disponibilites = $Disponibilite->getAllDispoAvocat($id);

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/avocat/profile.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../Models/Avocat.php';
        require_once __DIR__ . '/../Models/City.php';

        $cityy = new City();
        $cities = $cityy->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $avocat = new Avocat();

            // var_dump($_POST);
            $avocat->setName($_POST['nom']);
            $avocat->setYearsOfEXp($_POST['annees_experience']);
            $avocat->setSpecialites($_POST['specialites']);
            $avocat->setTarifHoraire($_POST['tarif_horaire']);
            $avocat->setConsultationEnligne($_POST['consultation_en_ligne']);
            // 
            $cityId = $cityy->getIdByName($_POST['ville']);
            $avocat->setCityId($cityId);
            // echo '<pre>';
            // echo $cityId;
            // 
            $avocat->create();

            header('Location: /avocats');
            exit();
        }
        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/avocat/create.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }
    public function edit()
    {
        require_once __DIR__ . '/../Models/Avocat.php';
        require_once __DIR__ . '/../Models/City.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $avocat = new Avocat();
            $result = $avocat->getById($id);
            $cityy = new City();
            // var_dump($result);
            $name = $result['name'];
            $villeId = $result['city_id'];
            $city = $cityy->getNameById($villeId);
            // echo $city;
            $anneesExp = $result['annees_experience'];
            $tarifHoraire = $result['tarif_horaire'];
            $consultationEnLigne = $result['consultation_en_ligne'];
            $specialites = $result['specialites'];
            // echo "<pre>";
            $cities = $cityy->getAll();
            // echo $cities[1]['name']
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $avocat = new Avocat();

            // var_dump($_POST);
            $id = $_GET['id'];

            // echo $id;
            // return;

            $avocat->setId($id);
            $avocat->setName($_POST['nom']);
            $avocat->setYearsOfEXp($_POST['annees_experience']);
            $avocat->setSpecialites($_POST['specialites']);
            $avocat->setTarifHoraire($_POST['tarif_horaire']);
            $avocat->setConsultationEnligne($_POST['consultation_en_ligne']);
            // 
            $cityId = $cityy->getIdByName($_POST['ville']);
            $avocat->setCityId($cityId);
            // echo '<pre>';
            // echo $cityId;
            // 
            $avocat->update();

            header('Location: /avocats');
            exit();
        }

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/avocat/edit.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }
    public function delete()
    {
        require_once __DIR__ . '/../Models/Avocat.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $avocat = new Avocat();
            // var_dump($id);
            // return;
            $avocat->delete($id);
            header('Location: /avocats');
            exit();
        }
    }
}
