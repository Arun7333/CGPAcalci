<?php
    $dep;
    $reg;
    session_start();
    if($dep=$_SESSION['department']){
        $dep=$_SESSION['department'];
        $reg=$_SESSION['regulation'];
    }
    $conn=mysqli_connect("localhost","root","","$reg");
    function regulation($val){
        if($val=='Select your Regulation'){
            echo 'Please select your regulation';
        }
        else if($val=='Regulation-2018'){
            global $reg;
            $reg='r2018';
        }
        $_SESSION['regulation']=$reg;
    }
    function department($val){
        if($val=='Select your Department'){
            echo 'Please select your Department';
        }
        else if($val=='B.E - Computer Science and Engineering'){
            global $dep;
            $dep='21-25cse';
        }
        $_SESSION['department']=$dep;
    }
    if(isset($_POST['submit'])){
        regulation($_POST['reg']);
        department($_POST['dep']);
        $conn=mysqli_connect("localhost","root","","$reg");                
    }
    @include "admin_header.php";
?>
<html>
    <head> 
        <title>Showpage</title>
        <link rel="stylesheet" href="show.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=REM:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>

    <body class="body">

        <div class="show">
            <table class="table">
                <thead>
                <tr>
                    <th>Semester</th>
                    <th>Subject code</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT * FROM `$dep` WHERE 1";
                        $result=mysqli_query($conn,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $sem=$row['sem'];
                                $scode=$row['scode'];
                                
                                echo"
                                <tr>
                                    <td>$sem</td>
                                    <td>$scode</td>
             
                                    <td>
                                    <a href='update.php?updateid=$scode'><button id='up'>Update</button></a>
                                    <a href='delete.php?deleteid=$scode'><button id='del'>Delete</button></a>
                                    </td>
                                </tr>
                                ";                               
                            }
                        }
                        else{
                            echo 'unsuccess';
                        }
                    ?>
                </tbody>
            </table>
            <a href='add.php'><button id='add'>Add Subject</button></a>
        </div>
        
    </body>
</html>