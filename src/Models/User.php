<?php
require_once __DIR__ . '/../../config/database.php';

class User
{
    private int $id;
    private string $email;
    private string $password;
    private string $role;
    // private string $nom;
    private string $fullname;
    private ?string $telephone;
    private string $status;
    private string $created_at;
    private string $update_at;

    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    

    public function getFullName(): string
    {
        return $this->fullname;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getUpdateAt(): string
    {
        return $this->update_at;
    }



    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }
 

    public function setFullName(string $fullname): self
    {
        $this->fullname = $fullname;
        return $this;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function setCreatedAt(string $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function setUpdateAt(string $update_at): self
    {
        $this->update_at = $update_at;
        return $this;
    }


    public function update()
    {
        $db = Database::getInstance()->getConnection();
        $sql = "UPDATE users SET fullname = ?, email = ?, role = ?, telephone = ?, status = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$this->fullname, $this->email, $this->role, $this->telephone, $this->id]);
    }

    public static function getById($id): array
    {

        $db = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return   $stmt->fetch();
    }

    public static function getByIdAvocat($id): array
    {

        $db = Database::getInstance()->getConnection();

        $sql = "SELECT users.*, avocats.* FROM users
        INNER JOIN avocats on users.id = avocats.user_id
         WHERE users.id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return   $stmt->fetch();
    }
    public static function getByIdHuissier($id): array
    {

        $db = Database::getInstance()->getConnection();

        $sql = "SELECT users.*, huissiers.* FROM users
        INNER JOIN huissiers on users.id = huissiers.user_id
         WHERE users.id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return   $stmt->fetch();
    }

    public static function userInstence(array $obj)
    {
        $user = new User();
        $user->setId($obj["id"])
            ->setEmail($obj["email"])
            ->setFullName($obj["fullname"])
            ->setPassword($obj["password"])
            ->setRole($obj["role"])
            ->setStatus($obj["status"])
            ->setTelephone(isset($obj["telephone"]) ? $obj["telephone"] : null);
        return $user;
    }

    public static function getUpdateAvocat(): bool
    {

    $count =0;
        $db = Database::getInstance()->getConnection();
        $id = $_POST["id"];
        $s = "";
        foreach ($_POST as $key => $value) {
            $count++;
            $s .= "$key='$value', ";
            if($count == 4){
                break;
            }
        }
        $s = rtrim($s, ", ");

        $a = "";
        foreach ($_POST as $key => $value) {
            if($key === 'telephone'|| $key === 'password'|| $key === 'fullname'|| $key === 'role'|| $key === 'status'){
                continue;
            }
            $a .= "$key='$value', ";
        };
        $a .= "name='".$_POST['fullname']."'";
        $a = rtrim($a, ", ");


        $sql = "UPDATE users SET $s WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);

        $sql = "UPDATE avocats SET $a WHERE user_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return   $stmt->fetch();
    }
    public static function getUpdateHuissier(): bool
    {
        $count =0;
        $db = Database::getInstance()->getConnection();
        $id = $_POST["id"];
        $s = "";
        foreach ($_POST as $key => $value) {
            $count++;
            $s .= "$key='$value', ";
            if($count == 4){
                break;
            }
        }
        $s = rtrim($s, ", ");
        $a = "";
        foreach ($_POST as $key => $value) {
            if($key === 'telephone'|| $key === 'password'|| $key === 'fullname'|| $key === 'role'|| $key === 'status'){
                continue;
            }
            $a .= "$key='$value', ";
        };
        $a .= "name='".$_POST['fullname']."'";
        $a = rtrim($a, ", ");


        $sql = "UPDATE users SET $s WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);

        $sql = "UPDATE huissiers SET $a WHERE user_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return   $stmt->fetch();
    }
}
