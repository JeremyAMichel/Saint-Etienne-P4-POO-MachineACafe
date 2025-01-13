<?php
include_once '../utils/autoloader.php';

$machine = new MachineACafe();






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $machine->allumage(); ?></p>


    <p><?= $machine->mettreUneDosette(); ?></p>


    <p><?= $machine->faireDuCafe(); ?></p>




    <?php var_dump($machine);?>
</body>

</html>