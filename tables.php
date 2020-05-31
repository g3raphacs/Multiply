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
        <header class="bck-main-light">
        <h1 class="txt-white txt-center">Choisissez une table à afficher:</h1>
        <!-- formulaire -->
        <div class="container txt-center">
        <?php require 'class/formlist.php';?>
        </div>
        </header>
                <div class="container flexspaceev wrap">
                <?php
                    require 'class/table.php';
                    if (isset($_POST['tables']) && $_POST['tables']!=null){
                        $table = new table($_POST['tables']);
                    }
                ?>
                </div>
    </main>
    <!-- Script MENU______________________________________________________________________ -->
    <script src="scripts/menu.js"></script>
</body>
</html>