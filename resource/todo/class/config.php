<?php

class config {
  private $user= 'bsit3567_klleva';
  private $password= 'krizia20';
  public $pdo= null;

  public function con(){
    try{
      $this->pdo = new PDO('mysql:local=109.106.254.194:3306;dbname=bsit3567_klleva_todo',$this->user,$this->password);     //DATABASE LOG IN
    }catch (PDOException $e){
      die($e->getMessage());
    }
    return $this->pdo;
  }
}
?>
