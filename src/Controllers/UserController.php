<?php
require_once __DIR__ . '/../Models/User.php';
class UserController
{



    public function edit()
    {
        $id = $_GET["user"];
        if ($_SESSION['user']['role'] === 'avocat') {
            $object = User::getByIdAvocat($id);
            $user = User::userInstence($object);
        }
        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/update/updateuser.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }

    public function update()
    {

        $user = User::getUpdate();

       header("location: /avocat/profile");
    }
}
