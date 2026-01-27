<?php

class ReservationController
{
    public function index()
    {
        require_once __DIR__ . '/../Models/Reservation.php';
        $reservation = new Reservation();
        // if($_SESSION['role'] === 'client') {
        //     // Client sees their own reservations
        $reservations = $reservation->getByClientId(1);
        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/reservations/client_index.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
        // } 
        // else if($_SESSION['role'] === 'avocat' || $_SESSION['role'] === 'huissier') {
        //     // Professional sees their reservation requests
        // $reservations = $reservation->getByProId(4);
        // require_once __DIR__ . '/../Views/layouts/header.php';
        // require_once __DIR__ . '/../Views/reservations/index.php';
        // require_once __DIR__ . '/../Views/layouts/footer.php';
        // }

    }

    public function showReservationForm()
    {
        require_once __DIR__ . '/../Models/Avocat.php';
        require_once __DIR__ . '/../Models/Huissier.php';
        require_once __DIR__ . '/../Models/Reservation.php';
        $avocatModel = new Avocat();
        $avocats = $avocatModel->getAll();

        $huissierModel = new Huissier();
        $huissiers = $huissierModel->getAll();
        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/reservations/create.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

    public function create()
    {
        var_dump($_SESSION['user']['user_id']);
        require_once __DIR__ . '/../Models/Avocat.php';
        require_once __DIR__ . '/../Models/Huissier.php';
        require_once __DIR__ . '/../Models/Reservation.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $jour_semaine = $_POST['jour_semaine'] ?? null;
            $professional_type = $_POST['type'] ?? null;
            $heure_debut = (int) date('H', strtotime($_POST['heure_debut']));
            $heure_fin   = (int) date('H', strtotime($_POST['heure_fin']));
            $motif = $_POST['motif'] ?? '';
            $prof_id = $_POST['prof_id'];
            $error_msg = [];
            require_once __DIR__ . '/../Repositories/DisponibilitesRepo.php';
            $Jour = [];
            if (!empty($prof_id) && !empty($jour_semaine)) {
                $Jour = DisponibilitesRepo::getDispoByDay($prof_id, $jour_semaine);
            }
            if (empty($Jour)) {
                $error_msg[] = 'Le professionnel n\'est pas disponible ce jour-là.';
            } else if ($Jour[0]['is_active'] == 0) {
                $error_msg[] = 'Le professionnel n\'est pas disponible ce jour-là.';
            } else if ($heure_debut >= $heure_fin) {
                $error_msg[] = 'L\'heure de début doit être avant l\'heure de fin.';
            }
            else if ($heure_debut < $Jour[0]['heure_debut'] || $heure_fin > $Jour[0]['heure_fin']) {
                $error_msg[] = 'Les heures choisies sont en dehors des heures de disponibilité du professionnel.';
            }
            else {
                $reservation = new Reservation();
                $reservation->setClientId($_SESSION['user']['user_id']);
                $reservation->setProfessionalId($prof_id);
                $reservation->setProfessionalType($professional_type);
                $reservation->setDateReservation($jour_semaine);
                $reservation->setHeureDebut($heure_debut);
                $reservation->setHeureFin($heure_fin);
                $reservation->setMotif($motif);
                $reservation->setStatus('pending');
                $reservation->create();
            }
            if (empty($error_msg)) {
                $reservation->create();
                header('Location: /reservation');
                exit();
            }
            else {
                require_once __DIR__ . '/../Views/layouts/header.php';
                require_once __DIR__ . '/../Views/reservations/create.php';
                require_once __DIR__ . '/../Views/layouts/footer.php';
        }
        }
    }
    public function accept()
    {
        require_once __DIR__ . '/../Models/Reservation.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $reservation = new Reservation();

            $reservation->updateStatus($id, 'confirmed');

            header('Location: /reservations');
            exit();
        }
    }
    public function reject()
    {
        require_once __DIR__ . '/../Models/Reservation.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $reservation = new Reservation();

            $reservation->updateStatus($id, 'cancelled');

            header('Location: /reservations');
            exit();
        }
    }

    public function delete()
    {
        require_once __DIR__ . '/../Models/Reservation.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $reservation = new Reservation();
            $reservation->delete($id);
            header('Location: /reservations');
            exit();
        }
    }
}
