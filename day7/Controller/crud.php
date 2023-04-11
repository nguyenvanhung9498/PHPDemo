<?php

namespace Controller;
include_once 'Model/Task.php';


class CRUD {
    public function __construct(){
    }

    public function insertTask() {
        $user_id = $_REQUEST['user_id'];
        $title = $_REQUEST['title'];
        $description = $_REQUEST['description'];
        echo $user_id;
        echo $title;
        echo  $description;
        $responseData = [];

        if ($user_id != "" || $title != "" || $description != "") {
            try {
                $db_host ='localhost';
                $db_user ='root';
                $db_name ='demophp';
                $db_pass ='';

                $conn = new \PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
                $smst = $conn->prepare('INSERT INTO list_task (user_id, title, description) value (?, ? ,?)');

                $user_idSql = $user_id;
                $titleSql = $title;
                $descriptionSql = $description;
                $smst->bindParam(1, $user_idSql);
                $smst->bindParam(2, $titleSql);
                $smst->bindParam(3, $descriptionSql);

                $smst->execute();
                header('Location:list-task');

            } catch (Exception $e){
                echo "error when insert data";
                header('Location:login');
            }

        } else {
          header('Location:error');
        }
        echo json_encode($responseData);
    }
}