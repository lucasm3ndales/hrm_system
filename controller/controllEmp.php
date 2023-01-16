<?php
    include '../model/crudEmp.php';

    session_start();
    $option = $_POST["option"];

    switch($option) {
        case 'register':
            registerEmp($_POST["name"], $_POST["cpf"], $_POST["phone"], $_SESSION["idAdmin"]);
            header("Location: ../view/registerEmp.php");
            break;
        case 'update':
            updateEmp($_POST["id"], $_POST["name"], $_POST["cpf"], $_POST["phone"]);
            header("Location: ../view/showEmp.php");
            break;
        case 'delete':
            deleteEmp($_POST["id"]);
            header("Location: ../view/showEmp.php");
            break;
        
    }