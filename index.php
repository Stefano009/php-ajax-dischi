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
            <?php 
                include __DIR__ . '/database.php';
                foreach($db as $diskInfo){     
                    echo '<div class="card">';
                        
                        echo '<img src="'. $diskInfo['poster'] .'" alt="'. $diskInfo['title'] .'">
                                <h1>
                                 ' . $diskInfo['title'] . '
                                </h1>
                                <h3>
                                    ' . $diskInfo['author'] . ' <br>
                                    ' . $diskInfo['year'] . '
                                </h3>';
                    echo '</div>';
                }
            ?>
        </div>
    </main>
</body>
</html>