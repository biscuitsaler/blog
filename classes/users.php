<?php
class User {
    public $id;
    public $pseudo;
    public $mail;
    public $pwd;
    public $lastname;
    public $firstname;
    public function __construct($id, $pseudo, $mail ,$pwd ,$lastname ,$firstname) {
    $this->id = $id;
    $this->pseudo = $pseudo;
    $this->mail = $mail;
    $this->pwd  = $pwd;
    $this->lastname = $lastname;
    $this->firstname = $firstname;
    }
}
 public static function verifierEmail($value){
        $value = strtolower(trim(strip_tags($value)));
        if(!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/", $value)){
            return false;
        }
        return true;
 }
 public static function verifierPwd($value){
        $value = strtolower(trim(strip_tags($value)));
        if(mb_strlen($value) < 4){
            return false;
        }
        return true;
    }
    public static function crypterPwd($value){
        return md5($value);
    }
?>
