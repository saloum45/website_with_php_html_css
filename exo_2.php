<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo_2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="exo_2">
        <form action="" method="post">
            <label for="valeur">saisir valeur : </label><input type="number" name="valeur" id="valeur">
            <input type="submit" name="submit" value="resultat"> 
        </form>
        
        <h3>
            <?php
                if(isset($_POST['submit']) ){
                    $valeur=$_POST['valeur'];
                    if(!empty($valeur) && $valeur >0){
                        for ($i=1; $i <=$valeur ; $i++) { 
                            # code...
                            if($i%2==0){
                                echo $i." ";
                            }
                        }
                    } else{
                        echo "respectez les consignes s'il vous plait";
                    }
                    
                }
                
            ?>
        </h3>

    </div>

    
    
</body>
</html>