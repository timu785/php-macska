<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $szo1 = "alma";
        $szo2 = "körte";
        $szo3 = "barack";
        $szo4 = "dinnye";
    ?>
    <div class="grid-tarolo">
        <img src="kepek/ugly_cat.png" alt="Description of the image">
        <div>
            <h1>A fenntarthatóság szintjei</h1>
            <ul>
                <li><?php echo $szo1 ?></li>
                <li><?php echo $szo2 ?></li>
                <li><?php echo $szo3 ?></li>
                <li><?php echo $szo4 ?></li>
            </ul>
            <div class="grid-tarolo">
                <div class="kep-tarolo">
                    <img src="kepek/hatter.png" alt="eredetihattar" style="width:100%;">
                    <img src="kepek/image3.jpeg" alt="rim">
                </div>
                <div class="kep-tarolo">
                    <img src="kepek/image0.jpeg" alt="meme" style="width:100%;">
                </div>
            </div>
        </div>
    </div>
    <?php
        $eroforrasok = array();
        $helyzet = ["a környezet pusztul", "környezeti egyensúly", "a környezet megújul"];
        $fenntarthatosag = array();
    ?>
    <table>
        <tr>
            <td><p>oszlop1</p></td>
            <td><p>oszlop2</p></td>
            <td><p>oszlop3</p></td>
        </tr>
        <tr>
            <td><p><?php echo $helyzet[$0] ?></p></td>
            <td><p><?php echo $helyzet[$1] ?></p></td>
            <td><p><?php echo $helyzet[$2] ?></p></td>
        </tr>
        <tr>
            <td><p>content</p></td>
            <td><p>content</p></td>
            <td><p>content</p></td>
        </tr>
        <tr>
            <td><p>content</p></td>
            <td><p>content</p></td>
            <td><p>content</p></td>
        </tr>
    </table>

</body>
</html>