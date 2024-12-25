<?php

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    include "../../src/classes/RegisterUser.php";
    if (isset($_POST["emailRegister"])) {

        // $data = file_get_contents("php://input");
        // $userdata = json_decode($data, true);
    
        $nameregister = $_POST["nameRegister"];
        $emailregister = $_POST["emailRegister"];
        $passwordregister = $_POST["passwordRegister"];
        $repeatPasswordregister = $_POST["confirm-passwordRegister"];  
    
    
        $obj = new RegisterUser($nameregister, $emailregister, $passwordregister, $repeatPasswordregister);
    
        $validationResult = $obj->validate();
    
    
        var_dump($validationResult);
        exit;
    }
}

?>
