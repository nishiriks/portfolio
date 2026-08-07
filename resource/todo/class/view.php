<?php
class view extends config {

  public function viewData(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_tdlist` WHERE `status` = 'PENDING'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<h3 class='mb-4'>Pending Task</h3>";
    echo "<table class= 'table table-dark table-striped table-sm'>";
    echo "<thead>
            <tr>
              <th>Task Item</th>
              <th>Action</th>
            </tr>
          </thead><tbody>";
          foreach ($result as $data) {
            echo "<tr>";
            echo "<td>$data[item]</td>";
            echo "<td>
                  <a class='btn btn-info btn-sm' href='index.php?edit=$data[id]'>Mark as Completed</a>
                  <a class='btn btn-danger btn-sm' href='index.php?delete=$data[id]'>Delete Task</a>
                  </td>";
            echo "</tr>";
          }
    echo "</tbody></table>";
  }
  public function viewCompletedData(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_tdlist` WHERE `status` = 'COMPLETED'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<h3 class='mb-4 mt-5'>Completed Task</h3>";
    echo "<table class= 'table table-dark table-striped table-sm'>";
    echo "<thead>
            <tr>
              <th>Task Item</th>
              <th>Date Completed</th>
            </tr>
          </thead><tbody>";
          foreach ($result as $data) {
            echo "<tr>";
            echo "<td>$data[item]</td>";
            echo "<td>$data[date_completed]</td>";
            echo "</tr>";
          }
    echo "</tbody></table>";
  }
}
 ?>
