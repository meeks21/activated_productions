<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex,nofollow">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/nav.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
        <title>Activated Productions</title>
    </head>

    <body>

        <header>   
            <nav>
                <div class="row">
                    <a href="template.php"><img src="resources/images/logo-placeholder.png" alt="logo" class="logo"></a>
                    <ul class="main-nav js--main-nav">
                        <li><a href="#">Work</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Gear</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><ion-icon name="menu"></ion-icon></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Activated Productions</h1>
                <a class="btn btn-full" href="#">Contact</a>
                <a class="btn btn-ghost" href="#">About</a>
            </div>
        </header>

        <footer>
            <div class="row">
                <p>
                    &copy; 2019 - <?=date("Y")?> by 
                    <a href="https://www.kemar-meeks.com/IT-162/index.php" target="_blank">Kemar</a>, All Rights Reserved  
                    <a href="https://validator.w3.org/check/referer" target="_blank"><ion-icon name="logo-html5"></ion-icon></a>  
                    <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank"><ion-icon name="logo-css3"></ion-icon></a>   
                </p>
            </div>
        </footer>

        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script src="resources/js/scripts.js"></script>   
    </body>
</html>