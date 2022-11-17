<html>

<head>
    <title>BidasFlix - Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    
    <!-- Links Css --> 
    <link rel="stylesheet" href="styles/global.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/login/form.css" />

    <!-- Icones--> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;500;600;700&family=Noto+Sans+JP&display=swap" rel="stylesheet">

</head>

<body>
    
    <div id="center">


    <main>

        <section class="login">
            <div class="form-wrapper">
            <a href="home.php" class="logo-link">
                <img src="imgs/Logo.svg" alt="BidasFlix" class="logo"/>
                <h2 class="logo-name">Lui Lobo</h2>
            </a>
            <h1 class="login-title">Fazer Login</h1>
            <?php 
                include "inc/login/form.php";
            ?>
            </div>
            
            <div class="form-wrapper">
            <a href="recuperar.php" class="login-link">Não consegue iniciar uma sessão ?</a>
            <a href="cadastrar.php" class="login-link">Criar Conta</a>
            </div>
        </section>

        <section class="wallpaper">

        </section>
       
    </main>

    <footer>
        <div class="footer-container">
            <?php
                include "inc/footer.php";
            ?>
        </div>
    </footer>

    </div>

    <script src="js/login/login.js"></script>

</body>


</html>