<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="h-screen flex justify-center items-center flex-col">
    <?php
    $students = ['name' => "Juan Dela Cruz", 'course' => "BSIT", 'year' => 2,];

    foreach ($students as $student) {
        echo $student . "<br>";
    }
    // push new assoc array
    $students['status'] = "Active";



    var_dump($students)
    ?>


</body>

</html>