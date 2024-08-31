<?php
    @include "admin_header.php";
    session_start();
    function regulation($val){
        if($val=='Select your Regulation'){
            echo 'Please select your regulation';
        }
        else if($val=='Regulation-2018'){
            global $reg;
            $reg='r2018';
        }
        $_SESSION['reg']=$reg;
    }
    function department($val){
        if($val=='Select your Department'){
            echo 'Please select your Department';
        }
        else if($val=='B.E - Computer Science and Engineering'){
            global $dep;
            $dep='cse';
        }
        $_SESSION['dep']=$dep;
    }
    if(isset($_POST["Add_sub"])){
        regulation($_POST['reg']);
        department($_POST['dep']);
        $name=$_POST['dep'];
        $_SESSION['name']=$name;
        $type=$_GET['type'];
        $conn=mysqli_connect("localhost","root","","$reg");
        $sql="SELECT * FROM `$dep` WHERE dep='$type'";
    }
    else{
        $dep=$_SESSION['dep'];
        $reg=$_SESSION['reg'];
        $name=$_SESSION['name'];
        $conn=mysqli_connect("localhost","root","","$reg");
        $type=$_GET['type'];
        $sql="SELECT * FROM `$dep` WHERE dep='$type'";
        if($type=="PC"||$type=="PE"||$type=="OE"){
            $sql="SELECT * FROM `$dep` WHERE category='$type' AND dep='$dep'";
        }
    }
?>
<html>
    <head> 
        <title>Subject</title>
        <link rel="stylesheet" href="subjectu.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=REM:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class='admin'>
            <div class="inside-header">
            <?php
                    echo "<h1>$name</h1>";
            ?>
            <div class="dropdown">
        <button class="dropbtn">Category</button>
        <div class="dropdown-content">
            <a href="subject.php?type=BS">Basic Science</a>
            <a href="subject.php?type=ES">Engineering Sciences</a>
            <a href="subject.php?type=PC">Professional Core</a>
            <a href="subject.php?type=PE">Professional Electives</a>
            <a href="subject.php?type=AC">Audit Courses</a>
            <a href="subject.php?type=MC">Mandatory Courses</a>
            <a href="subject.php?type=OE">Open Electives</a>
            <a href="subject.php?type=EEC">Employability Enhancement Courses</a>
        </div>
        </div>
        </div>
            <hr>

            <div class="container">
                <table class="table">
                <thead>
                    <tr>
                        <th>Scode</th>
                        <th>Course Title</th>
                        <th>Grade</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $scode=$row['scode'];
                            $subject=$row['subject'];
                            $grade=$row['grade'];
                            echo"
                            <tr>
                            <td>$scode</td>
                            <td>$subject</td>
                            <td>$grade</td>
     
                            <td>
                            <a href='update.php?updateid=$scode&type=$type'><button id='up'>Update</button></a>
                            <a href='delete.php?deleteid=$scode&type=$type'><button id='del'>Delete</button></a>
                            </td>
                            </tr>
                            ";
                        }
                    }
                ?>
                </tbody>
                </table>
                <a href="add.php?type=<?php echo $type;?>"><button id="sub-btn">Add Subject</button></a>
            </div>
        </section>
    </body>
</html>