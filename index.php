<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">
    <div class="flex items-center justify-center flex-col h-screen">
        <h1 class="text-white text-4xl font-bold">PHP Constant Variable</h1>
        <?php
        define('SCHOOL_NAME', "Taguig University"); // this is how you declare a constant variable in php
        ?>
        <div class="border-2 border-green-500  shadow-2xl shadow-green-400 p-2 rounded-2xl bg-green-300  w-[300px] m-10">


            <p class="text-center  text-shadow-black text-shadow-2xl p-4 ">Calling the Constant <br><?php
                                                                                                    echo SCHOOL_NAME;
                                                                                                    ?></p>



        </div>
        <div class="border-2 border-red-700  shadow-2xl shadow-red-400 p-2 rounded-2xl bg-red-300  w-[300px] m-10">


            <p class="text-center  p-4 ">Changing the Constant Value ; <?php
                                                                        //   SCHOOL_NAME = "Global Reciprocal College";
                                                                        echo SCHOOL_NAME;
                                                                        ?></p>



        </div>

    </div>



</body>

</ html>