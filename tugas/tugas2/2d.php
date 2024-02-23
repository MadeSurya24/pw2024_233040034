<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        .flex {
            display: flex;
        }
        .kotak {
            width: 100px;
            height: 100px;
            background-color: black;
            border: 1px solid black;
            color: white;
            text-align: center;
            line-height: 100px;
            display: inline-block;
        }

        .warna_kotak1 {
            background-color: black;
        }

        .warna_kotak2 {
            background-color: white;
        }
    </style>
</head>
<body>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <div class="flex">
            <?php for ($j = 1; $j <= 5; $j++) { ?>
                <?php if (($i + $j) % 2 == 0  ) { ?>
                    <div class="kotak warna_kotak1"></div>
                <?php } else { ?>
                    <div class="kotak warna_kotak2"></div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>
</body>
</html>