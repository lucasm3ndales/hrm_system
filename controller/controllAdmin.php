<?php
    include '../model/crudAdmin.php';

    $option = $_POST["option"];

    if(isset($_POST["option"])) {
        $option = $_POST["option"];
    } else {
        $option = $_GET["option"];
    }

    switch($option) {
        case 'register':
            registerUser($_POST["name"], sha1($_POST["password"]));
            break;
        case 'login':
            $name = $_POST["name"];
            $password = sha1($_POST["password"]);
            $searchBank = loginUser($name);
            $idAdmin = $searchBank["id_hr"];
            if($searchBank["hr_name"] == $name and $searchBank["hr_password"] == $password) {
                session_start();
                $_SESSION['name'] = $name;
                $_SESSION['idAdmin'] = $idAdmin;
                header("Location: ../view/showEmp.php");
            } else {
                echo "
                    <script>
                        alert('Usuário ou senha incorretos!');
                        window.location.href = '../view/loginAdmin.html';
                    </script>
                ";
            }
            break;
        case 'exit':
            session_start();
            session_destroy();
            echo "<script>window.location = '../view/loginAdmin.html'</script>";
            break;
    }
?>