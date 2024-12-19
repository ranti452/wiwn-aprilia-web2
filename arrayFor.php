<?php
$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for Array</title>
</head>
<body>
    <?php
    for ($i = 0; $i < count($nama); $i++) { // Count determines the number of elements in the array
        // The loop will stop when all elements in the array have been displayed.
        echo "<li>$nama[$i]</li>";
    }
    ?>
</body>
</html>