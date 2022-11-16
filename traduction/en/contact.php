<?php
if(isset($_POST['mailform']))
{
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
    {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"VOTRE NOM"<email-expediteur@example.org>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';

        mail("aurelien.moignet22470@gmail.com", "CONTACT - aureliencv.com", $message, $header);
        $msg="Votre message a bien été envoyé !";
    }
    else
    {
        $msg="Tous les champs doivent être complétés !";
    }
}
?>
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/about.css">
        <link href="image\logo.png" rel="icon" type="image/png" sizes="16x16" >

        <title>Aurélien Moignet</title>
    </head>
    <body>
        <div class="logo ">
            <div class="logo-inner animate">
                <a class="text-logo" href="index.html">Home</a>
            </div>
        </div>
        <div class="title animate">
            <h2>Do not hesitate to
            <br>Contact me !</h2>
        </div>
        <div class="sub-title animate">
            <h4>Contact</h4>
            <p>I am looking for an traineeship for a period of 1 month and 3 weeks, starting May 16, 2022 at
               July 2, 2022 (unpaid traineeship). The purpose of this traineeship is to discover your company, your methods of
               work and especially to gain experience in computer development.</p>
            <p>I have several objectives during this traineeship, the first is to make my first steps in a company,
               the second is to continue to deepen and put into practice my knowledge in order to best prepare
               my studies. I am passionate about computers and more generally about its development. I am a person
               motivated by the work and especially by the fact of progressing continuously.</p>
            <form  action="" id="EmailForm" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit">
                <input type="text" name="nom"id="name" type="text" class="input" placeholder="Name"value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>"/><br>
                <input type="email" name="mail" id="email" type="text" class="input" placeholder="Email"/value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br>
                <textarea name="message"id="body" placeholder="Your message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br>
                <input name="mailform"type="submit" value="Sent !" id="envoyer"/><br><br>
            </form>
            <?php
            if(isset($msg))
            {
                echo $msg;
            }
            ?>
            <p class="sent-notification"></p>
            <p>Or: <a class="mail" href="mailto:aurelien.moignet22470@gmail.com">aurelien.moignet22470@gmail.com</a></p>
            <div class="bottom-margin"></div>
        </div>
    </body>
</html>
