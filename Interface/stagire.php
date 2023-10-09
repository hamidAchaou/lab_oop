<?php
require_once "./person.php";
class Stagire implements User {
    private $Nom = "Achaou";

    public function sayHello() {
        echo "Hello, I am a Stagire.";
    }

    public function getNom() {
        return $this->Nom;
    }
}

$stagire = new Stagire();
$stagire->sayHello();  // Output: Hello, I am a Stagire.
echo $stagire->getNom();  // Output: Achaou

?>