<?php


include "../DB_connection.php";

 if(isset( $_POST['name']))
 $name = $_POST['name'];
 if(isset( $_POST['email']))
 $email = $_POST['email'];
 if(isset( $_POST['message']))
 $message = $_POST['message'];
 if(isset( $_POST['subject']))
 $subject = $_POST['subject'];

 $status =1;


 
// $name = $_POST['name'];
// $email = $_POST['email'];
// $message = $_POST['message'];
// $subject = $_POST['subject'];
// header('Content-Type: application/json');
// if ($name === ''){
//   print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
//   exit();
// }
// if ($email === ''){
//   print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
//   exit();
// } else {
//   if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//   print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
//   exit();
//   }
// }
// if ($subject === ''){
//   print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
//   exit();
// }
// if ($message === ''){
//   print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
//   exit();
// }
$content="From: $name \nEmail: $email \nMessage: $message";
// $recipient = "youremail@here.com";
$mailheader = "From: $email \r\n";
// mail( $subject, $content, $mailheader) or die("Error!");
// print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
// exit();


$sql = "INSERT INTO `complain`(`content`,  `mailheader`, `fname`,`status`,`topic`)  VALUES(?,?,?,?,?)";

 // $sql2 = "INSERT INTO `avgscore` (`student_id`) VALUES (?)";
 $stmt = $conn->prepare($sql);
 $stmt->execute([$content, $mailheader, $name , $status,$subject]);

 header("Location:../../LienHe/index.html");
 print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
 exit();


?>