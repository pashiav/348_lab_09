<!DOCTYPE html>
<html lang="en">
<head>
    <title>Problem 4</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Problem 4</h1>
    <form method="post">
        <label for="num">Enter a positive number:</label>
        <input type="number" name="num" id="num" min="1">
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        if ($num > 0) {
            echo "<table border='1'>";
            echo "<tr><td>&times;</td>";
            for ($x = 1; $x <= $num; $x++) {
                echo "<th>$x</th>";
            }
            echo "</tr>";
            for ($x = 1; $x <= $num; $x++) {
                echo "<tr>";
                echo "<td><b>$x</b></td>";
                for ($y = 1; $y <= $num; $y++) {
                    echo "<td>" . ($x * $y) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Please enter a positive number.";
        }
    }
    ?>
</body>
</html>