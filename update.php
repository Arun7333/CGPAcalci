<?php
    include 'header.html';
    include 'connect.php';
    $id=$_GET['updateid'];
    $type=$_GET['type'];
    $sql="SELECT * FROM `cse` WHERE scode='$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $scode=$row['scode'];
    $subject=$row['subject'];
    $grade=$row['grade'];
    if(isset($_POST['submit'])){
        $scode=$_POST['scode']; 
        $subject=$_POST['subject'];
        $grade=$_POST['grade'];
        $sql="UPDATE `cse` SET `scode`='$scode',`subject`='$subject',`grade`='$grade' WHERE scode='$id'";
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
        <title>Updatepage</title>
        <link rel="stylesheet" href="add.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=REM:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>

    <body class="body">

        <div>
            <form method="post">
                <label>Subject code</label>
                <input name="scode" type="text" required value="<?php echo $scode?>">
                <label>Subject</label>
                <input name="subject" type="text" required value="<?php echo $subject?>">
                <label>Grade</label>
                <input name="grade" type="number" required value="<?php echo $grade?>">
                <button name="submit">Submit</button>
            </form>
        </div>

    </body>
</html>