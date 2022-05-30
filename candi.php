<?php
$candi_prenom = $_POST['prenom'];
$candi_nom = $_POST['nom'];
$candi_mail = $_POST['email'];
$candi_cv = $_POST['CV'];
$candi_lettre = $_POST['lettre'];

$mail_to = 'guilamic78@gmail.com';
$subject = 'Candidature';
$body_message = 'Candidature prenom :'.$candi_prenom. "/n";
$body_message .= 'nom :'.$candi_nom. "/n";
$body_message .= 'mail :'.$candi_mail. "/n"
$headers = 'From:';

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Your Job Application has been recieved. We will contact you shortly.');
        window.location = 'Careers.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message failed');
        window.location = 'Careers.html';
    </script>
<?php
}
?>
