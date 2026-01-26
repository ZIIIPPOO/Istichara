<?php 

class HuissierController{




    public function createHuissierWithUser()
{
    require __DIR__ . '/../Models/Huissier.php';

    $ext = strtolower(pathinfo($_FILES['lienPdf']['name'], PATHINFO_EXTENSION));
    if ($ext !== 'pdf') {
        throw new Exception("Only PDF files are allowed.");
    }

    $filename = uniqid('', true) . '.' . $ext;
    $targetPath = __DIR__ . '/../public/assets/pdf/' . $filename;

    if (!move_uploaded_file($_FILES['lienPdf']['tmp_name'], $targetPath)) {
        throw new Exception("File upload failed.");
    }

    $hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $huissier = new Huissier(      
            $_POST['email'],           
            $hashedPassword,           
            'huissier',            
            $_POST['fullname'],        
            $_POST['telephone'],       
            (int)$_POST['ville_id'],   
            $_POST['type_actes'],      
            (int)$_POST['annees_experience'], 
            (float)$_POST['tarif_horaire'],   
            $targetPath      
        );
    
        if ($huissier->create()) {
            echo "Huissier successfully created!";
        } else {
            echo "Error creating huissier.";
        }
    
    
    

}}