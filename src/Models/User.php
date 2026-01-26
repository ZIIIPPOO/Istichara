<?php
require '../config/database.php';
class User
{
    private int $id;
    private string $email;
    private string $password;
    private string $role;
    private string $nom;
    private string $prenom;
    private string $telephone;
    private string $status;
    private string $created_at;
    private string $update_at;
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function signUp($data) //:bool
    {
        $stmt = $this->db->prepare("INSERT INTO `users` ( `email`, `password`, `role`, `fullname`, `telephone`, `status`) VALUES (?,?,?,?,?,?)");
        if($stmt->execute($data)){
            return $this->db->lastInsertId();
        }
    }

    public function signIn($data):bool|string
    {
        $stmt = $this->db->prepare("SELECT id,password FROM `users` where email= ?");
        $stmt->execute([$data[0]]);
        $result=$stmt->fetch();
        // print_r($result);
        // echo $data[1];
        // echo $result;
        // var_dump(password_verify($data[1],$result));
        // die();
        if (password_verify($data[1],$result['password'])) {
            # code...
            // print_r($result['id']);
            // die();
            // var_dump($result['id']);
            // die();
            return (int)$result['id'];
        } else {
            # code...
            return 'false_credentials';
        }
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

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getTelephone(): string
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

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function setTelephone(string $telephone): self
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


}
