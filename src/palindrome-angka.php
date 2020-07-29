<?php

function isPalindrome($angka){
    $sem = $angka;
    $res = 0;
    while($sem >= 1){
        $tem = $sem % 10;
        $res *= 10;
        $res += $tem;
        $sem /= 10;
    }
    if($angka == $res){
        return true;
    }
    return false;

}
    
function palindrome_angka($angka) {
    $sem = $angka;
    while (true) {
        if (isPalindrome($sem)) {
            return $sem;
        }
        $sem ++;
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo '<br>';
echo palindrome_angka(10); // 11
echo '<br>';
echo palindrome_angka(117); // 121
echo '<br>';
echo palindrome_angka(175); // 181
echo '<br>';
echo palindrome_angka(1000); // 1001
echo '<br>';


?>