<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="h-screen flex justify-center items-center flex-col bg-gray-800 text-white">
    <?php
    $numbers = [1, 2, 4, 5, 76];
    echo "sum of all numbers " . array_sum($numbers) . "<br>";
    echo "maximum value " . max($numbers) . "<br>";
    $desc = rsort($numbers);

    foreach ($numbers as $number) {
        echo $number . "<br>";
    }
    ?>


</body>

</html>