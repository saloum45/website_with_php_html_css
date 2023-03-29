<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo_3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="exo_3">
        <form action="" method="post">
            <label for="nom">nom</label><input type="text" name="nom" id="nom"><br>
            <label for="prenom">prenom</label><input type="text" name="prenom" id="prenom"><br>
            <label for="age">age</label><input type="number" name="age" id="age"><br>
            <input type="submit" name="submit" value="categorie">
        </form>
        <h3>
            <?php
                if(isset($_POST['submit'])){
                    extract($_POST);
                    if(!empty($nom)&&!empty($prenom)&&!empty($age)){
                        if($age<6){
                            echo $prenom." ".$nom." "." CATEGORIE :> BEBE ";
                        }elseif ($age>=6 && $age<=7) {
                            # code...
                            echo $prenom." ".$nom." "." CATEGORIE :>  POUSSIN ";
                        }elseif ($age>=8 && $age<=9) {
                            # code...
                            echo $prenom." ".$nom." "." CATEGORIE :> PIPILLE ";
                        }elseif ($age>=10 && $age<=11) {
                            # code...
                            echo $prenom." ".$nom." "." CATEGORIE :> MINIM ";
                        }elseif ($age==12) {
                            # code...
                            echo $prenom." ".$nom." "." CATEGORIE :> CADET ";
                        }else {
                            
                            echo " l'age saisit n'est pas pris en compte pour le moment";
                        }
                    }else{
                        echo "veuillez renseigner tous les champs";
                    }
                }
            ?>
        </h3>
    </div>
</body>
</html>