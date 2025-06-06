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


        <div class="border-2 border-black p-2 rounded-2xl bg-blue-300  w-[300px] m-3">
            <?php
            $upperCase = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $upperCase = $_POST['upperCase'];
            }
            ?>

            <form action="index.php" method="post" class=" flex justify-center items-center flex-col">
                <p class="text-center">Text Inputed here will turn into Uppercase</p>
                <label for="upperCase">Enter Text :</label><br>
                <input type="text" name="upperCase"> <br>
                <button name="submit" class="p-3 text-center border-2 rounded-2xl m-2">Convert</button>
                <p><?php
                    echo strtoupper($upperCase);
                    ?></p>
            </form>
        </div>
        <div class="border-2 border-black p-2 rounded-2xl bg-red-300  w-[300px] m-3">
            <?php
            $strpos = $result = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $strpos = $_POST['strpos'];
                $result = strpos($strpos, "a");
            }
            ?>
            <form action="index.php" method="post" class=" flex justify-center items-center flex-col">
                <p class="text-center">Text Inputed here will find the letter a</p>
                <label for="strpos">Enter Text with a :</label><br>
                <input type="text" name="strpos"> <br>
                <button name="submit" class="p-3 text-center border-2 rounded-2xl m-2">Find</button>
                <p><?php
                    echo $result;
                    ?></p>
            </form>
        </div>
        <div class="border-2 border-black p-2 rounded-2xl bg-yellow-300  w-[300px] m-3">
            <?php
            $substr = $extracted = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $substr = $_POST['substr'];
                $extracted = substr($substr, 2, 5);
            }
            ?>
            <form action="index.php" method="post" class=" flex justify-center items-center flex-col">
                <p class="text-center">Text Inputed here will be extracted starting from index 2 with length 5</p>
                <label for="substr">Enter Text with a :</label><br>
                <input type="text" name="substr"> <br>
                <button name="submit" class="p-3 text-center border-2 rounded-2xl m-2">Extract</button>
                <p><?php
                    echo $extracted;
                    ?></p>
            </form>
        </div>
        <div class="border-2 border-black p-2 rounded-2xl bg-green-300  w-[300px] m-3">
            <?php
            $reverse  = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $reverse = $_POST['reverse'];
            }
            ?>
            <form action="index.php" method="post" class=" flex justify-center items-center flex-col">
                <p class="text-center">Text Inputed here will be reverserd </p>
                <label for="reverse">Enter Text with a :</label><br>
                <input type="text" name="reverse"> <br>
                <button name="submit" class="p-3 text-center border-2 rounded-2xl m-2">Reverse</button>
                <p><?php
                    echo strrev($reverse);
                    ?></p>
            </form>
        </div>
    </div>



</body>

</html>