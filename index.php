<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./src/input.css" />
</head>

<body>
    <?php
    $username = $password = $messageUsername = $messagePassword = $loginMsgSuccess = $loginMsgFail = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sanitizedUserName = trim($username);
        $sanitizedPassword = trim($password);
        if ($sanitizedUserName === "Admin") {
            $messageUsername = "Username Match!";
        } else {
            $messageUsername = "Username don't match!";
        }

        if ($sanitizedPassword == "12345") {
            $messagePassword = "Password Match!";
        } else {
            $messagePassword = "Password don't match!";
        }

        if ($sanitizedUserName === "Admin" && $sanitizedPassword == "12345") {
            $loginMsgSuccess = "Login successful, welcome admin!";
        } else {
            $loginMsgFail = "Invalid credentials";
        }
    }
    ?>


    <br><br><br><br><br>

    <div class="flex items-center justify-center w-.5 h-0.4">
        <div class="border-1 border-black p-4 rounded-3xl">
            <form action="index.php" method="POST" class="text-center border-2 border-black p-5 rounded-3xl">
                <p class="bg-green-300">
                    <?php
                    echo htmlspecialchars($loginMsgSuccess);
                    ?>
                </p>
                <p class="bg-red-300">
                    <?php
                    echo htmlspecialchars($loginMsgFail);
                    ?>
                </p>
                <label for="username">Username : </label>
                <input class="m-2 border-2 border-black" type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>
                <p class="bg-green-300"> <?php
                                            echo htmlspecialchars($messageUsername);
                                            ?></p>
                <label for="password">Password :</label>
                <input class="m-2 border-2 border-black" type="password" name="password" value="<?php echo htmlspecialchars($password); ?>"><br>
                <p class="bg-green-300"> <?php
                                            echo htmlspecialchars($messagePassword);
                                            ?></p>
                <br>
                <button class="text-center bg-red-400 border-1 p-2 rounded-3xl" name="submit">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>