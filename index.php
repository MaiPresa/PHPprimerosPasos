<?php 
    $name = "Hola mundo";
    $isBool = true;
    $number = 25;
    $null;
    $array = [$name, $isBool, $number];

    echo $name;
    echo '<br>';
    $boolResult = $isBool ? "true" : "false";
    echo $boolResult;
    echo '<br>';
    echo $number;
    echo '<br>';
    echo gettype($null);

    echo '<br>';
    echo '<br>';

    print_r($array);

    // ---------------------------------------------------------------------------

    echo '<br>';
    echo '<br>';

    define('lowCase', 'hola gato');
    echo strtoupper(lowCase);
    echo '<br>';
    echo strlen(lowCase);
    echo '<br>';
    echo str_word_count(lowCase);
    echo '<br>';
    echo str_replace("gato", "michi", lowCase);

    echo '<br>';
    echo '<br>';

    $num1 = 3;
    $num2 = 6;

    echo $num1;
    echo '<br>';
    echo $num2;
    echo '<br>';
    echo ($num1 + $num2);

    echo '<br>';
    echo '<br>';

    $isTrue = 1;
    $isFalse = 0;

    echo gettype($isTrue);
    echo '<br>';
    echo gettype($isFalse);

    echo '<br>';
    echo '<br>';

    $isTrue = true;
    $isFalse = false;

    echo gettype($isTrue);
    echo '<br>';
    echo gettype($isFalse);
    
    echo '<br>';
    echo '<br>';

    function funcionSuma($a, $b){
        $resultado = $a + $b;
        return(
            $resultado
        );
    }

    $suma = funcionSuma(2, 9);
    $parImpar = ($suma % 2 == 0) ? "Es par" : "Es impar";

    echo $suma;
    echo '<br>';
    echo $parImpar;

    // ---------------------------------------------------------------------------

    echo '<br>';
    echo '<br>';

    $arrayNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    echo count($arrayNumeros);

    array_push($arrayNumeros, "Anacleta");
    echo '<br>';
    print_r($arrayNumeros);
    echo '<br>';
    array_push($arrayNumeros, "Rosa", "Turquesa");
    print_r($arrayNumeros);
    echo '<br>';
    $arrayNumerosAñadidos = [11, 12, 13, 14, 15];

    $arrayConcat = array_merge($arrayNumeros, $arrayNumerosAñadidos);
    print_r($arrayConcat);
    echo '<br>';
    
    $newArray = [];
    foreach ($arrayConcat as $value) {
        if(gettype($value) === "integer") {
            
            echo $value.'</br>';
            array_push($newArray, $value);
        }
    }

    function arrayOdd($e){
        return(
            $e & 1
        );
    }

    function arrayEven($e){
        return(
            !($e & 1)
        );
    }


    print_r(array_filter($newArray, "arrayOdd"));
    echo '<br>';
    print_r(array_filter($newArray, "arrayEven"));
    echo '<br>';
    echo max($newArray);
    echo '<br>';
    echo min($newArray);

    echo '<br>';
    echo '<br>';

    function textUpper($text) {
        echo strtoupper($text);
    }

    textUpper(lowCase);

    echo '<br>';

    define("upperCase", "HOLA GATO");

    function textLower($text) {
        echo strtolower($text);
    }

    textLower(upperCase);

    echo '<br>';
    echo '<br>';

    $arrayNombres = ["duffman", "moe", "homer", "bart", "lisa", "marge", "maggie", "burns", "flanders", "dr.Nick"];

    function arrayFirstUpper($a) {
        foreach ($a as $value) {
            echo ucwords($value).'</br>';
        }
    }

    arrayFirstUpper($arrayNombres);

    echo '<br>';
    echo '<br>';

    class Coche {
        public $marca = "Tesla";
        public $puertas = 4;
        public $colores = ["Gris", "Negro", "Blanco"];

        public function getMarca() {
            return (
                $this->marca
            );
        }

        public function getPuertas() {
            return (
                $this->puertas
            );
        }

        public function getColores() {
            return (
                $this->colores
            );
        }
    }

    $coche = new Coche();
    echo $coche->getMarca();
    echo '<br>';
    echo $coche->getPuertas();
    echo '<br>';
    $arrayCoche = $coche->getColores();
    echo join(", ", $arrayCoche);

?>