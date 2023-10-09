<?php
class Stagire {
    // Attribut
    public $nom = "Achaou";
    public $prenom = "Hamid";

    // Methode construct
    public function __construct()
    {
        echo "hello Mr" . $this->nom . $this->prenom;
    }

    // Methode destruct
    public function __destruct()
    {
        echo "hello Again Mr" . $this->nom . $this->prenom;
    }

}
 
$stagire = new Stagire();
echo $stagire;
?>