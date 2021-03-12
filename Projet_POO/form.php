<?php
if($_POST){
  $email = $_POST['email'];
  $message = $_POST['message'];
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "From: $email \r\nReply-to : $email\nX-Mailer:PHP";
  $subject="Page POO PHP ";
  $destinataire="marjorie.ngoupende@gmail.com";
  $body="$message";
  if(mail($destinataire,$subject,$body,$headers)) {
    $response['status'] = 'success';
    $response['msg'] = 'your mail is sent';
  } else {
    $response['status'] = 'error';
    $response['msg'] = 'Something went wrong';
  }
  echo json_encode($response);
}
?>