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
            $heure_debut = isset($_POST['heure_debut']);
            $heure_fin = isset($_POST['heure_fin']);
            $Active = isset($_POST['is_active']);
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
        }
        $dispo = new DisponibilitesRepo();
        // $dispo->getAllDispo($user_id);


        require_once __DIR__ . '/../Views/layouts/header.php';
        require __DIR__ . '/../Views/professional/EmploiForm.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

}
