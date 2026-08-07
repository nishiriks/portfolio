<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dompdf\Dompdf;


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function act1(){
  if(isset($_POST['submit-compute'])){
    $number = $_POST['numbers'];
    $sum=0;
    $rem=0;

    if(is_numeric($number)){
      for ($i =0; $i<=strlen($number);$i++)
      {
        $rem = $number % 10;
        $sum = $sum + $rem;
        $number = $number / 10;
      }
      echo $sum;
    }else {
      echo "Please enter a number.";
    }
  }
}

function act2(){
  if (isset($_POST['submit-generate'])) {
    $TenDigitRandomNumber = rand(1000000000,9999999999);
    echo "ceu".$TenDigitRandomNumber;
  }
}

function act3(){
  if (isset($_POST['submit'])) {
    $word = $_POST['word'];
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $new_word = str_replace($vowels, "", $word);

    if ($new_word === $word) {
      echo "No vowels detected.";
    } else {
      echo $new_word;
    }
  }
}

function act4(){
  if (isset($_POST['generate'])) {
    $sentence = $_POST['sentence'];
    $words = explode(' ', $sentence);
    $result = array_filter($words); // remove empty elements
  }
  if (isset($result)) {
    if (count($result) > 0) {
      echo "<ol>";
        foreach ($result as $word) {
          echo "<li>$word</li>";
        }
        echo "</ol>";
      } else {
        echo "No words detected.";
      }
    }
}

function act5(){
  if (isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    if ($operation == "add") {
      $result = $num1 + $num2;
    } else if ($operation == "subtract") {
      $result = $num1 - $num2;
    } else if ($operation == "multiply") {
      $result = $num1 * $num2;
    } else if ($operation == "divide") {
      $result = $num1 / $num2;
    }
    echo $result;
  } else {
    echo "Please enter both numbers and select an operation.";
  }
}

function act6(){
  function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
    $ipaddress = 'UNKNOWN';
    return $ipaddress;
  }

  echo "Your IP address is: " . get_client_ip();
}

function act7(){
  function get_IP_address()
  {
    foreach (array(
      'HTTP_CLIENT_IP',
      'HTTP_X_FORWARDED_FOR',
      'HTTP_X_FORWARDED',
      'HTTP_X_CLUSTER_CLIENT_IP',
      'HTTP_FORWARDED_FOR',
      'HTTP_FORWARDED',
      'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER)) {
          foreach (explode(',', $_SERVER[$key]) as $ip2) {
            $ip2 = trim($ip2);
            if ((bool) filter_var($ip2, FILTER_VALIDATE_IP,
            FILTER_FLAG_IPV4 |
            FILTER_FLAG_NO_PRIV_RANGE |
            FILTER_FLAG_NO_RES_RANGE)) {
              return $ip2;
            }
          }
        }
      }
      return null;
    }
    if (isset($_POST['submit-address'])) {
      $ip2 =  get_IP_address();
      $loc = file_get_contents("http://ip-api.com/json/$ip2");

      $loc_o = json_decode($loc);

      echo "Country: " . $loc_o->country;
      echo "<br>";
      echo "Country Code: " . $loc_o->countryCode;
      echo "<br>";
      echo "Region: " . $loc_o->region;
      echo "<br>";
      echo "Region Name: " . $loc_o->regionName;
      echo "<br>";
      echo "City: " . $loc_o->city;
      echo "<br>";
      echo "Timezone: " . $loc_o->timezone;
      echo "<br>";
      echo  "Latitude: " . $loc_o->lat;
      echo "<br>";
      echo  "Longitude: " . $loc_o->lat;
    }
}

function act8(){
  if (!empty($_POST["email"])) {
    if (isset($_POST["send"])) {
      $mail = new PHPMailer(true);

      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'ceumls26@gmail.com';
      $mail->Password = 'emmygzovzuohatpt';
      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;

      $mail->setFrom('ceumls26@gmail.com');

      $mail->addAddress($_POST["email"]);

      $mail->isHTML(true);

      $mail->Subject = "Hello!";
      $mail->Body = "This is an automated message";

      $mail->send();
      echo "Sent successfully!";
    }
  }
}

function act9(){
   if(isset($_POST['text'])) {
       // sanitize user input
       $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

       // create new TCPDF object
       $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

       // set document information
       $pdf->SetCreator('Your Name');
       $pdf->SetAuthor('Your Name');
       $pdf->SetTitle('Title of your PDF');
       $pdf->SetSubject('Subject of your PDF');
       $pdf->SetKeywords('Keywords for your PDF');

       // add new page
       $pdf->AddPage();

       // set font and font size
       $pdf->SetFont('helvetica', '', 12);

       // add user input to PDF
       $pdf->Write(0, $text);

       ob_end_clean();
       // output PDF
       $pdf->Output('yourpdf.pdf', 'D');
     }
}

function act10(){
  if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $tmp = explode('.', $_FILES['image']['name']);
    $file_ext = end($tmp);
    // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152){
      $errors[]='File size must be less than 2 MB';
    }

    if(empty($errors)==true){
      move_uploaded_file($file_tmp,"images/".$file_name);
      // echo "Success";
      echo "<br>";
      echo "<img src='images/$file_name' width='400' height='250' alt='Uploaded Image'>";
    }else{
      print_r($errors);
    }
  }


}

 ?>
