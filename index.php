<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operators = $_POST['operators'];
    $ans = "    ";


    if (empty($num2 = $_POST['num2']) || empty($num1 = $_POST['num1'])) {
        $ans = "Please Input a Number!";
    } else {
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);

        if ($operators == "+") {
            $ans = $num1 + $num2;
        } else if ($operators == "-") {
            $ans = $num1 - $num2;
        } else if ($operators == "/") {
            if ($num2 == 0) {
                $ans = "Cannot divide 0";
            } else {
                $ans = $num1 / $num2;
            }
        } else if ($operators == "%") {
            $ans = $num1 % $num2;
        } else if ($operators == "x") {
            $ans = $num1 * $num2;
        } else {
            $ans = "Please Choose an Operator";
        }
    }
}
?>

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
        <div class="border-2 border-black p-5 rounded-2xl bg-green-300 ">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="num1">1st Number : </label><br>
                <input type="number"
                    name="num1"
                    placeholder="Enter First Number : "><br>
                <label for="num2">2nd Number : </label><br>
                <input type="number"
                    name="num2"
                    placeholder="Enter Second Number : "><br>
                <select name="operators" id="operatords">Choose Operators
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="x">x</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                </select><br>
                <button name="submit">Submit</button>

                <p><?php
                    echo htmlspecialchars($ans);
                    ?></p>

            </form>
        </div>
    </div>
</body>

</html>