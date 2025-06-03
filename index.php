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
    $products = [
        "fruits" => ["Apple", "Strawberry", "Banana"],
        "prices" => ["20", "50", "100"]
    ];

    foreach ($products as $product => $fruits) {
        echo "$product<br>";

        foreach ($fruits as $fruit) {
            echo "$fruit<br>";
        }
        echo "<br>";
    }
    ?>


</body>

</html>