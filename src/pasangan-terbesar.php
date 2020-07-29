<?php
function pasangan_terbesar($angka){
    $st_angka = strval($angka);
    $res = 0;
    for ($i=0; $i < strlen($st_angka)-1; $i++) { 
        $sem = substr($st_angka, $i, 2);
        $temp = (int) $sem;
        if($temp > $res){
            $res = $temp;
        }
    }
    return $res;

}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>";
echo pasangan_terbesar(12783456); // 83
echo "<br>";
echo pasangan_terbesar(910233); // 91
echo "<br>";
echo pasangan_terbesar(71856421); // 85
echo "<br>";
echo pasangan_terbesar(79918293); // 99

?>