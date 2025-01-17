<?php

class SignupContr {

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    private function emptyInput() {
        $result;
        if (empty($this->$uid) || empty($this->$pwd) || empty($this->$pwdrepeat) || empty($this->$email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    
    private function invalidUid() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    
    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    
    private function pwdMatch() {
        $result;
        if ($this->pwd !== $this->pwdrepeat) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    
    private function pwdMatch() {
        $result;
        if ($this->checkUser($this->$uid, $this->$email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}

?>