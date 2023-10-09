<?php
class PersonPolymorphism {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "My name is {$this->name}. I am {$this->age} years old." . PHP_EOL;
    }
}

?>