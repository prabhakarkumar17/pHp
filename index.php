<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post"> 

        <!-- <label>Username : </label>
        <input type="text" name="username"> <br>
        
        <label>Password : </label>
        <input type="password" name="password"> <br> -->

        <!-- <label>Radius : </label>
        <input type="number" name="radius"> <br>
        
        <button type="submit">Calculate</button> -->

        <!-- <label>Enter your age:</label>
        <input type="number" name="age"><br>

        <button type="submit">Check eligibility</button> -->

        <!-- <button type="submit" name="stop">Stop</button> -->

    </form>
</body>
</html>

<?php
    $a = 45; //Normal variable declaration.
    $b = 95; //Integer
    $name = "Mahendra Singh Dhoni"; //String 
    $price = 5.99; //Float

    /*
    OPERATOR 
    
    1. Arthimetic -> +, -, *, /, %, **

    2. Increment/Decrement -> ++, --

    3. Operator Precedence -> ()
                              **
                              *, /, % 
                              +, -
    */
    // echo $a + $b;

    /* 
        There two of the many super global variables in PHP :-

        1. GET method -> Used to get the form data
                         Not secure 
                         Data is appended to the URL
                         Bookmark is possible with the values
                         Ex - http://localhost/pHpProjects/index.php?username=Prabhakar&password=123456
                         
        2. POST method -> Used to get the form data
                          Secure
                          Data is not appended to the URL, rather gets added in the request header
                          Boorkmark is not possible
                          Ex - http://localhost/pHpProjects/index.php

        Both GET and POST are kind of array implementation
    */
    // $username = $_POST["username"];
    // $password = $_POST["password"];

    // echo $username ."<br>". $password;

    /**
     * MATH Function -> abs($x) - To get the absolute value
     *                  max($x) - Find the maximum
     *                  min($x) - Find the minimum
     *                  round($x) - Round the floating point no to its nearest whole no
     *                  floor($x) - Max whole no which is less than x
     *                  ceil($x) - Min whole no which is greater than x
     *                  pi() - 3.14....
     */

    // $radius = $_POST["radius"];

    // $area = pi() * pow($radius, 2);
    // $area = round($area, 2); //It will round the area from 2nd digit after decimal

    // $circumference = round(2 * pi() * $radius, 2);

    // $volume = round(pi() * pow($radius, 3), 2);

    // echo "Area = {$area}cm^2 <br>";
    // echo "Circumference = {$circumference}cm <br>";
    // echo "Volume = {$volume}cm^3";



    /**
     * CONDITIONAL STATEMENTS - if , else
     */

    // $age = $_POST["age"];

    // if($age >= 18 && $age <=44){
    //     echo "You are eligible to vote";
    // } elseif($age >=45 && $age <=60){
    //     echo "You are eligible for candidate";
    // } else {
    //     echo "You better grow up first";
    // }

    /**
     * LOOPING STATEMENTS - for, while
     */

    // $counter = 0;
    // $isStop = true;

    // for($i=0; $i<=10;i++){
    //     echo $i ."<br>";
    // }

    // while($isStop){

    //     $counter++;
    //     echo $counter."<br>";

    //     if(isset($_POST["stop"])){
    //         $isStop = false;
    //     } else {
    //         echo $counter."<br>";
    //     }
    // }

    /**
     * ARRAY - To store more than one similiar type of values in one variable
     
    
    $cars = array("Mercedez", "BMW", "Maruti");

    echo $cars[1]; //It will print single value of an array

    array_push($cars, "Audi"); //It will ADD an element into the end of array 

    array_pop($cars); //It will DELETE the element from end of array

    array_shift($cars); //It will DELETE one element from beginning

    array_unshift($cars, "Mahindra"); //It will ADD element from beginning

    $cars = array_reverse($cars); //It will REVERSE the array

    echo count($cars); //Count the no of elements in the array


    foreach($cars as $car){
        echo $car ."<br>";
    }
    */
?>





