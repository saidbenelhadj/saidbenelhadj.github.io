  <?php
  sleep(2);
  var_dump($_POST);
  $message = "Nom: " . $_POST['nom'] . "\r\n";
  $message .= "Entreprise : " . $_POST['entreprise'] . "\r\n";
  $message .= "Email : " . $_POST['email'] . "\r\n";
  $message .= "Tel : " . $_POST['tel'] . "\r\n";
  $message .= "Message : " . $_POST['message'] . "\r\n";
  $message .= "Objet : " . $_POST['objet'] . "\r\n";

  $subject = "Demande de " . $_POST['nom'] . ' ' . $_POST['entreprise'];
  $headers  = 'From: ' . $_POST['nom'] . ' ' . $_POST['entreprise'] . ' <'.$_POST['email'].'>' . "\r\n";
  $headers .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n";
  
  $reponse = @mail('bg.creaweb@gmail.com',$subject,$message,$headers);
  ?>