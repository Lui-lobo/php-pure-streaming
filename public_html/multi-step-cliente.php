<html>

<head>
    <title>BidasFlix - Terminando as configurações</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    
    <!-- Links Css --> 
    <link rel="stylesheet" href="styles/global.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/login/form.css" />
    <link rel="stylesheet" href="styles/cadastro/multi-step-cadastro.css"/>

    <!-- Icones--> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;500;600;700&family=Noto+Sans+JP&display=swap" rel="stylesheet">

</head>

<body>
    
    <div id="center">


    <main>
       <?php
            include "inc/cadastro/multi-step-cadastro.php"
       ?>
    </main>

    <footer>
        <div class="footer-container">
            <?php
                include "inc/footer.php";
            ?>
        </div>
    </footer>

    </div>
    <script src="js/cadastro/multi-step.js"></script>
</body>


</html>