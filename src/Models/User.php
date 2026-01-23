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
        if ($stmt->execute($data)) {
            return $this->db->lastInsertId();
        }
    }

    // In Models/User.php

    public function signIn($data)
{
    // 1. Fetch user data including ID and Role
    $stmt = $this->db->prepare("SELECT id, password, role, status FROM `users` where email = ?");
    $stmt->execute([$data[0]]);
    $result = $stmt->fetch();

    if (!$result) {
        return 'false_credentials';
    }

    if (password_verify($data[1], $result['password'])) {
        if ($result['status'] == 'pending') {
            return false; 
        } else {
            // FIX: Use $this->setId instead of self::setId
            $this->setId($result['id']); 
            
            // FIX: Return an ARRAY, not just the role string
            return [
                'id' => $result['id'],
                'role' => $result['role']
            ];
        }
    } else {
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



    public function setId(int $id)
    {
        $this->id = $id;
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
