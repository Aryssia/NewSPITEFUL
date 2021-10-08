<?php
    $error=0;
    if(isset($_POST['name']))
    {
        if($_POST['name']=="")
        {
            $error=1;
        }
        else
        {
            $name=htmlspecialchars($_POST['name']);
        }

        if($_POST['surname']=="")
        {
            $error=2;
        }
        else
        {
            $surname=htmlspecialchars($_POST['surname']);
        }

        if($_POST['mail']=="")
        {
            $error=3;
        }
        else
        {
            
            
        if(preg_match('#^[A-Za-z0-9._-]+@[A-Za-z0-9._-]{2,}\.[A-Za-z]{2,4}$#',''.$_POST['mail'].''))
            {
                $mail=htmlspecialchars($_POST['mail']);
            }
            else
            {
                $error=4;
            }
        }

        if($_POST['mess']=="")
        {
            $error=5;
        }
        else
        {
            $mess=htmlspecialchars($_POST['mess']);
        }



        if($error==0)
        {
            include("connexion.php");
            $insert=$bdd->prepare("INSERT INTO contact (name,surname,mail,mess,date) VALUE (:name,:surname,:mail,:mess,NOW())");
            $insert->execute(array(
                ':name'=>$name,
                ':surname'=>$surname,
                ':mail'=>$mail,
                ':mess'=>$mess,
            ));
            $insert->closeCursor();
            header("LOCATION:mail.php");
           
        }
        else
        {
            header("LOCATION:index.php?flash-error=".$error."#contact");
        }
    }
    else
    {
        header("LOCATION:index.php?flash-error=noform#contact");
    }
?>