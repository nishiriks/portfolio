<?php
$decryption_iv = '1234567891011121';

$decryption_key = "GeeksforGeeks";
$ciphering = "AES-128-CTR";
$options = 0;

$decryption=openssl_decrypt ($_GET['password'], $ciphering,
		$decryption_key, $options, $decryption_iv);

echo "Decrypted String: " . $decryption;
echo "<br />";

if ($decryption == "admin1234") {
  echo " You are logged in";
	echo "<br />";
} else {
	echo "<br />";
  echo "Invalid Password";
}
?>