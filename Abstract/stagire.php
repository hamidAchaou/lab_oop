<?php

require_once "./person.php";
class Stagire extends Person {
    private $CNE = "G19010027";
    public function sayHello($Nom, $Prenom) {
        // Implementation of the abstract method
        echo "Hello $Nom $Prenom";
    }

    public function getStagire() {
        // Implementation of the abstract method
        echo $this->Nom . "<br/>";
        echo $this->Prenom . "<br/>";
        echo $this->CNE . "<br/>";
    }
}

$person = new Stagire();
$person->sayHello("Jalil", "Betroji");  // Output: Hello Jalil Betroji
$person->getStagire();  // Output: Achaou Hamid G19010027



?>