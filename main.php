<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main_page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="banner">
        <img src="projet_bootstrap.jpg" alt="">
    </div>
    <br>
    <hr>
    <br>
    <div class="lien">
        <a href="?contain=exo_1">exo_1</a>
        <a href="?contain=exo_2">exo_2</a>
        <a href="?contain=exo_3">exo_3</a>
        <a href="?contain=exo_4">exo_4</a>
    </div>
    <br>
    <div class="contain1" id="contain" name="contain">
        <?php
            if(isset($_REQUEST['contain'])){
                $contain=$_REQUEST['contain'];
                if($contain=="exo_1"){
                    include("/xampp/htdocs/DEVOIR/exo_1.php");
                }elseif ($contain=="exo_2") {
                    # code...
                    include("/xampp/htdocs/DEVOIR/exo_2.php");
                }elseif ($contain=="exo_3") {
                    # code...
                    include("/xampp/htdocs/DEVOIR/exo_3.php");
                }elseif ($contain=="exo_4") {
                    # code...
                    include("/xampp/htdocs/DEVOIR/exo_4.php");
                }
            }
        ?>
    </div>
</body>
</html>