<?php

if (isset($_POST['name'])) {
  
  // set variables for the field specified.
  
  $name = $_POST['fullname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $policy = $_POST['policy'];
  
  //create a new file for user
  
  $handle = fopen("$username.txt", "w");
  $data .= file_put_contents($name .$username .$email .$message .$policy);
  //store user input into the file
  fwrite($handle,$data);
  fclose($handle);
 
}

echo 'your message sent';
?>
