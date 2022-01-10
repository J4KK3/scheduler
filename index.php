<!doctype html>
<!-- Kommentarer --> 

<html lang='sv'>
	<head> 
        <meta charset='utf-8'>
        <title>Webbutveckling</title> 
        <link rel="stylesheet" href="mystyle.css">
        <script src="myScript.js"></script>
        <?php require 'functions.php'; ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">

    </head>
    
    <body>
        <div id="sidemenu">
            <div id=sidemenu-content>
                <img id="closemenubutton" src="https://img.icons8.com/ios-glyphs/50/000000/delete-sign.png" onclick="closeSideMenu()">
                <button id="loginbutton" onclick="window.location.href='login.php'">Login here</button>
                <button id="createacc">Create account</button>
            </div>
        </div>

        <div class="header">
            <div id="heading">
                Schedule 1.0
            </div>
            <img id="sidemenubutton" src="icons\hamburger_icon.png" onclick="openSideMenu()">
        </div> 
    </body> 
</html>
