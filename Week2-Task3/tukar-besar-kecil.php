<?php
function tukar_besar_kecil($string){
    $res ="";
    for ($i=0; $i < strlen($string) ; $i++){
        if(ord($string[$i]) >= 65 and ord($string[$i]) <= 90){
            $res = $res.chr(ord($string[$i])+32);
        }
        else if ((ord($string[$i]) >= 97 and ord($string[$i]) <= 122)){
            $res = $res.chr(ord($string[$i])-32);
        }
        else{
            $res = $res.$string[$i];
        }
    }
    return $res;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
echo "<br>";

?>