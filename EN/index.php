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
            <li>
                <div id="MODE">
                    <a id="mode1" href='index.php?mode=1'>LIGHT</a>
                    <span class="tiret">-</span>
                   <a id="mode2" href='index.php?mode=2'>DARK</a>
                </div>
            </li>
        </ul>
     
    </nav>
   
    <div class="menu">
        <div class="container-menu">
            <div id="options">
                <div><a href="#home" class="nav-link">Home</a></div>
                <div><a href="#pres" class="nav-link">Spiteful</a></div>
                <div><a href="#history" class="nav-link">History</a></div>
                <div><a href="#medoc" class="nav-link">Products</a></div>
                <div><a href="#video" class="nav-link">Videos</a></div>
                <div><a href="#contact" class="nav-link">Contact</a></div>
            </div> 
        </div>
    </div>
   
    <div class="slide" id="home">
     <div class="video-fond">
         <video src="../videos/PresSPITEFULen.mp4" autoplay muted loop></video>
     </div>
    </div>
    <div class="slide" id="pres">
        <div class="wrapper">
            <div id="textpres">
                <div class="textpres">
                    <p>Spiteful is a brand of pharmaceutical products offering different medicines for various ailments.
                    Each of these products is linked to an animal on this Earth, because it is based on molecules from various venoms that scientists extracted the peptide <b style="color:var(--o)">MIRACLE</b> to relieve you!</p><br/>

                    <p>These medicinal products are presented in different forms:</p>
                        <p class="PC">Pills</p>
                        <p class="PC">Cream</p>  
                </div> 
            </div>

            <div id="imgpres">
                <div class="imgpres">
                    <img src="images/PNG/Green_Mamba.png"/>
                    <h1>VENOM</h1>
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
                <div class='texthist'><p>The first studies on animal venoms were not
                as recent as you think. Since the 18s, different scientists
                are interested in it.             
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
                <div class="puce-container" id='pucesimg'>     
                        <?php
                            $video = $bdd->query('SELECT * FROM imgvideo');
                            while($donVid = $video->fetch())
                            {
                                echo"<div class='pucesimg' data-target=''>";
                                    echo"<img src='images/".$donVid['imgvid']."' alt='".$donVid['nom']."'/>";
                                echo"</div>";
                            }

                        ?>     
                </div>
                    
                <div class="video-container">

                    <?php
                    $video = $bdd->query('SELECT * FROM videos');
                    while($donVid = $video->fetch())
                    {
                        echo"<div id='vid-".$donVid['id']."' class='vids'>";
                            echo"<div class='video'>";
                                echo"<video controls>";
                                    echo"<source src='videos/".$donVid['video']."' alt='".$donVid['nomvid']."'>";
                                echo"</video>";
                            echo"</div>";
                        echo"</div>";
                    }
                    $video->closeCursor();
                    ?>   
                </div>               
        </div>
    </div>

    <div class="slide" id="contact">
        <div class="wrapper">

            <div id="MAP">
                
                <div id="CC1" class="CC1"><p>Map</p></div>
                
                <div id="cartebox">
                    <div id=carte><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1219.560184565722!2d5.564230974713011!3d50.563097899605616!2m3!1f0!2f39.0647406244768!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x47c0f8276cc1ca37%3A0x66fe1582134563d!2sEyeD%20Pharma%20S.A.!5e1!3m2!1sfr!2sbe!4v1619257307662!5m2!1sfr!2sbe" {min-width="100" min-height="200" style="border:0;" allowfullscreen="" loading="lazy"}></iframe></div>

                        <div class="adr"> 
                            <p>Quartier Hôpital</p><br/>
                            <p>Avenue Hippocrate 5</p><br/>
                            <p>4000 Liège (Belgium)</p>
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
                            echo'<div class="flash-error">Veuillez correctement remplir le formulaire! </div>';
                        }

                    ?>
                            <div class="border"><label class="textform" for="Nom">Name:</label> <input type="text" id="name" name="nom" placeholder="Durieu" class="design"></div><br/>
                            <div class="border"><label class="textform" for="Prenom">Surname:</label> <input type="text" id="surname" name="prenom" placeholder="Marie" class="design"></div><br/>
                            <div class="border"><label class="textform" for="E_mail">E-mail:</label> <input type="text" id="mail" name="mail" placeholder="email@gmail.com/.be" class="design"></div><br/>
                            <div class="border"><label class="textform" for="Message">Message:</label></div><br/>
                            <textarea id="mess" name="mess" class="destext"></textarea><br>
                            <a href="mail.php"><input id="boutenv" type="submit" value="Send"></a>
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

    <footer>
        <p>Copyright EPSE/ Web Design & Responsive/ Ainix GD - Site created as part of a TEI(Travail d'études intégrées) _ EPSE _ Bachelor of Computer Graphics/ This site uses cookies/
        <a href="../index.php">FR</a></p>
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

    </script>
</body>
</html>