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
        <!-- <?php
                $names = array('name' => '', 'asd' => '', 'asd2' => "");
                $names['name'] = "Jay";
                echo $names['name'];
                ?> -->

        <?php
        $num1 = 1;
        $num2 = 5;
        $num3 = 2;
        $numbers = [1, 2, 4, 5];
        array_push($numbers, 2);
        print_r($numbers);

        $fullName = $email = $message = "";
        $errors = array('fullName' => "", 'email' => "", 'message' => "");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if (empty($fullName)) {
                $errors['fullName'] = "Please enter a Fullname";
            } else {
                if (!preg_match('/^[a-zA-Z]+$/', $fullName)) {
                    $errors['fullName'] = "Please enter a valid name";
                }
            }
            if (empty($email)) {
                $errors['email'] = "Please enter a email";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Please enter a valid email";
            }
            if (empty($message)) {
                $errors['message'] = "Please enter a Message";
            }
        }
        ?>
        <br><br><br><br><br>
        <form action="index.php" method="post">
            <label for="Full Name">Fullname :</label><br>
            <input type="text" name="fullName"><br>
            <p><?php
                echo htmlspecialchars($errors['fullName'])
                ?> </p>
            <label for="email">Email :</label><br>
            <input type="text" name="email" id="email"><br>
            <p><?php
                echo htmlspecialchars($errors['email'])
                ?> </p>
            <label for="message">Message</label><br>
            <input type="text" name="message" id="message"> <br>
            <p><?php
                echo htmlspecialchars($errors['message'])
                ?> </p>
            <button name="submit" type="submit">Submit</button>
        </form>

        <div class="flex items-center justify-center">
            <div class="container border-2 border-black w-[20vw] rounded-2xl p-5 bg-blue-300 text-white">
                <?php
                echo "Your Fullname : " . htmlspecialchars($fullName) . "<br>" .
                    "Email : " . htmlspecialchars($email) . "<br>" .
                    "Message : " . htmlspecialchars($message);

                ?>
            </div>
        </div>
    </body>

    </html>
