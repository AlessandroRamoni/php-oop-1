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
        public $lingua;

        public function __construct($_titolo, $_anno, $_protagonista, $_lingua){
            $this->titolo=$_titolo;
            $this->anno=$_anno;
            $this->protagonista=$_protagonista;
            $this->lingua=$_lingua;
        }
    


    }

    $mediterraneo = new Movie("Mediterraneo",1991,"Abatantuono","Italiano");

    $taken = new Movie("Taken", 2012, "Liam", "Inglese");




var_dump($mediterraneo);
var_dump($taken);
?>

</body>
</html>