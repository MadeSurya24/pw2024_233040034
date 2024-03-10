<?php 

$KomponenPC = ["Motherboard","Processor","Hard Disk","PC Coller","VGA Card","SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b, Macam macam perangkat keras komputer</title>
</head>
<body>
    <h1>
        Macam-macam perangkat keras komputer
    </h1>
    <ol>
        <?php foreach ($KomponenPC as $k) : ?>
            <li>
                <?= $k; ?>
            </li>
        <?php endforeach; ?>
    </ol>

    <h1>
        Macam-macam perangkat keras komputer baru
    </h1>
    <ol>
        <?php 
            array_push($KomponenPC, "Card Reader", "Modem"); sort($KomponenPC);
        ?>
        <?php foreach($KomponenPC as $k) : ?>
            <li>
                <?= $k; ?>
            </li>
        <?php endforeach; ?>
    </ol>
</body>
</html>