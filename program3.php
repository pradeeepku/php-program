<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Program3 </title>
</head>
<body>
    <?php
    $golobvar = "Hello sir";

    function printlocalvar(){
        $X = " i love my india";
         global  $golobvar ;

        echo "local varialble  X :" .$X. "<br>";
        echo "local varialble  X :" .$golobvar. "<br>";

    }
    printlocalvar();

    echo "outside function x:".$golobvar."<br>";


    
    
    
    ?>
    
</body>
</html>