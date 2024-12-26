<?php

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if (isset($_POST["emailRegister"])) {
        require_once "../../src/classes/RegisterUser.php";



    
        $nameregister = $_POST["nameRegister"];
        $emailregister = $_POST["emailRegister"];
        $passwordregister = $_POST["passwordRegister"];
        $repeatPasswordregister = $_POST["confirm-passwordRegister"];  
    
    
        $obj = new RegisterUser($nameregister, $emailregister, $passwordregister, $repeatPasswordregister);
    
        $obj->addData();
    


    }
}

?>
