<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiply</title>
    <link rel="icon" type="image/png" href="media/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@400;700&family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require 'class/header.php'; ?>
    <main>

            <?php if (!(isset($_POST['val1'])) && !(isset($_GET['result']))): ?>
            <header class="bck-main-light">
                <h1 class="txt-white txt-center">Resolvez 5 multiplications:</h1>
            </header>
            <form action="" method="GET">
                <div class="container flexspaceev wrap">
                    <?php
                        require 'class/superquestion.php';
                        for($i=1 ; $i<6 ; $i++){
                            $table = new Question($i);
                        }
                    ?>
                </div>
                <div class="flexcenter bck-main-light"><button class="txt-white btn-submit bck-main" type="submit"><img src="/media/validate.svg" alt="" width="40"  height="40"></button></div>
            </form>
            <?php else : ?>
            <header class="bck-main-light">
                <h1 class="txt-white txt-center">Correction :</h1>
            </header>
                <div class="container flexspaceev wrap">
                    <?php
                        require 'class/superreponse.php';
                        for($i=0 ; $i<5 ; $i++){
                            $reponse = new Reponse($_GET['val1'][$i] , $_GET['val2'][$i] , $_GET['reponse'][$i]);
                        }
                    ?>
                </div>
                <div class="foot bck-main-light">
                    <p class="txt-white txt-center f-20 f-med">Votre score :</p>
                    <p class="score txt-center">
                        <?php
                            for($i=0 ; $i<$score ; $i++){
                                echo '<img class="star" src="media/staron.svg" alt="" width="45">';
                            }
                            for($i=0 ; $i<(5-$score) ; $i++){
                                echo '<img class="star" src="media/staroff.svg" alt="" width="45">';
                            }
                        ?>
                    </p>
                    <p class="txt-center m0"><a class="txt-white btn-replay bck-main f-med" href="superrevision.php">Rejouer</a></p>
                </div>
            <?php endif ?>
    </main>
    <!-- Script MENU______________________________________________________________________ -->
    <script src="scripts/menu.js"></script>
</body>
</html>