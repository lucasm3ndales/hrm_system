<?php
    include 'dataBank.php';

    function registerEmp($name, $cpf, $phone, $idAdmin) {
        connect();
        query("INSERT INTO employees(emp_name, emp_cpf, emp_phone, id_hr)  VALUES('$name', '$cpf', '$phone', '$idAdmin')");
        close();
    }

    function showEmp($idAdmin) {
        connect();
        $search = query("SELECT * FROM employees WHERE id_hr = '$idAdmin'");
        close();
        $results = [];
        if(mysqli_num_rows($search) > 0) {
            while($line = mysqli_fetch_assoc($search)) {
                $results[] = $line;
            }
        }
        return $results;
    }

    function showEditEmp($idEmp) {
        connect();
        $search = query("SELECT * FROM employees WHERE id_emp = '$idEmp'");
        close();
        $emp = mysqli_fetch_assoc($search);
        return $emp;
    } 

    function updateEmp($idEmp, $name, $cpf, $phone){
        connect();
        query("UPDATE employees SET emp_name = '$name', emp_cpf = '$cpf', emp_phone = '$phone' WHERE id_emp = '$idEmp'");
        close();
    }

    function deleteEmp($idEmp) {
        connect();
        query("DELETE FROM employees WHERE id_emp = '$idEmp'");
        close();
    }