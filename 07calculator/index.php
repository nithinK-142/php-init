<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="flex flex-col mt-20 items-center space-y-6">
            <div class="flex space-x-4">
                <input type="number" name="num1" class="p-2 px-2 rounded-md text-xl font-semibold">
                <input type="number" name="num2" class="p-2 px-2 rounded-md text-xl font-semibold">
            </div>
            <div class="flex space-x-4">
                <button type="submit" name="add" class="px-4 py-2 bg-gray-300 rounded-md font-bold text-xl">+</button>
                <button type="submit" name="subtract" class="px-4 py-2 bg-gray-300 rounded-md font-bold text-xl">-</button>
                <button type="submit" name="multiply" class="px-4 py-2 bg-gray-300 rounded-md font-bold text-xl">*</button>
                <button type="submit" name="divide" class="px-4 py-2 bg-gray-300 rounded-md font-bold text-xl">/</button>
            </div>
        </div>
    </form>

    <?php
        function getPostValue($key){
            return isset($_POST[$key]) ? htmlspecialchars($_POST[$key]) : null;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // grab input
            $num1 = filter_input(INPUT_POST,"num1", FILTER_SANITIZE_NUMBER_FLOAT);
            $num2 = filter_input(INPUT_POST,"num2", FILTER_SANITIZE_NUMBER_FLOAT);

            // grab operator
            $add = getPostValue("add");
            $subtract = getPostValue("subtract");
            $multiply = getPostValue("multiply");
            $divide = getPostValue("divide");
        

            $errors = false;

            if(empty($num1) || empty($num2)){
                echo "<p class=\"text-red-500 text-xl font-semibold text-center\">All fields are required!!!</p>";
                $errors = true;
                exit();
            }
            
            if(!is_numeric($num1) || !is_numeric($num2)){
                echo "<p class=\"text-red-500 text-xl font-semibold text-center\">Enter only numbers!!!</p>";
                $errors = true;
                exit();
            }

            // perform calculations
            if(!$errors) {
                if(isset($add)) {
                    $result = $num1 + $num2;
                    echo "<p class=\"text-xl font-semibold text-center\">Result: $result</p>";
                } elseif(isset($subtract)) {
                    $result = $num1 - $num2;
                    echo "<p class=\"text-xl font-semibold text-center\">Result: $result</p>";
                } elseif(isset($multiply)) {
                    $result = $num1 * $num2;
                    echo "<p class=\"text-xl font-semibold text-center\">Result: $result</p>";
                } elseif(isset($divide)) {
                    if($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "<p class=\"text-xl font-semibold text-center\">Result: $result</p>";
                    } else {
                        echo "<p class=\"text-red-500 text-xl font-semibold text-center\">Cannot divide by zero!</p>";
                    }
                }
            }
        }
    ?>
</body>
</html>