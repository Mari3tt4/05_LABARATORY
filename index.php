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
        $shapes = array(
            "Heart",
            "Rectangle",
            "Square",
            "Round"
        );

        $flavors = array(
            "Chocolate",
            "Vanilla",
            "Lemon",
            "Cheesecake"
        );

        $toppings = array (
            "Cookies",
            "Spun-sugar Flowers",
            "Mini Chocolate Candies",
            "Marshmallows"
        );
    ?>

    <h2>D-I-Y Cake</h2>

    <form method="post" action="process_form.php">
        <table>
            <tr>
                <th>Cake Shape</th>
                <th>Cake Flavor</th>
                <th>Cake Toppings</th>
            </tr>
            <tr>
                <td>
                    <?php 
                        foreach ($shapes as $shape) {
                            echo "<input type='radio' name='shape' value='$shape'> $shape <br>";
                        }
                    ?>
                </td>
                <td>
                    <?php
                        foreach ($flavors as $flavor) {
                            echo "<input type='radio' name='flavor' value='$flavor'> $flavor <br>";
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        foreach ($toppings as $topping) {
                            echo "<input type='radio' name='topping' value='$topping'> $topping <br>";
                        }
                    ?>
                </td>
            </tr>
        </table>
        
    </form>
</body>
</html>
