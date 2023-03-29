<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo_4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <?php
            function traiterfrm(){
                if(isset($_POST['submit'])){
                    extract($_POST);
                    if(!empty($nom) && !empty($prenom) && !empty($email)){
                        echo "BIENVENUE A ".$prenom." ".$nom." ".$email;
                    }else{
                        echo "veuillez renseignez tous les champs ";
                    }
                }
            }
        ?>
    

    <div class="exo_4">
    <form action="" method="post">
            <label for="nom">nom</label><input type="text" name="nom" id="nom"><br>
            <label for="prenom">prenom</label><input type="text" name="prenom" id="prenom"><br>
            <label for="email">email</label><input type="email" name="email" id="email"><br>
            <input type="submit" name="submit" value="envoyer">
    </form>
    <h3>
        <?php
            if(isset($_POST['submit'])){
                // if($_SERVER("method==post")){
                //     traiterfrm();
                // }
               
                
                traiterfrm();
            } 
        ?>
    </h3>
    </div>
</body>
</html>