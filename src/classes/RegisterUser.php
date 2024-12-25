<?php
class RegisterUser{
    public $nameregister;
    public $emailregister;
    private $passwordRegister;
    private $repeatpasswordRegister;

    public function __construct($nameregister, $emailregister, $passwordRegister, $repeatpasswordRegister) {
        $this->nameregister = $nameregister;
        $this->emailregister = $emailregister;
        $this->passwordRegister = $passwordRegister;
        $this->repeatpasswordRegister = $repeatpasswordRegister;
    }

    private function emptyInputs() {
        if(empty($this->nameregister) || empty($this->emailregister) || empty($this->passwordRegister) || empty($this->repeatpasswordRegister)) {
            return false;
        }
        return true;
    }

    private function invalidname() {
        if (!preg_match("/^[a-zA-Z- ]*$/", $this->nameregister)) {
            return false;
        }
        return true;
    }

    private function invalidEmail() {
        if (!filter_var($this->emailregister, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    private function pwdMatch() {
        if ($this->passwordRegister !== $this->repeatpasswordRegister) {
            return false;
        }
        return true;
    }

    public function validate() {
        if (!$this->emptyInputs()) {
            return ['success' => false, 'message' => 'All fields are required.'];
        }
        if (!$this->invalidname()) {
            return ['success' => false, 'message' => 'Invalid name format. Only letters allowed.'];
        }
        if (!$this->invalidEmail()) {
            return ['success' => false, 'message' => 'Invalid email format.'];
        }
        if (!$this->pwdMatch()) {
            return ['success' => false, 'message' => 'Passwords do not match.'];
        }
        return ['success' => true, 'message' => 'Validation successful.'];
    }
    public function addData()
    {
        $validatiovalue = $this->validate();
        if($validatiovalue["success"])
        {
            
        }
    }

}
?>
