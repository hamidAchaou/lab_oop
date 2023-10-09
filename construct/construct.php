<?php
class Stagire {
    public function __construct($name)
    {
        echo $name;
    }
}

$stagire = new Stagire("hamid");
echo $stagire;
?>