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


    <a href="index.php">index loop</a>

<form action="">
    <label for="">เลขเเม่สูตรคูณ</label> <br>
    <input type="number" name="num" id="">

    <input type="submit" value="คำนวณ">
    </form>

<?php
        if (isset($_GET["num"])) {
            $num = $_GET["num"];
            echo "<h2>สูตรคูณแม่ " . $num . "</h2>";

            $i = 1;                          
            while ($i <= 12) {               
                echo "<span style='color:#888;font-size:14px;line-height:1.9'>"
                     . $num . "x" . $i . "=" . $num * $i
                     . "</span><br>";
                $i++;                      
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

    /* พื้นหลังม่วงไล่สี */
    background: linear-gradient(-45deg,
        #2b0a3d,
        #5a189a,
        #7b2cbf,
        #9d4edd,
        #c77dff
    );
    background-size:400% 400%;
    animation: gradientMove 8s ease infinite;
}

/* เคลื่อนสีพื้นหลัง */
@keyframes gradientMove{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

/* แสงกระจกสะท้อนวิ่งผ่าน */
body::before{
    content:"";
    position:fixed;
    top:-50%;
    left:-120%;
    width:60%;
    height:200%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,0.8),
        transparent
    );
    transform:rotate(25deg);
    animation: shine 2.8s linear infinite;
}

/* วิ่งเหมือนแสงสะท้อนกระจก */
@keyframes shine{
    0%{
        left:-120%;
    }
    100%{
        left:150%;
    }
}

/* ทำให้เนื้อหาอยู่เหนือเอฟเฟกต์ */
h1,h2,a,form,span,label{
    position:relative;
    z-index:2;
}

/* หัวข้อเรืองแสง */
h1{
    color:#fff !important;
    text-shadow:
        0 0 5px #fff,
        0 0 15px #c77dff,
        0 0 25px #9d4edd;
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

/* input สวยขึ้น */
input{
    padding:10px;
    border-radius:12px;
    border:none;
    outline:none;
}

input[type="submit"]{
    background:#7b2cbf;
    color:white;
    cursor:pointer;
    transition:0.3s;
}

input[type="submit"]:hover{
    transform:scale(1.05);
    background:#9d4edd;
}

/* ผลลัพธ์สูตรคูณ */
span{
    display:inline-block;
    color:#f3e8ff !important;
    text-shadow:0 0 5px rgba(255,255,255,0.3);
}
</style>

</head>