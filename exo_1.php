<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo_1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    //here i use the array 
    <?php
        $information=array(
            array("id"=>1,"nom"=>"fall","prenom"=>"salem","moyenne"=>15),
            array("id"=>2,"nom"=>"diop","prenom"=>"fatou","moyenne"=>19),
            array("id"=>3,"nom"=>"counte","prenom"=>"marem","moyenne"=>10),
            array("id"=>4,"nom"=>"diaw","prenom"=>"ablaye","moyenne"=>13),
        );
        
    
    ?>

    <div class="exo_1">
        <table>
            <tr class="premier">
                <td>ID</td>
                <td>NOM</td>
                <td>PRENOM</td>
                <td>MOYENNE</td>
            </tr>
            <tr><?php foreach ($information as $key ): ?></tr>
                <td><?php echo $key['id'] ?></td>
                <td><?php echo $key['nom'] ?></td>
                <td><?php echo $key['prenom'] ?></td>
                <td><?php echo $key['moyenne'] ?></td>
            <?php endforeach ?>
        </table>
    </div>
    
</body>
</html>
