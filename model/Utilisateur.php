<?php

namespace App\Model;

class Utilisateur
{
    private $nom;
    private $prenom;

    public function __construct($prenom = "inconnu", $nom = "INCONNU")
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function nomEntier()
    {
        echo strtoupper($this->nom) . " " .
            $this->prenom;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return strtoupper($this->nom);
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}
