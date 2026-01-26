<?php
session_start();
// use Helper\MailHelper;
require __DIR__.'/../Helpers/MailHelper.php';
use PHPMailer\PHPMailer\Exception;
require __DIR__.'/../Models/User.php';
require '../vendor/autoload.php';
class UserController{

public function showRegisterForm()
{
    require 'C:\laragon\www\istichara_brief2\Istichara\src\Views\auth\register-client.php';
}

    public function signUp()
    {
        // require 'C:\laragon\www\istichara_brief2\Istichara\src\Views\auth\register-client.php';
        $_SESSION['data']=[$_POST['email'],password_hash($_POST['password'],PASSWORD_BCRYPT),$_POST['role'],$_POST['fullname'],$_POST['telephone'],'pending'];
        //INSERT INTO `users`( `email`, `password`, `role`, `fullname`, `telephone`, `status`) VALUES ()
        if ( $_POST['password'] == $_POST['password_confirmation']) {
            # code...
            try {
                //code...
                $mailHelper = new MailHelper();
                $mailHelper->setSender('tarikelyatim2006@gmail.com','top');
                // $mailHelper->setUserName('tarikelyatim2006@gmail.com');
                $mailHelper->addRecipient('tarikelyatim2006@gmail.com','rtytrty');
                $Subject='Email Verification';
                $code=substr(str_shuffle("0123456789"), 0, 6);
                $Body='c\'est vous qui vient de creer un compte , si oui attendez la validation d\'administrateur ,ecrire ce code  '.$code;
                $mailHelper->setContent($Subject,$Body);
                $mailHelper->send();
                $_SESSION['code']=$code;
                header('location:/verificationform');
            } catch (\Exception $th) {
                throw $th;
        }
            }else {
                header("Location: User/signup?error=password_mismatch");
            }
        
    }
 
    public function showconfirm()
    {
        require 'C:\laragon\www\istichara_brief2\Istichara\src\Views\auth\email-verif.php';
    }

    public function emailVerification()
    {
        // echo $_POST['code'],$_SESSION['code'];
        if ($_POST['code']==$_SESSION['code']) {
            # code...
            // print_r($_SESSION);
            (new User)->signUp($_SESSION['data']);
            require __DIR__.'/../views/auth/login.php';
        }
    }

    public function showformpro()
    {
        require __DIR__.'/../views/auth/register-professional.php';
    }

    public function showconn()
    {
        require __DIR__.'/../views/auth/login.php';
    }

    public function signIn()
    {
        $data=[$_POST['email'],$_POST['password']];
        $user=new User();
        if ($user->signIn($data) !== 'false_credentials' ) {
            # code...
            $id=$user->signIn($data);
            $_SESSION['user_id']=$id;
            require 'C:\laragon\www\istichara_brief2\Istichara\src\Views\layouts\header.php';
            require 'C:\laragon\www\istichara_brief2\Istichara\src\Views\client\dashboard.php';
            require 'C:\laragon\www\istichara_brief2\Istichara\src\Views\layouts\footer.php';
        } else {
            # code...
            // echo 'in else';
            include_once __DIR__.'/../views/auth/login.php?message=false_credentials';
        }   
    }

    public function resetform()
    {
            require __DIR__.'/../Views/auth/reset.php';
    }

    public function resetpass()
    {
        $db->prepare("UPDATE `users` SET `password`=? WHERE `id`=?");
        $db->execute([$_POST['resetpass'],$_SESSION['user_id']]);
        header('location:'.__DIR__.'/../Views/auth/login.php')
    }
}
