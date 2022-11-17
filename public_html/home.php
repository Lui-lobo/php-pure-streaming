<html>

<head>
    <title>BidasFlix</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    
    <!-- Links Css --> 
    <link rel="stylesheet" href="styles/global.css" />
    <link rel="stylesheet" href="styles/home/home.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/home/jumbotron.css" />
    <link rel="stylesheet" href="styles/footer.css" />

    <!-- Icones--> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;500;600;700&family=Noto+Sans+JP&display=swap" rel="stylesheet">

</head>

<body>
    
    <div id="center">

    <header>
        <div class="header-wrapper">
        <?php 
            include "inc/header.php";
            include "inc/home/header-login-feature.php";
            include "inc/home/opt-form.php";
        ?>
        </div>
    </header>

    <main>
        <div class="jumbotron-container">
        <?php
            include "inc/home/jumbotron.php";
        ?>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <?php
                include "inc/footer.php";
            ?>
        </div>
    </footer>

    </div>

</body>


</html>