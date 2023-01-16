<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <title>Hrm-system</title>
</head>

<body style="background-image: linear-gradient(to right, #B9D7EA, #205295); font-family: Georgia, 'Times New Roman', Times, serif;">
    <nav class="navbar navbar-expand-lg" style="background-color: #0A2647;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: #B9D7EA;">Hrm-system</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #B9D7EA;">
                            Gerenciar cooperados
                        </a>
                        <ul class="dropdown-menu" style="background-color: #B9D7EA;">
                            <li><a class="dropdown-item" href="./registerEmp.php" style="color: #0A2647;">Cadastrar cooperados</a></li>
                            <li><a class="dropdown-item" href="./showEmp.php" style="color: #0A2647;" aria-current="page">Lista de cooperados</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #B9D7EA;">
                            <?php
                            session_start();
                            echo $_SESSION["name"];
                            ?>
                        </a>
                        <ul class="dropdown-menu" style="background-color: #B9D7EA;">
                            <li><a class="dropdown-item" href="../controller/controllAdmin.php?option=exit" style="color: #0A2647;">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="height: 10vh;"></div>
    <div class="container-lg mt-5   " style="justify-content: center;">
        <div class="card p-2" style="background-color:#0A2647;">
            <div class="card-body">
                <h3 class="text-center" style="color:#B9D7EA;">Visualizar Estudantes</h3>
                <hr style="color: #B9D7EA;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="color: #B9D7EA;">Nome</th>
                            <th scope="col" style="color: #B9D7EA;""">Cpf</th>
                            <th scope="col" style="color: #B9D7EA;">Celular</th>
                            <th scope="col" style="color: #B9D7EA;">Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../model/crudEmp.php';
                            $results = showEmp($_SESSION["idAdmin"]);
                            foreach($results as $emp){
                                echo "
                                    <tr>
                                        <td style='color: #B9D7EA;'>$emp[emp_name]</td>
                                        <td style='color: #B9D7EA;'>$emp[emp_cpf]</td>
                                        <td style='color: #B9D7EA;'>$emp[emp_phone]</td>
                                        <td><a class='btn btn-warning' href='editEmp.php?id=$emp[id_emp]'>Gerenciar</a></td>
                                    </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
        <div class="text-center p-3" style="background-color: #0A2647; color: #B9D7EA;">
            © 2020 Copyright:
            <a href="#" style="text-decoration: none; color: #B9D7EA;">Human resource management system</a>
        </div>
    </footer>
    <script src="../assets/bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.js"></script>
</body>

</html>