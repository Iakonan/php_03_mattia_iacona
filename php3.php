<?php
//TRACCIA 1


$password = readline("Inserisci la tua password: ");
checkMyPass($password);



function checkMyPass($password){
    $checkLunghezza = false;
    $checkCapitalLetter = false;
    $checkNumero = false;
    $checkCarSpec = false;

    
    function checkLenght($password){

        if(strlen($password) >= 8){
            return true;
        }
        
        return false;

    }

    function checkUpperCaseLetter($password){
        for ($i=0; $i < strlen($password); $i++) { 
            if(ctype_upper($password[$i])){
                return true;
            }
        }
    }

    function checkNumber($password){
        for ($i=0; $i < strlen($password); $i++) { 
           if(ctype_alnum($password[$i])){
                return true;
           }
        }
    }

    function checkSpecialChar($password){
        $regex = preg_match('[@_!#$%^&*()<>?/|}{~:]', $password);
            if ($regex){
                return true;
            }
    }


    $checkLunghezza = checkLenght($password);
    $checkCapitalLetter = checkUpperCaseLetter($password);
    $checkNumero = checkNumber($password);
    $checkCarSpec = checkSpecialChar($password);
   






    if($checkLunghezza){
        echo "lunghezza rispettata\n";
    }else{
        echo "lunghezza NON rispettata\n";
        return;
    }

    if($checkCapitalLetter){
        echo "Maiuscola nella password, bene!\n";
    }else{
        echo "Manca la maiuscola nella password\n";
        return;
    }

    if($checkNumero){
        echo "Numero nella password, bene\n";
    }else{
        echo "Nessun numero nella password\n";
        return;
    }
    
    if($checkCarSpec){
        echo "Carattere speciale nella password, bene\n";
    }else{
        echo "Nessun carattere speciale nella password\n";
        return;
    }

}

































//TRACCIA 2

// class Company{

//     public $name;
//     public $location;
//     public $tot_employees = 0;
//     public $spesa_annua;


//     public function __construct($name, $location, $tot_employees, $spesa_annua){
        

//         $this-> name = $name;
//         $this-> location = $location;
//         $this-> tot_employees = $tot_employees;
//         $this-> spesa_annua = $spesa_annua;
//     }
    
    
//     public function descrizioneAzienda(){
        
//         if($this->tot_employees > 0 ){
//         echo "L'ufficio di " . $this-> name . ", con sede in " . $this-> location . ", ha " . $this-> tot_employees . " dipendenti.\n";
//     }else{
//         echo "L'ufficio di " . $this-> name . ", con sede in " . $this-> location . ", non ha dipendenti\n";
//     }}

    
    
//     public function spesaAnnuale(){
//         echo "La società " . $this-> name . " ha una spesa annuale di " . $this->spesa_annua . " EURO.\n";
//     }

// }



// $aulab = new Company("Aulab", "Italia", 50, 50000);
// $hidingLines = new Company("Hiding Lines", "Italia", 10, 12000);
// $livingWood = new Company("Living Wood", "Germania", 27, 35600);
// $softCreations = new Company("Soft Creations", "Francia", 0, 3500);
// $backonsDeck = new Company("Back on Deck", "U.S.A.", 13, 12320);


// $aulab-> descrizioneAzienda();
// $hidingLines-> descrizioneAzienda();
// $livingWood-> descrizioneAzienda();
// $softCreations-> descrizioneAzienda();
// $backonsDeck-> descrizioneAzienda();

// $aulab-> spesaAnnuale();
// $hidingLines-> spesaAnnuale();
// $livingWood-> spesaAnnuale();
// $softCreations-> spesaAnnuale();
// $backonsDeck-> spesaAnnuale();


// $companies = [$aulab, $hidingLines, $livingWood, $softCreations, $backonsDeck];

// $spesaAnnuaAziende = 0;

// foreach ($companies as $company) {
//     $spesaAnnuaAziende += $company->spesa_annua;
    
// }

// echo "La somma delle spese annuali di queste aziende è: " . $spesaAnnuaAziende;