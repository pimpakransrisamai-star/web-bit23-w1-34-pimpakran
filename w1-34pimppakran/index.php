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
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>สูตรคูณ</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    min-height:100vh;
    font-family:Arial,sans-serif;
    text-align:center;
    padding:30px;
    overflow:hidden;

    /* พื้นหลังชมพูไล่สี */
    background: linear-gradient(-45deg,
        #2a001a,
        #ff4d6d,
        #ff85a1,
        #ffb3c6,
        #ffc2d1
    );
    background-size:400% 400%;
    animation: bg 8s ease infinite;
}

/* เคลื่อนไหวพื้นหลัง */
@keyframes bg{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

/* แสงกระจกสะท้อน */
body::before{
    content:"";
    position:fixed;
    top:-60%;
    left:-120%;
    width:60%;
    height:220%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,0.85),
        transparent
    );
    transform:rotate(25deg);
    animation: shine 2.5s linear infinite;
}

/* วิ่งเหมือนแสงสะท้อน */
@keyframes shine{
    0%{left:-120%;}
    100%{left:150%;}
}

/* ให้เนื้อหาอยู่ด้านหน้า */
h1,h2,a,form,span,label{
    position:relative;
    z-index:2;
}

/* หัวข้อเรืองแสง */
h1{
    color:white !important;
    text-shadow:
        0 0 10px #fff,
        0 0 20px #ff4d6d,
        0 0 30px #ff85a1;
    margin-bottom:20px;
}

/* ลิงก์ */
a{
    color:white;
    font-weight:bold;
    text-decoration:none;
}

/* ฟอร์ม */
form{
    margin:20px 0;
}

label{
    color:white;
    font-size:18px;
}

/* input */
input{
    padding:10px;
    border:none;
    border-radius:12px;
    outline:none;
}

input[type="submit"]{
    background:#ff4d6d;
    color:white;
    cursor:pointer;
    transition:0.3s;
}

input[type="submit"]:hover{
    transform:scale(1.05);
    background:#ff85a1;
}

/* ผลลัพธ์สูตรคูณ */
h2, br{
    color:white;
}
</style>

</head>