<?php
class Club{
    private $id;
    private $name;
    private $description;
    private $adresse;
    private $domaine;

    public function __construct(int $id,string $name,string $description,string $adresse,string $domaine){
        $this->id=$id;
        $this->name=$name;
        $this->description=$description;
        $this->adresse=$adresse;
        $this->domaine=$domaine;
    }
    function afficherClub(){
        echo "Id:".$this->id."<br/>";
        echo "Name:".$this->name."<br/>";
        echo "Description:".$this->description."<br/>";
        echo "Adresse:".$this->adresse."<br/>";
        echo "Domaine:".$this->domaine."<br/>";
    }
    
}
/*$c1 = new Club(1,"Club Robotique","Test","Esprit Ghazala","Electromecanique");
$c1->afficherClub();*/
?>