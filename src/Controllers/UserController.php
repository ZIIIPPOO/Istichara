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

    }
}
