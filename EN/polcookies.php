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
    <title>Cookies Politiques de confidentialités</title>
</head>
<body>
        <nav id="Menunav">
            <div id="logomenu"><a href="index.php"></a></div>
        
            <ul>
                <li>
                    <div id="MODE">
                        <a id="mode1" href='polcookies.php?mode=1'>LIGHT</a>
                        <span class="tiret">-</span>
                    <a id="mode2" href='polcookies.php?mode=2'>DARK</a>
                    </div>
                </li>
                <li>
                    <div id="boutret"><a href="index.php">BACK</a></div>
                </li>
            </ul>
        
        </nav>
     

    <div class="slide" id="cookies">
    <div class="wrapper">
        <div id="CHARTC">
            <h1>Cookie Charter</h1>
                <p>This Cookie Policy describes how cookies are used on our website and how you can enable or disable cookies. It shall cover in particular the following:</p>
        </div>

        <h2>1. WHAT IS A COOKIE?</h2>
            <p>A cookie is data that is stored on a computer, tablet or smartphone when you browse the Internet so that this computer, tablet or smartphone ("device") can be recognized later. Cookies stored by us or by third parties when you visit our website do not recognize you personally as an individual; they only recognize the device you are using. way, but they allow you to benefit from certain features of our website; For example, they allow you to return to pages you have searched. They also help us to keep our website secure, remind us of your preferences and customize the content of our website so that it is more tailored to you.

            For more information on the different types of cookies stored on your devices when you visit our website, please see our cookie policy below.

            You alone choose whether you want to have cookies saved on your device and you can easily control the storage of cookies. For specific information on the management and control of cookies, please refer to the management of cookies at the bottom of this page.

            Why do we have a cookie policy?

            The establishment of this cookie policy is an integral part of our desire to respect recent legislation but also to ensure that we are open and transparent to you about what happens when you come to our website.</p>

        <h2>2. OUR COOKIE POLICY</h2>
            <p>In order to make full use of our website, your computer, tablet or smartphone ("device"), you must accept cookies. However, cookies stored on our website do not store your personal or sensitive data (such as your name, address or payment data).</p>

            <h3>ANALYRICS COOKIES</h3>
                <p>These cookies collect data relating to the use of our website (for example, on the pages you visit most often and if you have received error messages from our websites). Aggregated data from these cookies are only used to improve the functioning of our website.</p>

        <h2>3. COOKIE MANAGEMENT</h2>
            <h3>WHAT HAPPENS IF I DON’T ALLOW COOKIES?</h3>
                <p>If cookies are not allowed on your computer, tablet or smartphone ("device"), your experience on our website may be limited (For example, you may not be able to navigate freely and throughout the site or you may not be able to use the features offered.</p>

            <h3>HOW TO DISABLE / ACTIVATE COOKIES WWW.SPITEFULPRODUCTPHARMA.BE?</h3>
                <p>The deactivation/ activation of cookies is done through your internet browser. Below we explain how to manage cookies on your computer through the main internet browsers. For more information on how to manage cookies on your tablet and/or mobile, please see your documentation or online help files.</p>

        <div class="internet" id="google">
            <div class="block">
                <img src="../images/PNG/googlechrome.png">
                <h4>GOOGLE CHROME</h4>
            </div>
            <p class="textinet">From the menu <b>Parameters</b>, select "Show advanced settings" at the bottom of the page. <br/><br/>

            Click the button <b>"Content parameters"</b> in the section <b>Confidentiality or Privacy</b><br/><br/>

            The section at the top of the page that appears then tells you more about cookies and allows you to install the cookies you want. It also allows you to delete currently stored cookies.</p>
        </div>

        <div class="internet" id="firefox">
            <div class="block">
                <img src="../images/PNG/firefox.png">
                <h4>MOZILLA FIREFOX</h4>
            </div>
            <p class="textinet">From the menu <b>Tools</b>, select <b>"options"</b>.<br/><br/>

            Select the tab <b>Personal Life</b> in the window <b>Options</b>. <br/><br/>

            From the drop-down menu, choose<b>"Use custom settings for history"</b>. This will bring up the options for cookies and you can choose to allow or refuse them by checking the appropriate box.</p>
        </div>

        <div class="internet" id="edge">
            <div class="block">
                <img src="../images/PNG/Microsoft_edge.png">
                <h4>MICROSOFT EDGE</h4>
            </div>
            <p class="textinet">From the Tools menu, select <b>"Internet Options"</b>.<br/><br/>

            Click on the tab <b>Privacy</b>.<br/><br/>

            You will see privacy settings with six options, which allow you to control the number of cookies that will be saved: <b>Block All Cookies, High, Medium High, Medium (default level), Low, and Accept All Cookies.</b></p>
        </div>

        <div class="internet" id="safari">
            <div class="block">
                <img src="../images/PNG/safari.png">
                <h4>SAFARI</h4>
            </div>
            <p class="textinet">From the drop-down menu, select the option <b>"preferences"</b><br/><br/>

            Open the tab <b>Security</b>.<br/><br/>

            Select the option you want in the section <b>"accept cookies"</b>.</p>
        </div>
    </div>
    </div>

    <footer>
        <p>Copyright EPSE/ Web Design & Responsive/ Ainix GD - Site created as part of an TEI(Work of integrated studies) _ EPSE _ Bachelor Infographic/ This site uses cookies/
            <a href="../index.php">FR-</a>
            <a href="index.php">BACK HOME</a>
        </p>
    </footer>   

</body>
</html>