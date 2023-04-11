<?php

namespace Controller;
include_once 'Model/Task.php';


class Login {
    public function __construct(){
    }

    public function checkLogin() {
        $username = $_REQUEST['username'];
        $responseData = [];
        if ($username == '1') {
            header('Location:list-task');
        } else {

            header('Location:error');
        }
        echo json_encode($responseData);
    }
}