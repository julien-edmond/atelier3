<?php
include "model/env.php";


class Actualites{
    private int $id;
    private string $intitule;
    private string $details;
    private string $affiche; 

    public function __construct(int $id, string $intitule, string $details, string $affiche){
        $this->id=$id;
        $this->intitule=$intitule;
        $this->details=$details;
        $this->affiche=$affiche;
        
    }

    public function getId(): int {
        return $this->id;
    }

    // Setter pour id
    public function setId(int $id){
        $this->id = $id;
    }

    // Getter pour intitule
    public function getIntitule(): string {
        return $this->intitule;
    }

    // Setter pour intitule
    public function setIntitule(string $intitule){
        $this->intitule = $intitule;
    }

    // Getter pour details
    public function getDetails(): string {
        return $this->details;
    }

    // Setter pour details
    public function setDetails(string $details){
        $this->details = $details;
    }

    // Getter pour affiche
    public function getAffiche(): string {
        return $this->affiche;
    }

    // Setter pour affiche
    public function setAffiche(string $affiche) {
        $this->affiche = $affiche;
    }

}
?>