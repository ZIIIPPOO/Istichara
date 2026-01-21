<?php
class  Disponibilites{
    private int $user_id;
    private string $jour_semaine;
    private string $heure_debut;
    private string $heure_fin;
    private bool $active;

    public function __construct(int $user_id, string $jour_semaine, string $heure_debut, string $heure_fin, bool $active)
    {
        $this->user_id = $user_id;
        $this->jour_semaine = $jour_semaine;
        $this->heure_debut = $heure_debut;
        $this->heure_fin = $heure_fin;
        $this->active = $active;
    }
    public function setId(int $id): void
    {
        $this->user_id = $id;
    }
    public function getUserId(): int
    {
        return $this->user_id;
    }
    public function getJourSemaine(): string
    {
        return $this->jour_semaine;
    }
    public function getHeureDebut(): string
    {
        return $this->heure_debut;
    }
    public function getHeureFin(): string
    {
        return $this->heure_fin;
    }
    public function isActive(): bool
    {
        return $this->active;
    }
}

?>