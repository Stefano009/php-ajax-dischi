<?php 
    require __DIR__ . '/../database.php';
    $selected = $_GET["genre"];
    if($selected == 'All' || $selected == '' ){
        $filtered=$db;    
    }else {
        foreach ($db as $disk){
            if($selected==$disk["genre"]){
                $filtered[]=$disk;
            }
        }
    }
    
    header('Content-Type: application/json');
    
    echo json_encode($filtered);
?>