<?php
//TRACCIA 2

class Company{

    public $name;
    public $location;
    public $tot_employees = 0;


    public function __construct($name, $location, $tot_employees){
        $this-> name = $name;
        $this-> location = $location;
        $this-> tot_employees = $tot_employees;
    }
    public function descrizioneAzienda(){
        echo "L'ufficio di " . $this-> name . ", con sede in " . $this-> location . ", ha " . $this-> tot_employees . " dipendenti.\n";
    }
}



$aulab = new Company("Aulab", "Italia", 50);
$hidingLines = new Company("Hiding Lines", "Italia", 10);
$livingWood = new Company("Living Wood", "Germania", 27);
$softCreations = new Company("Soft Creations", "Francia", 0);
$backonsDeck = new Company("Back on Deck", "U.S.A.", 13);


$aulab-> descrizioneAzienda();
$hidingLines-> descrizioneAzienda();
$livingWood-> descrizioneAzienda();
$softCreations-> descrizioneAzienda();
$backonsDeck-> descrizioneAzienda();