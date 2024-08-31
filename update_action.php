<?php
if(isset($_POST['submit'])){
    session_start();
    $batch=$_SESSION['batch'];
    $name=$_SESSION['name'];
    $reg=$_SESSION['reg'];
    echo $batch;
    $sem=array("sem1","sem2","sem3","sem4","sem5","sem6","sem7","sem8",);
    $conn=mysqli_connect("localhost","root","","$reg");
    $sql="TRUNCATE TABLE `$batch`";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"Deleted";
    }
    else{
        echo"Error Expected in Deletion";
    }
    $n=0;
    while($n<sizeof($sem)){
        $i=0;
        while($_POST[$sem[$n]][$i]!='-'&&$_POST[$sem[$n]][$i]!=''){
            $scode=$_POST[$sem[$n]][$i];
            $sql="INSERT INTO `$batch`(`scode`, `sem`) VALUES ('$scode','$sem[$n]');";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo $_POST[$sem[$n]][$i];
                echo "<br>";
            }
            $i++;
        }
        $n++;
    }
    if($result){
        header("Location:admin_main.php");
    }
} 
?> 