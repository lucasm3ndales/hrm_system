<?php
    include 'dataBank.php';
    
    function registerUser($name, $password) {
        connect();
        $search = query("SELECT * FROM hr_manager WHERE hr_name = '$name'");
        if(mysqli_num_rows($search) > 0) {
            echo "
                <script>
                    alert('Essa conta já  foi registrada !');
                    window.location.href = '../view/registerAdmin.html';
                </script>
            ";
            
        } else {
            query("INSERT INTO hr_manager(hr_name, hr_password ) VALUES ('$name','$password')");
            header("Location: ../view/registerAdmin.html");
        }
        close();
    }

    function loginUser($name) {
        connect();
        $search = query("SELECT * FROM hr_manager WHERE hr_name = '$name'");
        $result = mysqli_fetch_assoc($search);
        close();
        return $result;
    }

?>