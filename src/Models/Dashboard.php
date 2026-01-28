<?php

require_once __DIR__ . '/../../config/database.php';

class Dashboard
{

    public function __construct()
    {
        $this->getStatics();
    }

    private float $totalMoney;
    private int $totalDemande ; /// reservation
    private int $nomberClientUnique; /// save by ip

    private int $totalHour;
    private array $visitorTime = [];
    private array $hourOfWork = [];



    public function getTotalMoney(): float
    {
        return $this->totalMoney;
    }
    public function getTotalDemand(): float
    {
        return $this->totalDemande;
    }
    public function getNomberClientUnique(): float
    {
        return $this->nomberClientUnique;
    }
    public function getVisitorTime(): array
    {
        return $this->visitorTime;
    }
    public function getHourOfWork(): array
    {
        return $this->hourOfWork;
    }
    public function getTotalHour(): int
    {
        return $this->totalHour;
    }


    public function setTotalMoney(float $v): void
    {
        $this->totalMoney = $v;
    }
    public function setTotalDemand(int $v): void
    {
        $this->totalDemande = $v;
    }
    public function setNomberClientUnique(int $v): void
    {
        $this->nomberClientUnique = $v;
    }

    private  function getStatics(): void
    {
        try {
            $id = $_GET["id"]; //\/ id from avocat (or huissier) table
            $type = $_GET["type"];
            $tarif = $_GET["tarif"];
            $db = Database::getInstance()->getConnection();

            $sql = "SELECT * FROM reservations WHERE professional_id = ? AND professional_type = ?";

            $stmt = $db->prepare($sql);
            $stmt->execute([$id, $type]);
            $allReaservation = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $this->totalMoney = $this->calculateTotalRevunue($allReaservation, $tarif);

            $this->totalDemande = count($allReaservation);
            $this->getVisitors($id, $type);
            $this->getVisitorsTime($id, $type);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    private  function getRservations(): void
    {
        try {
            $id = $_GET["id"];
            $type = $_GET["type"];
            $tarif = $_GET["tarif"];
            $db = Database::getInstance()->getConnection();

            $sql = "SELECT * FROM reservations WHERE professional_id = ? AND professional_type = ?";

            $stmt = $db->prepare($sql);
            $stmt->execute([$id, $type]);
            $allReaservation = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $this->totalMoney = $this->calculateTotalRevunue($allReaservation, $tarif);

            $this->totalDemande = count($allReaservation);
            $this->getVisitors($id, $type);
            $this->getVisitorsTime($id, $type);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    private function getUserName(int $id): string
    {
        $db = Database::getInstance()->getConnection();
        $sql = "SELECT `fullname` FROM `users` WHERE id = $id";
        $stmt = $db->query($sql);
        if ($stmt) {
            $stmt->execute();
            return $stmt->fetchColumn();
        }
        return "";
    }

    private function calculateTotalRevunue(array $allReaservation, $tarif): float
    {
        $totalHoures = 0;
        foreach ($allReaservation as $reser) {
            $clientId = $reser["client_id"];
            $clientName = $this->getUserName($clientId);
            $hour = $this->strToTime($reser["heure_debut"], $reser["heure_fin"]);

            $this->hourOfWork[] = [
                "date" =>  $reser["date_reservation"],
                "hour" => $hour,
                "start" => $reser["heure_debut"],
                "end" => $reser["heure_fin"],
                "client" => $clientName,
            ];

            $totalHoures += $hour;
        }
        $this->totalHour = $totalHoures;
        return (float) ($totalHoures * $tarif);
    }

    private function strToTime(string $start, string $end): int
    {
        $startTime = strtotime($start);

        $endTime = strtotime($end);

        $diff = $endTime - $startTime;

        $formattedDate = date("H", $diff);

        return (int) $formattedDate;
    }

    private function getVisitors(int $id, string $type)
    {
        $db = Database::getInstance()->getConnection();
        $sql = "SELECT COUNT(DISTINCT ip_address) FROM visitors WHERE pro_id= ? AND  type = ? ";

        $stmt = $db->prepare($sql);
        $stmt->execute([$id, $type]);
        $this->nomberClientUnique = $stmt->fetchColumn();
    }
    private function getVisitorsTime(int $id, string $type)
    {
        $db = Database::getInstance()->getConnection();
        $sql = "SELECT v.visit_date, COUNT(v.ip_address) as count FROM visitors v WHERE v.pro_id= ? AND  v.type = ? GROUP BY  v.visit_date";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id, $type]);
        $this->visitorTime = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // private function getVisitorsByMonth(int $id, string $type)
    // {
    //     $db = Database::getInstance()->getConnection();
    //     $sql = "SELECT COUNT(DISTINCT ip_address) FROM visitors WHERE pro_id= ? AND  type = ? ";
    //     $stmt = $db->prepare($sql);
    //     $stmt->execute([$id, $type]);
    //     $this->nomberClientUnique = $stmt->fetchColumn();


    //     $sql_2 = "SELECT COUNT(DISTINCT ip_address) FROM visitors WHERE pro_id= ? AND type = ? AND MONTH(visit_date) = MONTH(CURDATE())
    //               AND YEAR(visit_date) = YEAR(CURDATE());";
    //     $stmt_2 = $db->prepare($sql);
    //     $stmt_2->execute([$id, $type]);
    // }



    // private function getUserIP()
    // {
    //     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //         $ip = $_SERVER['HTTP_CLIENT_IP'];
    //     } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //         $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    //     } else {
    //         $ip = $_SERVER['REMOTE_ADDR'];
    //     }



    //     $date = date('Y-m-d');
    //     $db = Database::getInstance()->getConnection();
    //     $stmt = $db->prepare(
    //         "INSERT IGNORE INTO visitors (ip_address, visit_date)
    //  VALUES (?, ?)"
    //     );
    //     $stmt->execute([$ip, $date]);
    // }
}
