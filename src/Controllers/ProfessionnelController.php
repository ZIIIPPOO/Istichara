<?php
class ProfessionnelController
{

    public function AjouteEmploi()
    {

        require_once __DIR__ . '/../Models/Disponibilites.php';
        require_once __DIR__ . '/../Repositories/DisponibilitesRepo.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) {

            $user_id = isset($_POST['user_id']);
            $jour_semaine = isset($_POST['jour_semaine']);
            $heure_debut = (int)$_POST['heure_debut'];
            $heure_fin = (int)$_POST['heure_fin'];
            $Active = (bool)$_POST['is_active'];
            if ($heure_debut < $heure_fin) {
                $disponibl = new Disponibilites(

                    $user_id,
                    $jour_semaine,
                    $heure_debut,
                    $heure_fin,
                    $Active
                );
                if ($disponibl) {

                    $disponiblRep = new DisponibilitesRepo();
                    $disponiblRep->create($disponibl);
                }

                $dispos = new DisponibilitesRepo();
                $dispos = $dispos->getAllDispo(1); //$_SESSION['user_id']
            }
        }

        require_once __DIR__ . '/../Views/layouts/header.php';
        require __DIR__ . '/../Views/disponibilites/EmploiForm.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

    public function editEmploi()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET)) {
            $dispoRow_id = $_GET['id'];
            if ($dispoRow_id) {
                $dispoRowData = DisponibilitesRepo::getDisById($dispoRow_id);
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) {
            $row_id = $_POST['dispoRow_id'];
            $user_id = $_SESSION['user_id'];
            $jour_semaine = isset($_POST['jour_semaine']);
            $heure_debut = isset($_POST['heure_debut']);
            $heure_fin = isset($_POST['heure_fin']);
            $Active = isset($_POST['is_active']);
            if ($heure_debut < $heure_fin) {
                $edited = new Disponibilites(
                    $user_id,
                    $jour_semaine,
                    $heure_debut,
                    $heure_fin,
                    $Active
                );
                $editedDispo = new DisponibilitesRepo();
                $editedDispo->edit($edited, $row_id);
            }
        }
        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/disponibilites/editEmploi.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }
}
