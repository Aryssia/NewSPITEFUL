<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php        
    if(isset($_COOKIE['mode']))
     {
        if($_COOKIE['mode']=='sombre')
        {
            echo"<link rel='stylesheet' type='text/css' href='style2.css'>"; 
        }
        else{
            echo"<link rel='stylesheet' type='text/css' href='style1.css'>";
        }
     }
     else
     {
        echo"<link rel='stylesheet' type='text/css' href='style1.css'>";
     }
    ?>

    <link rel="icon" href="images/Illu/logo_final.png"/>
    <title>Cookies Politiques de confidentialités</title>
</head>
<body>
        <nav id="Menunav">
            <div id="logomenu"><a href="index.php"></a></div>
        
            <ul>
                <li>
                    <div id="MODE">
                        <a id="mode1" href='polcookies.php?mode=1'>CLAIR</a>
                        <span class="tiret">-</span>
                    <a id="mode2" href='polcookies.php?mode=2'>SOMBRE</a>
                    </div>
                </li>
                <li>
                    <div id="boutret"><a href="index.php">RETOUR</a></div>
                </li>
            </ul>
        
        </nav>
     

    <div class="slide" id="cookies">
    <div class="wrapper">
        <div id="CHARTC">
            <h1>Charte des cookies</h1>
                <p>Cette Charte des Cookies décrit la façon dont les cookies sont utilisés sur notre site internet et comment vous pouvez activer ou désactiver les cookies. Elle couvre en particulier ce qui suit:</p>
        </div>

        <h2>1. QU'EST-CE QU'UN COOKIE ?</h2>
            <p>Un cookie est une donnée qui est stockée sur un ordinateur, une tablette ou un smartphone lorsque vous naviguez sur Internet de façon à ce que cet ordinateur, cette tablette ou ce smartphone ("appareil") puisse être reconnu plus tard. Les cookies enregistrés par nous ou par des tiers lorsque vous visitez notre site Internet ne vous reconnaissent pas personnellement en tant qu'individu ; ils reconnaissent seulement l'appareil que vous êtes en train d'utiliser. Les cookies ne causent aucun dommage, de quelque sorte que ce soit, à votre appareil mais ils vous permettent de bénéficier de certaines fonctionnalités de notre site internet ; par exemple, ils vous permettent de retourner sur des pages sur lesquelles vous avez effectué des recherches. Ils nous aident également à garder notre site Internet sécurisé, nous rappeler de vos préférences et à personnaliser le contenu de notre site Internet de sorte qu'il soit plus adapté à vous.

            Pour plus d'informations sur les différents types de cookies enregistrés sur vos appareils lorsque vous visitez notre site Internet, veuillez consulter notre charte des cookies ci dessous.

            Vous seul(e) choisissez si vous souhaitez avoir des cookies enregistrés sur votre appareil et vous pouvez facilement contrôler l'enregistrement des cookies. Pour une information spécifique sur la gestion et le contrôle des cookies, veuillez vous référer à la gestion des cookies en bas de cette page.

            Pourquoi avons-nous une charte sur les cookies ?

            L'établissement de cette charte sur les cookies fait partie intégrante de notre volonté de respecter la législation récente mais aussi de nous assurer que nous sommes ouverts et transparents vis-à-vis de vous sur ce qui se passe lorsque vous venez sur notre site Internet.</p>

        <h2>2. NOTRE CHARTE DES COOKIES</h2>
            <p>Pour pouvoir utiliser pleinement notre site Internet, votre ordinateur, votre tablette ou votre Smartphone ("appareil"), vous devez accepter les cookies. Les cookies enregistrés via notre site Internet ne stockent cependant pas vos données personnelles ou sensibles (telles que votre nom, votre adresse ou vos données de paiement).</p>

            <h3>COOKIES ANALYTIQUES</h3>
                <p>Ces cookies collectent des données relatives à l'utilisation de notre site Internet (par exemple, sur les pages que vous consultez le plus souvent et si vous avez reçu des messages d'erreur de nos pages internet). Les données agrégées provenant de ces cookies sont uniquement utilisées pour améliorer le fonctionnement de notre site Internet.</p>

        <h2>3. GESTION DES COOKIES</h2>
            <h3>QUE SE PASSE-T-IL SI JE N'AUTORISE PAS LES COOKIES ?</h3>
                <p>Si les cookies ne sont pas autorisés sur votre ordinateur, votre tablette ou votre smartphone ("appareil"), votre expérience sur notre site  internet peut être limitée (par exemple, il se peut que vous ne puissiez naviguer librement et sur tout le site ou que vous ne puissiez pas utiliser les fonctionnalités proposées.</p>

            <h3>COMMENT DÉSACTIVER / ACTIVER DES COOKIES WWW.SPITEFULPRODUITSPHARMA.BE ?</h3>
                <p>La désactivation / activation de cookies se fait par l'intermédiaire de votre navigateur Internet. Nous expliquons ci-dessous comment gérer les cookies sur votre ordinateur par l'intermédiaire des principaux navigateurs Internet. Pour plus d'informations sur comment gérer les cookies sur votre tablette et/ou votre mobile, veuillez consulter votre documentation ou des fichiers d'aide en ligne.</p>

        <div class="internet" id="google">
            <div class="block">
                <img src="images/PNG/googlechrome.png">
                <h4>GOOGLE CHROME</h4>
            </div>
            <p class="textinet">Dans le menu <b>Paramètres</b>, sélectionnez "Afficher les paramètres avancés" en bas de page. <br/><br/>

            Cliquez sur le bouton <b>"Paramètres de contenu"</b> dans la section <b>Confidentialité</b><br/><br/>

            La section située en haut de la page qui apparaît alors vous en dit plus à propos des cookies et vous permet d'installer les cookies que vous voulez. Elle vous permet également de supprimer les cookies actuellement stockés.</p>
        </div>

        <div class="internet" id="firefox">
            <div class="block">
                <img src="images/PNG/firefox.png">
                <h4>MOZILLA FIREFOX</h4>
            </div>
            <p class="textinet">Dans le menu <b>Outils</b>, sélectionnez <b>"options"</b>.<br/><br/>

            Sélectionnez l'onglet <b>Vie Privée</b> dans la fenêtre <b>Options</b>. <br/><br/>

            Dans le menu déroulant, choisissez <b>"Utiliser les paramètres personnalisés pour l'historique"</b>. Cela fera apparaître les options pour les cookies et vous pourrez choisir de les autoriser ou de les refuser en cochant la case appropriée.</p>
        </div>

        <div class="internet" id="edge">
            <div class="block">
                <img src="images/PNG/Microsoft_edge.png">
                <h4>MICROSOFT EDGE</h4>
            </div>
            <p class="textinet">Dans le menu Outils, sélectionnez <b>"Options Internet"</b>.<br/><br/>

            Cliquez sur l'onglet <b>Confidentialité</b>.<br/><br/>

            Vous verrez des paramètres de confidentialité avec six options, qui vous permettent de contrôler le nombre de cookies qui seront enregistrés : <b>Bloquer Tous Les Cookies, Haute, Moyennement Haute, Moyenne (niveau par défaut), Faible, et Accepter Tous Les Cookies.</b></p>
        </div>

        <div class="internet" id="safari">
            <div class="block">
                <img src="images/PNG/safari.png">
                <h4>SAFARI</h4>
            </div>
            <p class="textinet">Dans le menu déroulant, sélectionnez l'option <b>"préférences</b>br/><br/>

            Ouvrez l'onglet <b>Sécurité</b>.<br/><br/>

            Sélectionnez l'option que vous voulez dans la section <b>"accepter les cookies"</b>.</p>
        </div>
    </div>
    </div>

    <footer>
        <p>Copyright EPSE/ Web Design & Responsive/ Ainix GD - Site réalisé dans le cadre d'un TEI(Travail d'études intégrées) _ EPSE _ Bachelier Infographie/ Ce site utilise des cookies/
            <a href="EN/index.php">EN-</a>
            <a href="index.php">RETOUR ACCUEIL</a>
        </p>
    </footer>   

</body>
</html>