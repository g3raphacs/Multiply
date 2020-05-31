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
    <header>
        <div id="navbar">
            <nav class="container flexspaceb m0child">
                <div id="logoburger" class="flexspaceb">
                        <div id="logo" class="flex">
                            <div><img src="/media/multiply-logo.png" alt="" width="100" height="100"></div>
                            <p class="f-24">Multiply</p>
                        </div>
                        <div id="burger" class="flex"><img src="/media/burger.svg" alt="" width="40" height="40"></div>
                </div>
                
                <menu class="flexspaceev f-med">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="tables.php">Tables</a></li>
                    <li><a href="tables2.php">Tables 2</a></li>
                    <li><a href="revision.php">Révision</a></li>
                    <li><a href="superrevision.php">Super Révision</a></li>
                </menu>
            </nav>
        </div>
    </header>
    <main>
        <header class="bck-main-light"><h1 class="txt-white txt-center">Apprenez les tables de multiplication</h1></header>

                <div class="container flexspaceev wrap">
                <?php
                    require 'class/table.php';

                    $table = new table(1);
                    $table = new table(2);
                    $table = new table(3);
                    $table = new table(4);
                    $table = new table(5);
                    $table = new table(6);
                    $table = new table(7);
                    $table = new table(8);
                    $table = new table(9);
                    $table = new table(10);
                ?>
                </div>
    </main>
    <!-- Script MENU______________________________________________________________________ -->
    <script src="scripts/menu.js"></script>
</body>
</html>