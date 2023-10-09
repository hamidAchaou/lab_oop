<?php
class Stagire {
    public $Nom; // Public variable

    protected $Prenom; //Protected variable 

    private $Age; // Private variable

    public function __construct($Nom) {
        $this->Nom = $Nom; // Public constructor
    }

    // Private method
    private function gteNom() {
        echo "Achaou";
    }

    // Public method
    public function getAge() {
        echo $this->Age;
    }

    // Protected method
    protected function setPrenom() {
        $this->Prenom = "Hamid";
    }

    // Methode destruct
    public function __destruct()
    {
        echo "Welcom in Destruct";
    }

 }
?>