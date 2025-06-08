<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex items-center justify-center flex-col h-screen">

        <?php
        function counter()
        {
            static $count = 0; // because of this the value will remain
            $count++;
            echo "$count <br>";
        }
        ?>
        <div class="border-2 border-black p-2 rounded-2xl bg-blue-300  w-[300px] m-3">


            <p class="text-center text-white p-4"><?php
                                                    counter();
                                                    echo "1st Call value ";
                                                    counter();
                                                    echo "2nd Call value increased";
                                                    counter();
                                                    echo "3rd Call value increased";
                                                    counter();
                                                    echo "4th Call value increased";
                                                    counter();
                                                    echo "5th Call value increased";
                                                    echo $_SERVER['REMOTE_ADDR'] . " Initial Value";
                                                    ?></p>



        </div>

    </div>



</body>

</ html>