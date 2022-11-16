<?php
if(isset($_POST['mailform']))
{
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
    {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"aurecv"<aureliencv@gmail.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
        <html>
            <body>
                <div align="center">
                    <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br>
                    <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br>
                    <br>
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
<html lang="fr" >
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
            <h2>N'hésite pas à
            <br>me Contacter !</h2>
        </div>
        <div class="sub-title animate">
            <h4>Contact</h4>
            <p>Je suis à la recherche d'un stage pour une durée de 1 mois et 3 semaines, à compter du 16 mai 2022 au
                2 juillet 2022 (stage non rémunéré). Ce stage a pour but de découvrir votre entreprise, vos méthodes de
                travail et surtout d’acquérir de l’expérience en développement informatique.</p>
            <p>J'ai plusieurs objectifs lors de ce stage, le premier est de faire mes premiers pas en entreprise,
                le second est de continuer à approfondir et mettre en pratique mes connaissances afin de préparer au mieux
                mes études. Je suis passionné d'informatique et plus généralement de son développement. Je suis une personne
                motivée par le travail et particulièrement par le fait de progresser continuellement.</p>
            <form  action="" id="EmailForm" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit">
                <input type="text" name="nom"id="name" type="text" class="input" placeholder="Nom"value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>"/><br>
                <input type="email" name="mail" id="email" type="text" class="input" placeholder="Email"value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br>
                <textarea name="message"id="body" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br>
                <input name="mailform"type="submit" value="Envoyer !" id="envoyer"/><br><br>
            </form>
            <?php
            if(isset($msg))
            {
                echo $msg;
            }
            ?>
            <p class="sent-notification"></p>
            <p>Ou par: <a class="mail" href="mailto:aurelien.moignet22470@gmail.com">aurelien.moignet22470@gmail.com</a><br>
            <a>07.82.23.95.15</a></p>
            <div class="bottom-margin"></div>
        </div>
    </body>
</html>
