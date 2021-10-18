<?php 
    require __DIR__ .'/db/dataBase.php'
;?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP AJAX DISCHI</title>
</head>
<body>
    <div class="container">
        <header>
            <img src="" alt="spotify logo">
        </header>

        <div class="cd-album">
            <?php foreach ($dischi as $album) { ?>
                <div class="dischi-album">
                    <img src = "<?php echo $album["poster"]; ?>"  >
                    <h3> <?php echo $album["title"]; ?></h3>
                    <p> <?php echo $album["author"]; ?></p>
                    <p> <?php echo $album["year"] ; ?></p>
                </div>
            <?php ; } ?>
        </div>
 
        
    </div>
    
</body>
</html>