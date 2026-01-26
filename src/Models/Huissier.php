<?php 

class Huissier{

    public function createHuissierWithUser(): bool 
    { 
        try { 
            $this->db->beginTransaction(); 
            // Insert into users 
            $stmtUser = $this->db->prepare(" INSERT INTO users (email, password, role, fullname, telephone, status) VALUES (?, ?, ?, ?, ?, 'pending') "); 
            $stmtUser->execute([ $this->email, $this->password, $this->role, $this->fullname, $this->telephone ]); 
            $userId = (int)$this->db->lastInsertId(); 
            // Insert into huissiers 
            $stmtHuissier = $this->db->prepare(" INSERT INTO huissiers (user_id, city_id, type_actes, annees_experience, tarif_horaire, assigned, lienPdf) VALUES (?, ?, ?, ?, ?, 'rejected', ?) "); 
            $stmtHuissier->execute([ $userId, $this->cityId, $this->typesActes, $this->anneesExperience, $this->tarifHoraire, $this->lienPdf ]); 
            $this->db->commit(); 
            return true; 
            } catch (Exception $e) {
                 $this->db->rollBack(); 
                 error_log("Error creating huissier: " . $e->getMessage()); 
                 return false; 
            }
    }
}