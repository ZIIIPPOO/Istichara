<?php

require __DIR__ . '/../Models/User.php';
require '../vendor/autoload.php';

class UserController
{

    public function showRegisterForm()
    {
        $id = $_GET["user"];
        if ($_SESSION['user']['role'] === 'avocat') {
            $object = User::getByIdAvocat($id);
            $user = User::userInstence($object);
        }
        if ($_SESSION['user']['role'] === 'huissier') {
            $object = User::getByIdHuissier($id);
            $user = User::userInstence($object);
        }
        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/update/updateuser.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

    public function update()
    {
        if ($_SESSION['user']['role'] === 'avocat') {
        $user = User::getUpdateAvocat();
        header("location: /avocat/profile");
        }
        if ($_SESSION['user']['role'] === 'huissier') {
            $user = User::getUpdateHuissier();
            header("location: /huissier/profile");
        }

        require_once __DIR__ . '/../Views/auth/register-client.php';
    }

    public function signUp()
    {
        // 1. Remove the die() statement
        // 2. Ensure $data matches database columns exactly
        $data = [
            $_POST['email'],
            password_hash($_POST['password'], PASSWORD_BCRYPT),
            $_POST['role'],
            $_POST['fullname'],
            $_POST['telephone'],
            'active' // Default status
        ];

        if ($_POST['password'] === $_POST['password_confirmation']) {
            $user = new User();
            $id = $user->signUp($data);

            if ($id) {
                // Registration successful
                $_SESSION['user_id'] = $id;
                // Redirect to dashboard or show success message, not signin
                header('Location: /User/signin');
                exit();
            } else {
                echo "Error creating account.";
            }
        } else {
            header("Location: /register/client?error=password_mismatch");
            exit();
        }
    }

    public function signIn() {
    $data = [$_POST['email'], $_POST['password']];
    $user = new User();
    
    $loginResult = $user->signIn($data);

    // Check if result is an array (Success)
    if (is_array($loginResult)) {
        
        // FIX: Access the array keys we defined in the Model
        $_SESSION['user_id'] = $loginResult['id']; 
        $_SESSION['role']    = $loginResult['role']; 

        // Debugging: This should now show "avocat" or "client"
        // var_dump($_SESSION['role']); die(); 
        
        // Redirect based on role
        if ($_SESSION['role'] === 'client') {
            require_once __DIR__. '/../Views/layouts/header.php';
            require_once __DIR__. '/../Views/client/dashboard.php';
            require_once __DIR__. '/../Views/layouts/footer.php';
        } elseif($_SESSION['role'] === 'admin'){
            // For avocat/huissier
            require_once __DIR__. '/../Views/layouts/header.php';
            require_once __DIR__. '/../Views/professional/dashboard.php';
            require_once __DIR__. '/../Views/layouts/footer.php';
        }
        

        exit();

    } elseif ($loginResult === 'false_credentials') {
        $errorMessage = "Email ou mot de passe incorrect";
        require __DIR__.'/../Views/auth/login.php';
    }
}
    

    // ... keep your other functions (showconn, etc.) ...
    public function showconn()
    {
        require __DIR__ . '/../Views/auth/login.php';
    }
}
