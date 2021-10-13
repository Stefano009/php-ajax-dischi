<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-dischi</title>
</head>
<body>
    <header>
        <div class="nav">
            <img src="./img/spotify.png" alt="spotify-icon">
        </div>
    </header>
    <main>
        <div class="wrapper">

            <!-- puoi scrivere tutto in modo comodo aprendo il foreach e chiudendolo subito sotto e la graffa finale puoi chiuderla sotto tytto aprendo e richiudendo il tag php intorno
            comodo perchè cosi puoi scrivere l'html normalmente e aprire e chiudere php attorno, piu php aperti ma meno possibilità di sbagliare -->
            <?php 
                include __DIR__ . '/database.php';
                foreach($db as $diskInfo){     
                    echo '<div class="card">';
                        
                        echo '<img src="'. $diskInfo['poster'] .'" alt="'. $diskInfo['title'] .'">
                                <h2>
                                 ' . $diskInfo['title'] . '
                                </h2>
                                <h3>
                                    ' . $diskInfo['author'] . ' <br>
                                    <span> ' . $diskInfo['year'] . ' </span>
                                </h3>';
                    echo '</div>';
                }
            ?>
        </div>
    </main>
</body>
</html>