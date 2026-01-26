<?php

class Avocat{

 public function createAvocatWithUser(): bool 
    { 
        try { 
            $this->db->beginTransaction(); 
            // Insert into users 
            $stmtUser = $this->db->prepare(" INSERT INTO users (email, password, role, fullname, telephone, status) VALUES (?, ?, ?, ?, ?, 'pending') "); 
            $stmtUser->execute([ $this->email, $this->password, $this->role, $this->fullname, $this->telephone ]); 
            $userId = (int)$this->db->lastInsertId(); 
            // Insert into huissiers 
            $stmtAvocat = $this->db->prepare(" INSERT INTO avocats (user_id, city_id, specialite, annees_experience, tarif_horaire,consultation_en_ligne ,assigned, lienPdf) VALUES (?, ?, ?, ?, ?, 'rejected', ?) "); 
            $stmtAvocat->execute([ $userId, $this->cityId, $this->typesActes, $this->anneesExperience, $this->tarifHoraire, $this->lienPdf ]); 
            $this->db->commit(); 
            return true; 
            } catch (Exception $e) {
                 $this->db->rollBack(); 
                 error_log("Error creating Avocat: " . $e->getMessage()); 
                 return false; 
            }
    }
}