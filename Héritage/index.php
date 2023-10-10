<?php class PersonHeritage
{
    protected $name;
    protected $prenom;
    public function __construct($name, $prenom)
    {
        $this->name = $name;
        $this->prenom = $prenom;
    }
}
