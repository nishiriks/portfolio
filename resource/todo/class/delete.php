<?php
class delete extends config{
  public $task;

  public function __construct($id){
    $this->id= $id;
  }

  public function deleteTask(){
    $con= $this->con();
    $sql= "DELETE FROM `tbl_tdlist` WHERE `id`=  $this->id";
    $data= $con->prepare($sql);
    if($data->execute()){
      return true;
    }else {
      return false;
    }
  }
}
 ?>
