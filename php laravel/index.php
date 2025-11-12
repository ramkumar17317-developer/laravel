<?php
// print the 10 welcome
// for($i = 1; $i <= 10; $i++) {
//     echo "welcome to php<br>";
// }

// variable declare pandra method 
//  $name ="Ramkumar";
// echo " welcome to the laravel project $name";

//addition method
//$x=10;
//$y=20;

// echo "result =". $x+$y;



// float and double method 

//$price = 99.50;   float value
//$temperature = 32.8;  double value (treated same as float)

// echo "Product Price: $price<br>";
// echo "Today Temperature: $temperature<br>";

// Arithmetic using float
// $sum = $price + $temperature;

// echo "Total = $sum";


// class method 
// class student{

//     public $student_name = "Ramkumar";
//     public $age = 24;
// }

// $student_class = new student();
// echo $student_class->student_name;
// echo $student_class->age; 





?>


<!-- how to insaert the html element in php  -->
 
<!-- <!doctype html>
<html>
<head>
    <title>Laravel Session</title>

    <style>
        body{
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 80px;
            color: white;
        }

        h1{
            font-size: 45px;
            text-shadow: 2px 2px 5px black;
        }

        h2{
            background: rgba(255,255,255,0.2);
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 20px;
        }

        h3{
            margin-top: 30px;
            font-size: 28px;
            color: #ffe600;
            text-shadow: 2px 2px 5px black;
        }
    </style>
</head>

<body>
    <h1>Welcome</h1>
    <h2>Welcome to the Laravel Session, <?php echo $name; ?>!</h2>
    <h3>PRESENT STUDENT = <?php echo $x + $y; ?></h3>
</body>

</html> -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>String Task</title>
</head>
<body style="font-family:Arial; background:#f2f2f2; padding:30px;">

<div style="background:white; width:450px; padding:20px; border-radius:8px; box-shadow:0 0 8px rgba(0,0,0,0.2);">

<h2 style="text-align:center; color:black; margin-bottom:20px;">PHP String Task</h2>

<?php
$text = "welcome to php session";

echo "<p style='font-size:16px;'><b>Original String :</b> $text</p>";

echo "<p style='font-size:16px;'><b>String Length :</b> " . strlen($text) . "</p>";
echo "<p style='font-size:16px;'><b>Word Count :</b> " . str_word_count($text) . "</p>";
echo "<p style='font-size:16px;'><b>Position of 'php' :</b> " . strpos($text, 'php') . "</p>";

echo "<p style='font-size:16px;'><b>Uppercase :</b> " . strtoupper($text) . "</p>";
echo "<p style='font-size:16px;'><b>Lowercase :</b> " . strtolower($text) . "</p>";

echo "<p style='font-size:16px;'><b>After Replace (session → class) :</b> " . str_replace('session', 'class', $text) . "</p>";
?>

</div>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #dfe9f3, #ffffff);
            padding: 20px;
        }
        .box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 320px;
            margin: auto;
            box-shadow: 0 0 10px gray;
        }
        h2 {
            text-align: center;
            color: navy;
        }
        p {
            margin: 8px 0;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Arithmetic Operations</h2>

        <?php
        $num1 = 10;
        $num2 = 30;

        $add = $num1 + $num2;
        $diff = $num1 - $num2;  
        $mul = $num1 * $num2;
        $div = $num1 / $num2;
        $mod = $num1 % $num2;  
        $avg = ($num1 + $num2) / 2;  

        echo "<p>Addition: $add</p>";
        echo "<p>Subtraction: $diff</p>";
        echo "<p>Multiplication: $mul</p>";
        echo "<p>Division: $div</p>";
        echo "<p>Modulus (Remainder): $mod</p>";
        echo "<p>Average: $avg</p>";
        ?>
    </div>
</body>
</html>


