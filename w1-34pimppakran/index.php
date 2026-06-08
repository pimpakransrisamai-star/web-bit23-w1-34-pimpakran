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


    <a href="while.php">while loop</a>

<form action="">
    <label for="">เลขเเม่สูตรคูณ</label> <br>
    <input type="number" name="num" id="">

    <input type="submit" value="คำนวณ">
    </form>

<?php
    if( isset( $_GET["num"])  ){

        $num = $_GET["num"];

        echo "<h2>สูตรคูณเเม่ ". $num ."</h2>";

            //. เริ่มต้น  สิ้นสุด  เพิ่มทีละ 
             for($i =1; $i <= 12; $i++){
                 echo $num ." x " . $i . " = " .  $num * $i ."<br>";
            }
        }
    ?>

</body>
</html>