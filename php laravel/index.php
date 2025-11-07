<?php
// print the 10 welcome
// for($i = 1; $i <= 10; $i++) {
//     echo "welcome to php<br>";
// }

// variable declare pandra method 
 $name ="Ramkumar";
// echo " welcome to the laravel project $name";

//addition method
$x=10;
$y=20;

// echo "result =". $x+$y;



// float and double method 

//$price = 99.50;   float value
//$temperature = 32.8;  double value (treated same as float)

// echo "Product Price: $price<br>";
// echo "Today Temperature: $temperature<br>";

// Arithmetic using float
// $sum = $price + $temperature;

// echo "Total = $sum";


?>


<!-- how to insaert the html element in php  -->
 
<!doctype html>
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
            color: lightskyblue;
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
    <h1>Welcome Team</h1>
    <h2>Welcome to the Laravel Session, <?php echo $name; ?>!</h2>
    <h3>PRESENT STUDENT = <?php echo $x + $y; ?></h3>
</body>

</html>


