<?php
$username = "keyjeyal";
$password = "admin1234";

// Store a string into the variable which
// need to be Encrypted
if (!empty($_GET['username'])) {
  if ($_GET['username'] == $username && $_GET['password'] == $password) {
    $simple_string = $_GET['password'];

    echo "Original String: " . $simple_string;

    $ciphering = "AES-128-CTR";

    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;

    $encryption_iv = '1234567891011121';

    $encryption_key = "GeeksforGeeks";

    $encryption = openssl_encrypt($simple_string, $ciphering,
    $encryption_key, $options, $encryption_iv);

    echo "Encrypted String: " . $encryption . "\n";
    header("Location: decrypt1.php?password=$encryption");
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Josefin+Sans:ital,wght@0,400;1,300;1,400&family=Julius+Sans+One&family=Manrope:wght@300;400&display=swap" rel="stylesheet">
    <title>Encryption Activity</title>
  </head>
  <body>
  <div class="container-fluid">
        <div class="card card-form">
          <h2 class="text-center text-light">Log In</h2>
          <form class="input-details" action="" method="GET">
            <label class="usern text-light">Username: </label>
            <input class="input" type="text" name="username" placeholder="                  @u  s  e  r  n  a  m  e" required>
            <br />
            <label class="usern text-light">Password: </label>
            <input class="input" type="password" name="password" placeholder="                   @p  a  s  s  w  o  r  d" required>
            <br />
            <br />
            <input class="btn submit-btn" type="submit" name="Encrypt" value="Login">
          </form>
        </div>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  </body>
</html>
