<?php
    include 'admin_header.php';
    session_start();
    $batch=$_SESSION['batch'];
    $name=$_SESSION['name'];
    $reg=$_SESSION['reg'];
    $sem=array("sem1","sem2","sem3","sem4","sem5","sem6","sem7","sem8",);
    $conn=mysqli_connect("localhost","root","","$reg");                  
?>
<html>
    <head> 
        <title>UpdatePage</title>
        <link rel="stylesheet" href="adminmain.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=REM:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class='admin'>
            <?php
                echo "<h1>$name</h1>";
            ?>
            <hr>
            <div class="admin-main_body">
            <div class='batch-header'>
                <h2>Batches</h2>
                <a href="">Batch 18-22</a>
                <a href="">Batch 19-23</a>
                <a href="">Batch 20-24</a>
                <a href="">Batch 21-25</a>
            </div>
            <form action="update_action.php" method="post">
            <div class="container">
                <div class="table">
                <?php
                $i=0;
                $semester=array("Semester1","Semester2","Semester3","Semester4","Semester5","Semester6","Semester7","Semester8",);
                    while($i<sizeof($sem)){
                        echo"<table id='table'>
                        <thead>
                        <tr>
                        <th id='sem'>$semester[$i]</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
                    $sql="SELECT * FROM `$batch` WHERE sem='$sem[$i]';";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        $j=0;
                        while($j<13){
                            if($row=mysqli_fetch_assoc($result)){
                            $scode=$row["scode"];
                            echo"
                                <tr>
                                    <td><input name='$sem[$i][]' value='$scode'></input></td>
                                </tr>
                            ";
                        }
                        else{
                            echo"
                                <tr>
                                    <td><input name='$sem[$i][]' value='-'></input></td>
                                </tr>
                            ";
                        }
                        $j++;
                        }
                    }
                    else{
                        echo"nooo";
                    }
                    $i++;
                    echo"</tbody>
                    </table>";
                }
                ?>
                </div>
                <button type="submit" name="submit">Submit</button>
            </div>
            </form>
            </div>
        </section>
    </body>
</html>