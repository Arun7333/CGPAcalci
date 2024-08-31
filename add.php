<?php
    include 'header.html';
    session_start();
    $dep=$_SESSION['dep'];
    $reg=$_SESSION['reg'];
    $type=$_GET['type'];
    if(isset($_POST['submit'])){
        $scode=$_POST['scode'];
        $subject=$_POST['subject'];
        $grade=$_POST['grade'];
        $conn=mysqli_connect("localhost","root","","$reg");
        $sql="INSERT INTO `$dep` (`scode`, `subject`, `grade`,`category`,`dep`) VALUES ('$scode', '$subject', '$grade','$type','$type');";
        if($type=="PC"||$type=="PE"||$type=="OE"){
            $sql="INSERT INTO `$dep` (`scode`, `subject`, `grade`,`category`,`dep`) VALUES ('$scode', '$subject', '$grade','$type','$dep');";
        }
        $result=mysqli_query($conn,$sql);
        if($result){
            header("Location:subject.php?type=$type");
        }
        else{
            echo'unsuccesfull';
        }
    }
?>
<html>
    <head> 
        <title>Addpage</title>
        <link rel="stylesheet" href="add.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=REM:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>

    <body class="body"> 

        <div>
            <form method="post">
                <label>Subject Code</label>
                <input name="scode" type="text" required>
                <label>Subject</label>
                <input name="subject" type="text" required>
                <label>Grade</label>
                <input name="grade" type="number" required>
                <button name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>