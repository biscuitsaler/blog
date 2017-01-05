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
    public static function identifier($email, $pwd){
        global $cnx;
        $val = array(':email'=>$email, ':pwd'=>$pwd);
        $req = "SELECT idUser, COUNT(idUser) as nb FROM user WHERE email = :email AND pwd = :pwd";
        $res = $cnx->prepare($req);
        $res->execute($val);
        $row = $res->fetch(PDO::FETCH_OBJ);
        if($row->nb == 0){
            return false;
        }
        return $row->idUser;
    }
?>
