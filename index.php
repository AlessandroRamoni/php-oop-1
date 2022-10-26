<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OPP-1</title>
</head>
<body>
    
<?php

    class Movie {
        public $titolo;
        public $anno;
        public $protagonista;
        public $attori = [];
        public $lingua;

        public function __construct($_titolo, $_anno, $_protagonista, $_lingua){
            $this->titolo=$_titolo;
            $this->anno=$_anno;
            $this->protagonista=$_protagonista;
            $this->lingua=$_lingua;
        }
    
        public function addActor($_attore){
            if(!in_array($_attore, $this->attori))
            $this->attori[] = $_attore;
                                        

        }

        public function nomeFunzione() {    

            var_dump($this->titolo . "è un film con" . $protagonista . "uscito nelle sale nel" . $this->anno . "in lingua" . $this->lingua); 
        
        }

    }

    $mediterraneo = new Movie("Mediterraneo",1991,"Abatantuono","Italiano");
    $mediterraneo->addActor("Bisio");
    $mediterraneo->addActor("Vattela");

    $taken = new Movie("Taken", 2012, "Liam", "Inglese");
    $taken->addActor("Tommaso");
    $taken->addActor("Gloria");



var_dump($mediterraneo);
var_dump($taken);
?>


</body>
</html>