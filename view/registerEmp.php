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
                            <li><a class="dropdown-item" href="./registerEmp.php" style="color: #0A2647;" aria-current="page">Cadastrar cooperados</a></li>
                            <li><a class="dropdown-item" href="./showEmp.php" style="color: #0A2647;">Lista de cooperados</a></li>
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
    <div style="height: 12vh;"></div>
    <div class="container-lg mt-5   " style="display: flex; justify-content: center;">
        <div class="card login-form" style="background-color:#0A2647;">
            <div class="card-body">
                <h1 class="card-title text-center" style="color:#B9D7EA;">Cadastrar cooperado</h1>
                <div class="card-text">
                    <form action="../controller/controllEmp.php" method="post">
                        <div class="form-group mb-2">
                            <label for="name" style="color: #B9D7EA;">Nome:</label>
                            <input class="form-control  form-control-sm" type="text" name="name" id="name" placeholder="Nome do cooperado" >
                        </div>
                        <div class="form-group mb-2">
                            <label for="cpf" style="color:#B9D7EA; font-family:Arial, Helvetica, sans-serif">Cpf:</label>
                            <input class="form-control  form-control-sm" type="text" name="cpf" id="cpf" aria-describedby="cpfHelp"
                            pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF no formato xxx.xxx.xxx-xx" placeholder="Cpf do cooperado" 
                            required maxlength="14">
                            <small id="cpfHelp" class="form-text" style="color: #EB455F;">
                                formato do Cpf: xxx.xxx.xxx-xx
                            </small>
                        </div>
                        <div class="form-group mb-2">
                            <label for="phone" style="color:#B9D7EA; font-family:Arial, Helvetica, sans-serif"">Phone:</label>
                            <input class=" form-control form-control-sm" type="text" name="phone" id="phone" 
                            pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" title="Digite o celular no formato (xx) xxxxx-xxxx" placeholder="Celular do cooperado"
                            required maxlength="14">
                            <small id="cpfHelp" class="form-text" style="color: #EB455F;">
                                formato do Telefone: (xx) xxxxxxxxx
                            </small>
                        </div>
                        <button type="submit" name="option" value="register" class="btn btn-md btn-success btn-block form-control mt-2 mb-2">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
        <div class="text-center p-3" style="background-color: #0A2647; color: #B9D7EA;">
            © 2020 Copyright:
            <a href="#" style="text-decoration: none; color: #B9D7EA;">Human resource management system</a>
        </div>
    </footer>
    <script src="./js/jquery-3.6.2.min.js"></script>
    <script src="./js/jquery.maskedinputs.js"></script>
    <script src="./js/inputMasks.js"></script>
    <script src="../assets/bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.js"></script>
</body>

</html>