<?php
    require "connexion.php";

    if(isset($_GET['mode']))
    {
        if($_GET['mode']==1){
            setcookie('mode','clair', time() + 365*24*3600, null, null, false, true);
        }
        else{
            setcookie('mode','sombre', time() + 365*24*3600, null, null, false, true);
        }
        header("LOCATION:index.php");
    }

    if(isset($_GET['cookie'])){
        setcookie('legal','accept', time() + 365*24*3600, null, null, false, true);
        header("LOCATION:index.php");
    }
?>
<!DOCTYPE html>
<html lang="fr">
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
    <title>Spiteful</title>
</head>
<body>
    <nav id="Menunav">
        <div id="logomenu"><a href="index.php/#home"></a></div>
       
        <ul>
            <li>
                <div id="burgerbout" class="burgerbout">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </li>
            <li id="LANGUE"><a href="EN/index.php">EN</a></li>
            <li>
                <div id="MODE">
                    <a id="mode1" href='index.php?mode=1'>CLAIR</a>
                    <span class="tiret">/</span>
                   <a id="mode2" href='index.php?mode=2'>SOMBRE</a>
                </div>
            </li>
        </ul>
     
    </nav>
   
    <div class="menu">
        <div class="container-menu">
            <div id="options">
                <div><a href="#home" class="nav-link">Accueil</a></div>
                <div><a href="#pres" class="nav-link">Spiteful</a></div>
                <div><a href="#history" class="nav-link">Histoire</a></div>
                <div><a href="#medoc" class="nav-link">Produits</a></div>
                <div><a href="#video" class="nav-link">Vid??os</a></div>
                <div><a href="#contact" class="nav-link">Contact</a></div>
            </div> 
        </div>
    </div>
   
    <div class="slide" id="home">
     <div class="video-fond">
         <video src="videos/PresSPITEFULfr.mp4" autoplay muted loop></video>
     </div>
    </div>
    <div class="slide" id="pres">
        <div class="wrapper">
            <div id="textpres">
                <div class="textpres">
                    <p>Spiteful est une marque de produits pharmaceutiques proposant diff??rents m??dicaments pour divers maux.
                    Chacun de ces produits est li??s ?? un animal de cette Terre, car c'est ?? base de mol??cules provenant de divers venins que les scientifiques ont extrait le peptide <b style="color:var(--o)">MIRACLE</b> pour vous soulager!</p><br/>

                    <p>Ces m??dicaments sont pr??sent??s sous diff??rentes formes:</p>
                        <p class="PC">Pilules</p>
                        <p class="PC">Cr??me</p>  
                </div> 
            </div>

            <div id="imgpres">
                <div class="imgpres">
                    <img src="images/PNG/GreenMamba.png"/>
                    <h1>VENIN</h1>
                </div>
            </div>
          
        </div>
    </div>
    <div class="slide" id="history">
        <div class="wrapper">
            <div id="sci">
                <div class="sci">
                    <?php
                    $reqsci=$bdd->query("SELECT * FROM sci");
                    while($donsci=$reqsci->fetch()){
                        echo'
                            <div class="scipho">
                                <img src="images/Illu/sci.png">
                                <p class="p1">'.$donsci["prenomsci"].'</p>
                                <p class="p11">'.$donsci["nomsci"].'</p>
                            </div>
                            <h1>Naturaliste</h1>
                        ';
                    }
                    $reqsci->closeCursor();
                    
                    ?>
                </div>

                <div class="textsci">

                    <?php
                        $reqtext=$bdd->query("SELECT * FROM sci");
                        while($dontext=$reqtext->fetch()){
                            echo'
                                <div id="texts">
                                    <div class="texts">
                                     <p>'.$dontext['textsci'].'</>
                                    </div>
                                    <div class="barsci"></div>
                                </div>
                            ';
                        }
                        $reqtext->closeCursor();
                    
                    ?>
                </div>
            </div>


            <div id="texthist">
                <div class='texthist'><p>Les premi??res ??tudes sur les venins d'animaux ne sont pas
                aussi r??cente qu'on le pense. Depuis le 18s, diff??rents scientifiques
                s'y sont int??rr??ss??s.              
                </p>
                </div>  
            </div>
            
        </div>
    </div>
    <div class="slide" id="medoc">
        <div class="wrapper">
            <div id="barre"></div>     
            <div class="list">
                <div id="medoc-info">
                    <?php
                        $medocs = $bdd->query('SELECT * FROM medocs');
                        while($donMed = $medocs->fetch())
                        {
                            echo "<div id='med-info-".$donMed['id']."'class='med-info'>";
                            echo "<div class='title'>".$donMed['nomedoc']."</div>";
                            
                                echo "<div class='blocinfo'>";
                                    echo "<div id='num'>";
                                        echo "<div class='num'>".$donMed['numero']."</div>";
                                    echo "</div>";

                                    echo "<div id='pm'>";
                                        echo "<div class='pouc'><p>Pourcentage:   ".$donMed['pourc']."</p></div>";
                                        echo "<div class='maladie'>".$donMed['maladie']."</div>";
                                    echo "</div>";
                                echo "</div>";

                            echo "</div>";
                        }
                        $medocs->closeCursor();
                    ?>
                </div>
                <div id="puces">
                    <?php 
                        $medocs = $bdd->query('SELECT * FROM medocs');
                        while($donMed = $medocs->fetch())
                        {
                            echo "<div class='puce' data-target='#medoc-".$donMed['id']."' data-info='#med-info-".$donMed['id']."'>";
                            echo "</div>";
                        }
                     ?> 
                </div>
    
            </div>

            <div class="medoc-container">
            <?php
                $medocs = $bdd->query('SELECT * FROM medocs');
                    while($donMed = $medocs->fetch())
                    {
                        echo "<div id='medoc-".$donMed['id']."' class='medocs'>";
                            echo "<div class='img'><img src='images/PNG/".$donMed['imagemed']."' alt='".$donMed['nomedoc']."'></div>";
                            echo "<div class='nom'>".$donMed['nomedoc']."</div>";
                        echo "</div>";
                    }
                    $medocs->closeCursor(); 
             ?>      
    
            </div>
        </div>
    </div>

    <div class="slide" id="video">
        <div class="wrapper">
            <div id="pucevid">
                <?php
                    $vids = $bdd->query('SELECT * FROM imgvideo');
                    while($donVid = $vids->fetch())
                    {
                        echo'<div class="pucesvid" data-target="#vid-info-'.$donVid['id'].'" style="background-image:url(images/JPEG/'.$donVid['imgvid'].')"></div>';
                    }
                ?>    
            </div>

            <div class="video-container">
                <div id="action">
                    <img src="images/Illu/Fl??che.png">
                    <p>Cliquer sur les animaux pour voir les vid??os</p>
                </div>
                
                <?php
                    $vids = $bdd->query('SELECT * FROM animaux');
                    while($donVid = $vids->fetch())
                    {
                        echo'<div id="vid-info-'.$donVid['id'].'" class="vids">';
                            echo'<div class="nomanim">'.$donVid['nomanim_1'].'</div>';
                            echo'<div class="prob">'.$donVid['probleme'].'</div>';
                            echo'<div class="video">';
                                echo'<video controls><source src="videos/'.$donVid['video'].'"/></video>';
                            echo'</div>';
                            echo'<div class="desc">'.$donVid['description'].'</div>';

                            echo'<div id="infoanim">';
                                echo'<div class="animal">';
                                    echo'<div class="na1"><p class="TitNH">NOM:</p>'.$donVid['nomanim_1'].'</div><br/>';
                                    echo'<div class="na1" id="na2"><p class="TitNH">NOM SCIENTIFIQUE:</p>'.$donVid['nomanim_2'].'</div>';

                                    echo'<div class="habitat">';
                                        echo'<div class="hab1"><p class="TitNH">CONTINENT:</p>'.$donVid['habitat_1'].'</div><br/>';
                                        echo'<div class="hab1" id="hab2"><p class="TitNH">CONTINENT:</p>'.$donVid['habitat_2'].'</div>';
                                    echo'</div>';
                                echo'</div>';

                                echo'<div class="malvid">';
                                    echo'<div class="na1"><p class="TitNP">MALADIE:</p>'.$donVid['probleme'].'</div><br/>';
                                    echo'<div class="na1"><p class="TitNP">PEPTIDE:</p>'.$donVid['peptide'].'';
                                    echo'<div id="peptide"><p><b>*Un peptide est un polym??re d???acides amin??s reli??s entre eux par des liaisons peptidiques. Il existe une ??norme vari??t?? de peptides diff??rents.</b></p></div>';
                                    echo'</div>';

                                    echo'<div class="na1" id="remedy"><p class="TitNP">REMEDE:</p>'.$donVid['remede'].'</div><br/>';
                                echo'</div>';

                                echo'<div class="imgdesc"><img src=images/PNG/'.$donVid['imgdesc'].'></div>';
                            echo'</div>';
                                
                        echo'</div>';
                    }
                    $vids->closeCursor();
                ?>
            </div>              
        </div>
    </div>

    <div class="slide" id="contact">
        <div class="wrapper">

            <div id="MAP">
                
                <div id="CC1" class="CC1"><p>CARTE</p></div>
                
                <div id="cartebox">
                    <div id=carte><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1219.560184565722!2d5.564230974713011!3d50.563097899605616!2m3!1f0!2f39.0647406244768!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x47c0f8276cc1ca37%3A0x66fe1582134563d!2sEyeD%20Pharma%20S.A.!5e1!3m2!1sfr!2sbe!4v1619257307662!5m2!1sfr!2sbe" {min-width="100" min-height="200" style="border:0;" allowfullscreen="" loading="lazy"}></iframe></div>

                        <div class="adr"> 
                            <p>Quartier H??pital</p><br/>
                            <p>Avenue Hippocrate 5</p><br/>
                            <p>4000 Li??ge (Belgique)</p>
                        </div>
                </div>
            </div>

            <div id="FORM"> 

                    <div id="formulaire">
                        <form method='POST' action="traitmess.php">
                    <?php
                        if(isset($_GET['flash']))
                        {
                            echo'<div class="flash-success">Merci de votre message! </div>';
                        }

                        if(isset($_GET['flash-error']))
                        {
                            echo'<div class="flash-error">Formulaire incorrect! </div>';
                        }

                    ?>
                            <div class="border"><label class="textform" for="Nom">Nom:</label> <input type="text" id="name" name="nom" placeholder="Durieu" class="design"></div><br/>
                            <div class="border"><label class="textform" for="Prenom">Pr??nom:</label> <input type="text" id="surname" name="prenom" placeholder="Marie" class="design"></div><br/>
                            <div class="border"><label class="textform" for="E_mail">E-mail:</label> <input type="text" id="mail" name="mail" placeholder="email@gmail.com/.be" class="design"></div><br/>
                            <div class="border"><label class="textform" for="Message">Message:</label></div><br/>
                            <textarea id="mess" name="mess" class="destext"></textarea><br>
                            <a href="mail.php"><input id="boutenv" type="submit" value="Envoyer"></a>
                        </form>

                        
                    
                    <div class="adr2"> 
                        <p><b>TEL:</b> (+32)065/55.22.48</p><br/>
                        <p><b>MAIL:</b> spiteful.produitspharma@gmail.com</p><br/> 
                    </div>
                    </div>

                    <div class="CC2"><p>Contact</p></div>
            </div>
        </div>
    </div>

    <?php 
        if(!isset($_COOKIE['legal'])){
    ?>
         <div id="cookie">
            <p>
                Notre site utilise des cookies pour mieux vous satisfaire durant votre visite. Veuillez accepter les termes et conditions de notre site.<br>
                Merci et bonne visite!
            </p>
            <div class="boutCook">
                <div id="TC"><a href="polcookies.php">Termes et conditions</a></div>
                <div id="ACCEPT"><a href="index.php?cookie=accept">J'accepte!</a></div>
            </div>
        </div>

    <?php
        }
    ?>

    <footer>
        <p>Copyright EPSE/ Web Design & Responsive/ Ainix GD - Site r??alis?? dans le cadre d'un TEI(Travail d'??tudes int??gr??es) _ EPSE _ Bachelier Infographie/ Ce site utilise des cookies/
        <a href="EN/index.php">EN-</a>
        <a href="polcookies.php">Termes et conditions/</a>
        <a href="admin.php">Administraion</a>
    
    </p>
    </footer>

    <script>
        const burger = document.querySelector('#burgerbout')
        const menu = document.querySelector('.menu')
        const nav = document.querySelector('nav')
        const navLinks = document.querySelectorAll('.nav-link')

        console.log(navLinks)

        navLinks.forEach(navLink => {
            navLink.addEventListener('click',()=>{
                menu.classList.toggle('open')
                nav.classList.toggle('nav-open')
                burger.classList.toggle('burger-open')
            })
        })
        burger.addEventListener('click',()=>{
            menu.classList.toggle('open')
            nav.classList.toggle('nav-open')
            burger.classList.toggle('burger-open')
        })

        const puces = document.querySelectorAll('.puce')
        const medoc1 = document.querySelector('.medocs')
        const medInfo1 = document.querySelector('.med-info')
        medoc1.classList.add('medoc-open')
        medInfo1.classList.add('med-open')
        puces.forEach(puce => {
            puce.addEventListener('click',()=>{
                const target = document.querySelector(puce.dataset.target)
                const medocs = document.querySelectorAll('.medocs')
                medocs.forEach(medoc =>{
                    medoc.classList.remove('medoc-open')
                })
                const medInfos = document.querySelectorAll('.med-info')
                medInfos.forEach(medInfo =>{
                    medInfo.classList.remove('med-open')
                })
                target.classList.add('medoc-open')
                targetInfo = document.querySelector(puce.dataset.info)
                targetInfo.classList.add('med-open')


            })
        })
        

        var scrolling
        const pres = document.querySelector('#pres')
        nav.classList.add('nav-scroll')
        window.addEventListener('scroll',()=>{
            scrolling= document.documentElement.scrollTop || window.scrollY || window.pageYOffset || document.body.scrollTop
            console.log(scrolling)
            if(scrolling < pres.offsetTop)
            {
                nav.classList.add('nav-scroll')
            }else if(scrolling > pres.offsetTop)
            {
                nav.classList.remove('nav-scroll')
            }else{
                nav.classList.add('nav-scroll')
            }
        })

        const pucesVid = document.querySelectorAll('.pucesvid')
        const vids = document.querySelectorAll('.vids')
        const action = document.querySelector('#action')

        pucesVid.forEach(puce =>{
            puce.addEventListener('click',()=>{
                action.style.opacity = 0;
                vids.forEach(vid=>{
                    vid.classList.remove('vid-open')
                })
                target = document.querySelector(puce.dataset.target)
                target.classList.add('vid-open')
            })
        })

    </script>
</body>
</html>