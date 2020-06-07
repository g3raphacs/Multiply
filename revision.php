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
        <?php if (!(isset($_POST['tables'])) && !(isset($_GET['result']))): ?>
            <header class="bck-main-light">
                <h1 class="txt-white txt-center">Choisissez une table à reviser:</h1>
                <div class="container txt-center">
                    <?php require 'class/formradio.php';?>
                </div>
            </header>

        <?php else: ?>
            <?php if (!(isset($_GET['result']))): ?>

                <header class="bck-main-light">
                    <h1 class="txt-white txt-center">Trouvez la bonne réponse:</h1>
                </header>
            <?php elseif ($_GET['result']==$_GET['reponse']): ?>

                <header class="bck-table4">
                    <h1 class="txt-white txt-center">Bravo!</h1>
                    <p class="txt-center"><img src="media/happy.svg" alt="" width="45"></p>
                    <p class="txt-white txt-center f-18">La bonne réponse etait <span class="f-bold f-20"><?php echo $_GET['result']; ?></span></p>
                </header>
                <p class="txt-center"><a class="txt-white btn-replay bck-main f-med" href="revision.php">Rejouer</a></p>
            <?php else: ?>

                <header class="bck-table8">
                    <h1 class="txt-white txt-center">Perdu!</h1>
                    <p class="txt-center"><img src="media/sad.svg" alt="" width="45"></p>
                    <p class="txt-white txt-center f-18">La bonne réponse etait <span class="f-bold f-20"><?php echo $_GET['result']; ?></span></p>
                </header>
                <p class="txt-center"><a class="txt-white btn-replay bck-main f-med" href="revision.php">Rejouer</a></p>
            <?php endif ?>
        <?php endif ?>


                <div class="container flexspaceev wrap">
                <?php
                    require 'class/question.php';
                    if (isset($_POST['tables'])){
                        foreach($_POST['tables'] as $value){
                            $table = new Question($value);
                        }
                    }
                ?>
                </div>
    </main>
    <!-- Script MENU______________________________________________________________________ -->
    <script src="scripts/menu.js"></script>
</body>
</html>