<?php
class insert extends config{
  public $task;

  public function __construct($task){
    $this->task= $task;
  }

  public function insertTask(){
    $con= $this->con();
    $sql= "INSERT INTO `tbl_tdlist`(`item`) VALUES ('$this->task')";
    $data= $con->prepare($sql);
    if($data->execute()){
      return true;
    }else {
      return false;
    }
  }
}
 ?>
