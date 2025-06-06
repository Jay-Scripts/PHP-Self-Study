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
        $name = $message = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
        }
        function greetUser($name)
        {
            $hour = date("H") + 8;
            if ($hour < 12) {
                $greeting = "Good Morning";
            } elseif ($hour <  18) {
                $greeting = "Good Afternoon";
            } else {
                $greeting = "Good Evening";
            }
            $message = "$greeting, $name! Welcome to our Website.";

            echo $message;
        }
        ?>
        <div class="border-2 border-black p-2 rounded-2xl bg-blue-300  w-[300px] m-3">

            <form action="index.php" method="post" class="flex flex-col items-center justify-center gap-2  text-white">
                <label for="name">Input your Name : </label>
                <input type="text" name="name" id="name">
                <button name="submit">Submit</button>
                <p><?php
                    echo greetUser($name);
                    ?></p>
            </form>

        </div>

    </div>



</body>

</html>