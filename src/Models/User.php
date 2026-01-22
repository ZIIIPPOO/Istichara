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
}
