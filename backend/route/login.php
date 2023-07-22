<?php
include_once("../database/database.php");
include_once("../model/user.php");
include_once("../controller/login.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['route'])) {

    $userModel = new UserModel();
    $loginController = new LoginController($userModel);

    if ($_POST['route'] === "login") {

        $response = $loginController->loginUser($_POST);

        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
