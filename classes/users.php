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
?>
