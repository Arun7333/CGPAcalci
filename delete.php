<?php
    session_start();
    $dep=$_SESSION['dep'];
    $reg=$_SESSION['reg'];
    $type=$_GET['type'];
    $conn=mysqli_connect("localhost","root","","$reg");
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql="DELETE FROM `$dep` WHERE scode='$id';";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("Location:subject.php?type=$type");
        }
        else{
            echo 'Next Time';
        }
    }
?>