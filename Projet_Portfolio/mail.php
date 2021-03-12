
<?php
if($_POST){//si pas de méthode POST le script ne fera rien//
  $firstname = $_POST['firstname'];//les variables prennent les valeurs POST envoyées//
  $email = $_POST['email'];
  $name = $_POST['name'];
  $message = $_POST['message'];
  $headers = "MIME-Version: 1.0\r\n";//créer le header du mail et que le format est bien un mail//
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP";//pour dire de qui ça vient//
  $subject="Page perso de Marjorie ";//chaîne de caractères//
  $destinataire="marjorie.ngoupende@gmail.com";// envoi vers ma boîte email//
  $body="$message";
  if(mail($destinataire,$subject,$body,$headers)) {//si mon mail contient tout () alors il sera envoyé//
    $response['status'] = 'success';
    $response['msg'] = 'your mail is sent';
  } else {//sinon pb alors un message d'erreur s'affichera//
    $response['status'] = 'error';
    $response['msg'] = 'Something went wrong';
  }
  echo json_encode($response);//Retourne un JSON encodé en tant que chaîne de caractères en cas de succès ou FALSE si une erreur survient. //
}
?>