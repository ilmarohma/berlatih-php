<?php

function papan_catur($angka) {
    $res = "";
    $flag = 0;
    for ($i=0; $i < $angka ; $i++) { 
        for ($j=0; $j < $angka ; $j++) { 
            if($flag==0){
                $res = $res."#&nbsp&nbsp";
            }
            else{
                $res = $res."&nbsp&nbsp#";
            }
        }
        $res = $res."<br>";
        if($flag == 0){
            $flag = 1;
        }
        else{
            $flag = 0;
        }
    }
    return $res;
}

// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/