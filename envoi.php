<?php 
//Pour définir chaque input du formulaire, ajouter le signe de dollar devant

$msg = "Nom :\t$name\n";
$msg .= "Prénom :\t$first_name\n";
$msg .= "E-Mail :\t$email\n";
$msg .= "Message :\t$message\n\n";
$msg .= "Information supplémentaire :\n -Fonction :\t$function\n";
$msg .= "Société :\t$society\n";
$msg .= "Téléphone :\t$phone\n\n";

$recipient = "laly.teissier@gmail.com";
$subject = "Formulaire Site MUEW";

$mailheaders = "From: Mon test de formulaire<> \n";
$mailheaders .= "Reply-To: $email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyé !</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire a bien été envoyé !</P>";
echo "</BODY></HTML>";

?>