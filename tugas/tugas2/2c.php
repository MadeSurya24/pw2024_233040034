<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <style>
        .flex {
            display: flex;
        }
        .kotak {
            width: 50px;
            height: 50px;
            background-color: skyblue;
            border: 1px solid blue;
            color: white;
            text-align: center;
            line-height: 50px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php 
    for ($i = 10; $i >= 1; $i -= 1) {?>
        <div class="flex">
            <?php for ($j = 1; $j <= $i; $j++) {?>
                <div class="kotak">
                    <?php echo $j ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</body>

</html>