<?php
require_once "./person.php";

class Student extends PersonPolymorphism {
    protected $university;

    public function __construct($name, $age, $university) {
        parent::__construct($name, $age);
        $this->university = $university;
    }

    public function introduce() {
        parent::introduce();
        echo "I am a stagiere from {$this->university}.";
    }

    public function doWork() {
        echo "{$this->name} is doing work as a stagiere.";
    }
}


$person = new PersonPolymorphism("Hamid Achaou", 24);
$stagiere = new Student("Hamid Achaou", 24, "Solicode");

echo $stagiere->introduce();

?>