<?php
require_once "./index.php";
class StagireHeritage extends PersonHeritage
{
    private $CNE;
    public function __construct($name, $prenom, $CNE)
    {
        parent::__construct($name, $prenom);
        $this->CNE = $CNE;
    }
    public function getStagire()
    {
        echo "hello " . $this->name . " " . $this->prenom . " your CNE Is " . $this->CNE;
    }
} 
// Usage 
$stagire = new StagireHeritage('Achaou', "Hamid", "G19019927"); 
echo $stagire->getStagire();
?>