<?php
CONST LAST_NAME = "Hung";
function bai1()
{
    $myName = "Nguyen Van ";
    $myFullName = $myName.LAST_NAME;
    echo $myFullName."</br>";
    echo strlen($myFullName)."</br>";
    echo str_replace("Hung", "Hung A", $myFullName).'</br>';
}

function bai2()
{
    $project = [
        "name" => "careco",
        "projectManager" => "Le Viet Thang",
        "developers" => ["nguyen van hung", "le thanh tung", "nguyen xuan bao"],
        "testers" => ["nguyen thi hang", "hoang thanh binh"]
    ];
    $project["comtor"] = "nguyen thi linh";
    var_dump($project["comtor"]);
    echo $project["name"]."</br>";
    array_shift($project["developers"]);
    $project["developers"][2] = "nguyen van tam";
    var_dump($project);
    var_dump($project["developers"]);
    $project["developers"] = implode(', ', $project["developers"]);
    var_dump($project["developers"]);
}

bai1();
bai2();
?>