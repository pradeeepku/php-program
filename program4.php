<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Program3</title>
</head>
<body>

<?php


$counter = 0;

function test(){
global $counter;
$counter++;

}

test();
test();
test();
test();
test();
echo $counter;

?>
    
</body>
</html>