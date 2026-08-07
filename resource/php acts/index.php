<?php

require_once "function.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  <div class="borders">
    <h1 class="activity">Activities</h1>

  </div>
  <!-- activity 1 -->
  <div class="container container-act">
    <div class="container">
      <div class="activity1" id="activity1">
        <h1 class="header-title">Get the sum of numbers</h1>
        <form class="addNumbers" action="" method="POST">
          <input type="text" name="numbers">
          <input type="submit" name="submit-compute"value="Compute">
        </form>
        <h3 class="echoed">
          <?php
          act1();
          ?>
        </h3>
      </div>
    </div>
  </div>

  <!-- activity2 -->
  <div class="container container-act">
    <div class="activity2" id="activity2">
      <h1 class="header-title">Generate unique I.D</h1>
      <form class="generateNum" method="post">
        <input type="submit" name="submit-generate" value="Generate">
      </form>

      <h3 class="echoed">
        <?php
        act2();
        ?>
      </h3>
    </div>
  </div>

  <!-- activity3 -->
  <div class="container container-act">
    <div class="activity3" id="activity3">
      <h1 class="header-title">Detect Vowels</h1>
      <form method="POST">
        <input type="text" id="word" name="word">
        <input type="submit" name="submit" value="Submit">
      </form>

      <h3 class="echoed">
        <?php
        act3();
        ?>
      </h3>
    </div>
  </div>

  <!-- activity4 -->
  <div class="container container-act">
    <div class="activity4" id="activity4">
      <h1 class="header-title">Ordered Words</h1>
      <form method="POST">
        <input type="text" name="sentence" id="sentence">
        <input type="submit" name="generate" value="Generate">
      </form>

      <h3 class="echoed">
        <?php
        act4();
        ?>
      </h3>
    </div>
  </div>

  <!-- activity5 -->
  <div class="container container-act">
    <div class="activity5" id="activity5">
      <h1 class="header-title">Calculator</h1>
      <form  method="post">
        <input type="number" name="num1" class="num1" required>
        <input type="number" name="num2" class="num2" required>

        <select id="operation" name="operation">
          <option value="add">Addition</option>
          <option value="subtract">Subtraction</option>
          <option value="multiply">Multiplication</option>
          <option value="divide">Division</option>
        </select>
        <br>
        <br>
        <input type="submit" class="calculate" value="Calculate">
      </form>
      <h3 class="echoed">
        <?php
        act5();
        ?>
      </h3>
    </div>
  </div>

  <!-- activity6 -->
  <div class="container container-act">
    <div class="activity activity6" id="activity6">
      <h1 class="header-title">Detect IP Address</h1>
      <h3 class="echo">
        <?php
        act6();
        ?>
      </h3>

      <form class="location" method="post">
        <input class="submit" type="submit" name="submit-ip" value="Detect">
      </form>
    </div>
  </div>

  <!-- activity7 -->
  <div class="container container-act">
    <div class="activity activity7" id="activity7">
      <h1 class="header-title">Locate User's Address</h1>


      <?php
      act7();
      ?>

      <form method="post">
        <input class="submit" type="submit" name="submit-address" value="Locate">
      </form>
    </div>
  </div>

  <!-- activity8 -->
  <div class="container container-act">
    <h1 class="header-title">Send an email</h1>
    <form action="" method="post">
      <input type="email" name="email" value required placeholder="youremail@gmail.com" required>
      <input type="submit" name="send" value="Send">
    </form>
    <h3 class="echoed">
      <?php
      act8();
      ?>
    </h3>
  </div>


  <!-- activity9 -->
  <div class="container container-act">
    <h1 class="header-title">PDF Converter </h1>
    <form method="post" action="pdf.php">
      <textarea id="text" name="text"></textarea>
      <input class="submit submit-area" type="submit" name="submit-pdf" value="Convert">
    </form>
  </div>


  <!-- activity10 -->
  <div class="container container-act">
    <div class="activity10" id="activity10">
      <h1 class="header-title">Insert and View Image</h1>

      <?php
      act10();
      ?>

      <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*">
        <input class="submit-upload" type="submit" value="Upload">
      </form>


      <style>
      img {
        display: block;
        margin: auto;
        margin-bottom: 10px;
      }
      </style>


    </div>


  </div>
</div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
