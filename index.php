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
        $siteName = "Pinoy Dev";

        function displaySite()
        {
            echo "<p class='text-red-500 bg-red-300 text-center m-3'>Without Global $siteName <br> </p>"; // this will send an error because siteName var was a global variable

            global $siteName;
            echo "<p class='text-green-600 bg-green-300 text-center m-3'>With Global $siteName</p>"; // this will run because of global keyword
        }
        ?>
        <div class="border-2 border-black p-2 rounded-2xl bg-blue-300  w-[300px] m-3">

            <p><?php
                echo displaySite();
                ?></p>

        </div>

    </div>



</body>

</ html>