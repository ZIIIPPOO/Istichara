<?php


class ReservationController
{
    public function index()
    {
        require_once __DIR__ . '/../Models/Reservation.php';
    // var_dump($_SESSION['user_id']);

        if($_SESSION['role'] === 'client') {
            // echo "sasad";
            $reservation = new Reservation();
            $reservations = $reservation->getByClientId($_SESSION['user_id']);

            require_once __DIR__ . '/../Views/layouts/header.php';
            require_once __DIR__ . '/../Views/reservations/client_index.php';
            require_once __DIR__ . '/../Views/layouts/footer.php';
        } 
        else if($_SESSION['role'] === 'avocat' || $_SESSION['role'] === 'huissier') {
            $reservation = new Reservation();
            $reservations = $reservation->getByProId($_SESSION['user_id']);
            require_once __DIR__ . '/../Views/layouts/header.php';
            require_once __DIR__ . '/../Views/reservations/index.php';
            require_once __DIR__ . '/../Views/layouts/footer.php';
        }

    }
    public function create()
    {
        require_once __DIR__ . '/../Models/Avocat.php';
        require_once __DIR__ . '/../Models/Huissier.php';
        require_once __DIR__ . '/../Models/Reservation.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if (!empty($_POST['avocat_id'])) {
                $professional_id = $_POST['avocat_id'];
                $professional_type = 'avocat';
            } 
            else {
                $professional_id = $_POST['huissier_id'];
                $professional_type = 'huissier';
            }
            
            $reservation = new Reservation();
            $reservation->setClientId($_SESSION['user_id']);
            $reservation->setProfessionalId($professional_id);
            $reservation->setProfessionalType($professional_type);
            $reservation->setDateReservation($_POST['date_reservation']);
            $reservation->setHeureDebut($_POST['heure_debut']);
            $reservation->setHeureFin($_POST['heure_fin']);
            $reservation->setMotif($_POST['motif']);
            $reservation->setStatus('pending');

            $reservation->create();
            
            header('Location: /reservations');
            exit();
        }

        $avocatModel = new Avocat();
        $avocats = $avocatModel->getAll();
        
        $huissierModel = new Huissier();
        $huissiers = $huissierModel->getAll();

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/reservations/create.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
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
