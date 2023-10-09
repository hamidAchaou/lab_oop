<?php
abstract class Person {
    protected $Nom = "Achaou";
    protected $Prenom = "Hamid";

    abstract public function sayHello($Nom, $Prenom);
    abstract public function getStagire();

}

?>