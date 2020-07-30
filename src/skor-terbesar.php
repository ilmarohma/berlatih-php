<?php
function skor_terbesar($arr){
    $arr_sem=[];
    $arr_res = [];
    foreach ($arr as $data) {
      if (in_array($data["kelas"], $arr_sem)) {
        $curr_score = $arr_res[$data["kelas"]]["nilai"];
        if($data["nilai"] > $curr_score){
          $arr_res[$data["kelas"]] = $data;
        }
      }
      else{
        array_push($arr_sem, $data["kelas"]);
        $kelas = $data["kelas"];
        $arr_res += [$kelas => $data];
      }
    }
    return $arr_res;
    
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
];

echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>