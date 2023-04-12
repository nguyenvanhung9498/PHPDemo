<?php
function countCharact($number)
{
    $binary = random_bytes($number);
    $strRand = bin2hex($binary);
    echo "$strRand";

    $strRandArr = str_split($strRand);
    $strRandArrUnique = array_unique($strRandArr);

    $arrCounts = [];
    foreach ($strRandArrUnique as $unique) {
        $index = 0;
        $arrCount = ["ky_tu: $unique" => $index];
        foreach ($strRandArr as $value) {
            if ($unique == $value) {
                $index = $index +1 ;
                $arrCount["ky_tu: $unique"] = $index;
            }
        }
        $arrCounts[] = $arrCount;
    }
    echo "<br>";
    foreach ($arrCounts as $item) {
        foreach ($item as $id => $value){
            echo "$id: $value lần";
            echo '<br>';
        }
    }
}

countCharact(10);
?>