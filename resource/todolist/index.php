<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>To-Do List</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>To-Do List</h1>
    <form method="post" action="index.php">
      <input type="text" name="task" placeholder="Add task">
      <button type="submit" name="submit">Add</button>
    </form>
    <?php
      session_start();

      if(isset($_POST['submit'])) {
        if(isset($_SESSION['tasks'])) {
          array_push($_SESSION['tasks'], $_POST['task']);
        }else {
          $_SESSION['tasks'] = array($_POST['task']);
        }
      }

      if (isset($_GET['delete'])) {
        $key = $_GET['delete'];
        unset($_SESSION['tasks'][$key]);
      }

      if (isset($_SESSION['tasks'])) {
        foreach ($_SESSION['tasks'] as $key => $task) {
          echo "<div class='task'>";
          echo "<p>$task</p>";
          echo "<a href='index.php?delete=$key'>Delete</a>";
          echo "</div>";
        }
      }
     ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
