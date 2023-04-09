<?php
//bai 1
function electricBill($electricNumber)
{
    if ($electricNumber <= 50) {
        return $electricNumber * 3.5;
    } elseif ($electricNumber > 50 && $electricNumber <= 100) {
        return 50 * 3.5 + ($electricNumber - 50) * 4;
    } elseif ($electricNumber > 100 && $electricNumber <= 200) {
        return 50 * 3.5 + 50 * 4 + ($electricNumber - 100) * 5;
    }
    return 50 * 3.5 + 50 * 4 + 100 * 5 + ($electricNumber - 200) * 6;
}

echo electricBill(50) . '</br>';
echo electricBill(60) . '</br>';
echo electricBill(150) . '</br>';
echo electricBill(240) . '</br>';

// bai 2 cach 1
function printInteger1($arrayInt)
{
    sort($arrayInt);
    foreach ($arrayInt as $value) {
        switch ($value) {
            case 1:
                echo '1-mot';
                break;
            case 2:
                echo '2-hai';
                break;
            case 3:
                echo '3-ba';
                break;
            case 4:
                echo '4-bon';
                break;
            case 5:
                echo '5-nam';
                break;
            case 6:
                echo '6-sau';
                break;
            case 7:
                echo '7-bay';
                break;
            case 8:
                echo '8-tam';
                break;
            case 9:
                echo '9-chin';
                break;
            default:
                echo '10-muoi';
                break;
        }
    }
}

//bai 2 cach 2
function printInteger2($arrayInt)
{
    sort($arrayInt);
    foreach ($arrayInt as $value) {
        if ($value == 1) {
            echo '</br>' . '1-mot';
        } elseif ($value == 2) {
            echo '2-hai';
        } elseif ($value == 3) {
            echo '3-ba';
        } elseif ($value == 4) {
            echo '4-bon';
        } elseif ($value == 5) {
            echo '5-nam';
        } elseif ($value == 6) {
            echo '6-sau';
        } elseif ($value == 7) {
            echo '7-bay';
        } elseif ($value == 8) {
            echo '8-tam';
        } elseif ($value == 9) {
            echo '9-chin';
        } else {
            echo '10-muoi';
        }
    }
}

printInteger1([1, 2, 6, 8, 9, 3, 4, 5, 10, 7]);
printInteger2([1, 2, 6, 8, 9, 3, 4, 5, 10, 7]);

// bai 3
function infoSchoolAndStudents($schools, $students)
{
    $studentsInShool = [];
    foreach ($schools as $schoolInfo) {
        $studentsInAshool = ['nameSchool' => $schoolInfo['name'], 'students' => []];
        foreach ($students as $studentInfo) {
            if ($studentInfo['school_id'] == $schoolInfo['id']) {
                $studentsInAshool['students'][] = $studentInfo['name'];
            }
        }
        $studentsInShool[] = $studentsInAshool;
    }
    foreach ($studentsInShool as $value) {
        var_dump($value );
    }
}

infoSchoolAndStudents([['id' => 1, 'name' => 'sch1'], ['id' => 2, 'name' => 'sch2'], ['id' => 3, 'name' => 'sch3']],
    [['name' => 'stuA', 'school_id' => 1], ['name' => 'stuB', 'school_id' => 2], ['name' => 'stuC', 'school_id' => 2], ['name' => 'stuD', 'school_id' => 1]]);

// bai 4
function printUsersInfo($users, $posts){
    $usersInfors = [];
    foreach ($users as $user){
        $usersInfor = [];
        foreach ($posts as $post){
            if ($user['id'] == $post['userId']){
                $usersInfor['id'] = $post['userId'];
                $usersInfor['name'] = $user['name'];
                $usersInfor['postName'] = $post['name'];
                $usersInfors[] = $usersInfor;
                break;
            }
        }
    }
    var_dump($usersInfors);
}
echo '<br>';
echo '<br>';
echo '<br>';
printUsersInfo([['id'=>1,'name'=>'user1'], ['id'=>2,'name'=>'user2'], ['id'=>3,'name'=>'user3']],
    [['userId'=>1, 'name'=>'post1'], ['userId'=>2, 'name'=>'post2']], ['userId'=>3, 'name'=>'post1']);

?>