<?php
    require "connexion.php";
    session_start();
    if(isset($_POST['admin']))
    {
        if($_POST['admin']!=="" OR $_POST['password']!=="")
        {
            $admin=htmlspecialchars($_POST['admin']);
            $password=htmlspecialchars($_POST['password']);
    
            $reqlog=$bdd->prepare("SELECT * FROM login WHERE admin=?");
            $reqlog->execute(array($admin));

            if($donlog=$reqlog->fetch())
            {
                if(password_verify($password,$donlog['password']))
                {
                    $_SESSION['admin']=$donlog['admin'];
                    header("LOCATION:adminen.php");
                }
                else
                {
                    header("LOCATION:adminen.php?error=3");
                }
            }
            else{
                header("LOCATION=adminen.php?error=2");
            }
            $reqlog->closeCursor();
        }
        else{
            header("LOCATION=adminen.php?error=1");
        }
    }

    if(isset($_GET['deco']))
    {
        session_destroy();
        header("LOCATION=adminen.php");
    }

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

    if(isset($_GET['delinfo']))
{
    $delete=$bdd->prepare("DELETE FROM contact WHERE id=?");
    $delete->execute(array($_GET['id']));
    header("LOCATION:adminen.php");
}
?>


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
            echo"<link rel='stylesheet' type='text/css' href='style4.css'>"; 
        }
        else{
            echo"<link rel='stylesheet' type='text/css' href='style3.css'>";
        }
     }
     else
     {
        echo"<link rel='stylesheet' type='text/css' href='style3.css'>";
     }
    ?>
    <link rel="icon" href="../images/Illu/logo_final.png"/>
    <title>Administration Spiteful</title>
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
            <li id="LANGUE"><a href="../index.php">FR</a></li>
            <li>
                <div id="boutret"><a href="index.php">BACK</a></div>
            </li>

        </ul>
     
    </nav>


    <div class="menu">
        <div class="container-menu">
            <div id="options">
                <div><a href="index.php#home" class="nav-link">Home</a></div>
                <div><a href="index.php#pres" class="nav-link">Spiteful</a></div>
                <div><a href="index.php#history" class="nav-link">History</a></div>
                <div><a href="index.php#medoc" class="nav-link">Products</a></div>
                <div><a href="index.php#video" class="nav-link">Videos</a></div>
                <div><a href="index.php#contact" class="nav-link">Contact</a></div>
            </div> 
        </div>
    </div>


     <div id="meconnecter">
        <div class="wrapper" id="login">
            <div id="log"><h2>Connection to administration :</h2></div>
            

            <?php
                if(isset($_SESSION['admin']))
                {
                    echo'<div class="BJR">';
                        echo'<div id="bjr"><b>Hi</b>, '.$_SESSION['admin'].'</div>';
                        echo'<div id="deco"><a href="adminen.php?deco=ok">Deconect</a></div>';
                    echo'</div>';


                    echo'<div class="slide" id="message">';
                echo'<div class="wrapper">';

                    $reqinfos=$bdd->query('SELECT * FROM contact');
                    while($doninfos=$reqinfos->fetch())
                    {
                        echo'
                            <div class="infos">
                                <div id="affinfos">
                                    <div class="affinfos"><b>'.$doninfos['name'].'</b></div>
                                    <div class="affinfos"><b>'.$doninfos['surname'].'</b></div>
                                    <div class="affinfos"><b>'.$doninfos['mail'].'</b></div>
                                    <div class="affinfos">'.$doninfos['mess'].'</div>
                                    <div class="date">'.$doninfos['date'].'</div>

                                    <div class="supprimer"><a href="admin.php?id='.$doninfos["id"].'&delinfo=ok">DELETE</a></div>

                                    <div class="repondre"><a href="https://mail.google.com/mail/u/1/#inbox">ANSWER</a></div>
                                </div>
                            </div>

                        ';
                    }
                    $reqinfos->closeCursor(); 
                echo'</div>';
        echo'</div>';
                }
                else{
                    echo'
                        <form method="POST" action="adminen.php" id="form">
                            <div id="fo">
                                <div class="for"><label class="textform2" for="admin">Administrateur:<input type="text" id="Admin" name="admin"></label></div>

                                <div class="for"><label class="textform2" for="password">Mot de passe:<input type="password" id="Mdp" name="password"></label></div>

                                <input id="boutco" type="submit" value="Connexion">

                            </div>
                        </form>
                    ';
                }   
            ?>


        </div>
        
     </div>
     <div id="ligne"></div>
    



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
     </script>
</body>
</html>