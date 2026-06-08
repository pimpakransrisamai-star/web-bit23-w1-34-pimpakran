<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      echo "<h1 style='color:green'>w1 - Pimpakarn srisamai Bit.2/3 No.34</h1>";
    ?>



<form action="">
    <label for="">เลขเเม่สูตรคูณ</label> <br>
    <input type="number" name="num" id="">

    <input type="submit" value="คำนวณ">
    </form>

<?php
    if( isset( $_GET["num"])  ){

        $num = $_GET["num"];

        echo "<h2>สูตรคูณเเม่ ". $num ."</h2>";
        $i=1;

        while($i<=12) {
            echo $num ." x " . $i . " = " .  $num * $i ."<br>";
              $i++;
        }
        }
    ?>

</body>
</html>
<style>
body{
    font-family: Tahoma, sans-serif;
    background: linear-gradient(135deg,#f7d6ff,#ffd6ec);
    text-align: center;
    padding-top: 40px;
}

h1{
    color: #9c27b0 !important;
    background: white;
    display: inline-block;
    padding: 15px 25px;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,.1);
}

form{
    background: white;
    width: 350px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,.1);
}

label{
    font-size: 18px;
    color: #8e44ad;
    font-weight: bold;
}

input[type="number"]{
    width: 80%;
    padding: 10px;
    margin: 10px 0;
    border: 2px solid #d291ff;
    border-radius: 10px;
}

input[type="submit"]{
    background: linear-gradient(90deg,#c86bff,#ff85c0);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 10px;
    cursor: pointer;
    font-weight: bold;
}

input[type="submit"]:hover{
    opacity: .9;
}

h2{
    color: #c2185b;
    background: white;
    display: inline-block;
    padding: 10px 20px;
    border-radius: 15px;
    margin-top: 20px;
}

body br + *{
    color: #6a1b9a;
}
</style>

