<?php
require_once __DIR__ . '/../Models/User.php';
class UserController
{



    public function edit()
    {
        $id = $_GET["user"]; // 1
        $object = User::getById($id);
        // var_dump($object);
        $user = User::userInstence($object);
        var_dump($user->getTelephone());

        require_once __DIR__ . '/../Views/layouts/header.php';
        require_once __DIR__ . '/../Views/update/updateuser.php';
        require_once __DIR__ . '/../Views/layouts/footer.php';
    }
    public function update()
    {
     
        $user = User::getUpdate();

       header("location: /");
    }
}
