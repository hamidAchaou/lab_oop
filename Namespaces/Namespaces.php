<?php
namespace show_hamid;

class Stagire {
    public function sayHello() {
        echo "Helle Hamid AChaou";
    }
}

namespace show_jalil;

class Stagire {
    public function sayHello() {
        echo "Helle Hamid AChaou";
    }
}

$hamid = new \show_hamid\Stagire();
$jalil = new \show_jalil\Stagire();

$hamid->sayHello();  // Output: Hello Hamid 
$jalil->sayHello();  // Output: Hello Jalil
?>