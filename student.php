<?php
    $dep;
    $reg;
    function regulation($val){
        if($val=='Select your Regulation'){
            echo 'Please select your regulation';
        }
        else if($val=='Regulation-2018'){
            global $reg;
            $reg='r2018';
        }
    }
    function department($val){
        if($val=='Select your Department'){
            echo 'Please select your Department';
        }
        else if($val=='B.E - Computer Science and Engineering'){
            global $dep;
            $dep='21-25cse';
        }
    }
    if(isset($_POST['submit'])){
        regulation($_POST['reg']);
        department($_POST['dep']);
        $name=$_POST['dep'];
        $conn=mysqli_connect("localhost","root","","$reg");                
    }

?>
<?php    include 'header.html';?>
<!DOCTYPE html>
<head>
    <title>CSE</title>
        <link rel="stylesheet" href="student.css"></link>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div id="body">
        <h1><?php echo $name;?></h1>
        <div class="semodd" id="sem">
            <h2>Semester 1</h2>
            <table id="table">
                <thead>
                    <tr>
                    <th id="scode">Course code</th>
                    <th id="sub">Course Name</th>
                    <th id="grd">Grade</th>
                    </tr>
                </thead>
                <tbody>
            <?php
                $sql="SELECT * FROM `$dep` WHERE sem='sem1'";
                $result=mysqli_query($conn,$sql);
                $i=0;
                $sem1grade[]=[];
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $scode=$row['scode'];
                            $sql2="SELECT * FROM `cse` WHERE scode='$scode';";
                            $result2=mysqli_query($conn,$sql2);
                            $subjectrow=mysqli_fetch_assoc($result2);
                        $subject=$subjectrow['subject'];
                        $grade=$subjectrow['grade'];
                        $sem1grade[$i]=$grade;
                        echo"
                            <tr>
                                <td>$scode</td> 
                                <td class='sub'>$subject</td>
                                <td id='grade'>
                                    <select class='0'>
                                    <option>O</option>
                                    <option>A+</option>
                                    <option>A</option>
                                    <option>B+</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>U</option>
                                    </select>
                                </td>
                            </tr>
                        ";
                        $i++;
                    }
                    $jsonArray1=json_encode($sem1grade);
                }
                if(isset($_GET['sem1'])){
                    
                    echo $sem1grade;
                }
            ?>
                </tbody>
            
            </table>
            <button name="sem1" onclick="sgpasem1()" >Submit</button>
            <p>SGPA :</p>
            <output id="sem1result"></output>
            <br><br>
        </div>
        <div class="semodd" id="sem">
            <h2>Semester 2</h2>
            <table id="table">
            <tr>
                <thead>
                    <th id="scode">Scode</th>
                    <th id="sub">Subject</th>
                    <th id="grd">Grade</th>
                </thead>
            </tr>
            <?php
                $sql="SELECT * FROM `$dep` WHERE sem='sem2'";
                $result=mysqli_query($conn,$sql);
                $i=0;
                $sem2grade[]=[];
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $scode=$row['scode'];
                            $sql2="SELECT * FROM `cse` WHERE scode='$scode';";
                            $result2=mysqli_query($conn,$sql2);
                            $subjectrow=mysqli_fetch_assoc($result2);
                        $subject=$subjectrow['subject'];
                        $grade=$subjectrow['grade'];
                        $sem2grade[$i]=$grade;
                        echo"
                            <tr>
                                <td>$scode</td> 
                                <td class='sub'>$subject</td>
                                <td>
                                    <select class='1'>
                                    <option>O</option>
                                    <option>A+</option>
                                    <option>A</option>
                                    <option>B+</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>U</option>
                                    </select>
                                </td>
                            </tr>
                        ";
                        $i++;
                    }
                    $jsonArray2=json_encode($sem2grade);
                }
            ?>
            
            </table>
            <button onclick="sgpasem2()" >Submit</button>
            <p>SGPA :</p>
            <output id="sem2result"></output>
            <br><br>
        </div>
        <div class="semodd" id="sem">
            <h2>Semester 3</h2>
            <table id="table">
            <tr>
                <thead>
                    <th id="scode">Scode</th>
                    <th id="sub">Subject</th>
                    <th id="grd">Grade</th>
                </thead>
            </tr>
            <?php
                $sql="SELECT * FROM `$dep` WHERE sem='sem3'";
                $result=mysqli_query($conn,$sql);
                $i=0;
                $sem3grade[]=[];
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $scode=$row['scode'];
                            $sql2="SELECT * FROM `cse` WHERE scode='$scode';";
                            $result2=mysqli_query($conn,$sql2);
                            $subjectrow=mysqli_fetch_assoc($result2);
                        $subject=$subjectrow['subject'];
                        $grade=$subjectrow['grade'];
                        $sem3grade[$i]=$grade;
                        echo"
                            <tr>
                                <td>$scode</td> 
                                <td class='sub'>$subject</td>
                                <td>
                                    <select class='2'>
                                    <option>O</option>
                                    <option>A+</option>
                                    <option>A</option>
                                    <option>B+</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>U</option>
                                    </select>
                                </td>
                            </tr>
                        ";
                        $i++;
                    }
                    $jsonArray3=json_encode($sem3grade);
                }
            ?>
            
            </table>
            <button onclick="sgpasem3()" >Submit</button>
            <p>SGPA :</p>
            <output id="sem3result"></output>
            <br><br>
        </div>
        <div class="semodd" id="sem">
            <h2>Semester 4</h2>
            <table id="table">
            <tr>
                <thead>
                    <th id="scode">Scode</th>
                    <th id="sub">Subject</th>
                    <th id="grd">Grade</th>
                </thead>
            </tr>
            <?php
                $sql="SELECT * FROM `$dep` WHERE sem='sem4'";
                $result=mysqli_query($conn,$sql);
                $i=0;
                $sem4grade[]=[];
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $scode=$row['scode'];
                            $sql2="SELECT * FROM `cse` WHERE scode='$scode';";
                            $result2=mysqli_query($conn,$sql2);
                            $subjectrow=mysqli_fetch_assoc($result2);
                        $subject=$subjectrow['subject'];
                        $grade=$subjectrow['grade'];
                        $sem4grade[$i]=$grade;
                        echo"
                            <tr>
                                <td>$scode</td> 
                                <td class='sub'>$subject</td>
                                <td>
                                    <select class='3'>
                                    <option>O</option>
                                    <option>A+</option>
                                    <option>A</option>
                                    <option>B+</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>U</option>
                                    </select>
                                </td>
                            </tr>
                        ";
                        $i++;
                    }
                    $jsonArray4=json_encode($sem4grade);
                }
            ?>
            
            </table>
            <button onclick="sgpasem4()" >Submit</button>
            <p>SGPA :</p>
            <output id="sem4result"></output>
            <br><br>
        </div>
        <div class="semodd" id="sem">
            <h2>Semester 5</h2>
            <table id="table">
            <tr>
                <thead>
                    <th id="scode">Scode</th>
                    <th id="sub">Subject</th>
                    <th id="grd">Grade</th>
                </thead>
            </tr>
            <?php
                $sql="SELECT * FROM `$dep` WHERE sem='sem5'";
                $result=mysqli_query($conn,$sql);
                $i=0;
                $sem5grade[]=[];
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $scode=$row['scode'];
                            $sql2="SELECT * FROM `cse` WHERE scode='$scode';";
                            $result2=mysqli_query($conn,$sql2);
                            $subjectrow=mysqli_fetch_assoc($result2);
                        $subject=$subjectrow['subject'];
                        $grade=$subjectrow['grade'];
                        $sem5grade[$i]=$grade;
                        echo"
                            <tr>
                                <td>$scode</td> 
                                <td class='sub'>$subject</td>
                                <td>
                                    <select class='5'>
                                    <option>O</option>
                                    <option>A+</option>
                                    <option>A</option>
                                    <option>B+</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>U</option>
                                    </select>
                                </td>
                            </tr>
                        ";
                        $i++;
                    }
                    $jsonArray5=json_encode($sem5grade);
                }
            ?>
            
            </table>
            <button onclick="sgpasem5()" >Submit</button>
            <p>SGPA :</p>
            <output id="sem5result"></output>
            <br><br>
        </div>
        <div class="semeven" id="sem">
            <h2>Semester 6</h2>
            <table id="table">
            <tr>
                <thead>
                    <th id="scode">Scode</th>
                    <th id="sub">Subject</th>
                    <th id="grd">Grade</th>
                </thead>
            </tr>
            <?php
                $sql="SELECT * FROM `$dep` WHERE sem='sem6'";
                $result=mysqli_query($conn,$sql);
                $i=0;
                $sem6grade[]=[];
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $scode=$row['scode'];
                            $sql2="SELECT * FROM `cse` WHERE scode='$scode';";
                            $result2=mysqli_query($conn,$sql2);
                            $subjectrow=mysqli_fetch_assoc($result2);
                        $subject=$subjectrow['subject'];
                        $grade=$subjectrow['grade'];
                        $sem6grade[$i]=$grade;
                        echo"
                            <tr>
                                <td>$scode</td> 
                                <td class='sub'>$subject</td>
                                <td>
                                    <select class='5'>
                                    <option>O</option>
                                    <option>A+</option>
                                    <option>A</option>
                                    <option>B+</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>U</option>
                                    </select>
                                </td>
                            </tr>
                        ";
                        $i++;
                    }
                    $jsonArray6=json_encode($sem6grade);
                }
            ?>
            
            </table>
            <button onclick="sgpasem6()" >Submit</button>
            <p>SGPA :</p>
            <output id="sem6result"></output>
            <br><br>
        </div>
        <div class="semodd" id="sem">
            <h2>Semester 7</h2>
            <table id="table">
            <tr>
                <thead>
                    <th id="scode">Scode</th>
                    <th id="sub">Subject</th>
                    <th id="grd">Grade</th>
                </thead>
            </tr>
            <?php
                $sql="SELECT * FROM `$dep` WHERE sem='sem7'";
                $result=mysqli_query($conn,$sql);
                $i=0;
                $sem7grade[]=[];
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $scode=$row['scode'];
                            $sql2="SELECT * FROM `cse` WHERE scode='$scode';";
                            $result2=mysqli_query($conn,$sql2);
                            $subjectrow=mysqli_fetch_assoc($result2);
                        $subject=$subjectrow['subject'];
                        $grade=$subjectrow['grade'];
                        $sem7grade[$i]=$grade;
                        echo"
                            <tr>
                                <td>$scode</td> 
                                <td class='sub'>$subject</td>
                                <td>
                                    <select class='6'>
                                    <option>O</option>
                                    <option>A+</option>
                                    <option>A</option>
                                    <option>B+</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>U</option>
                                    </select>
                                </td>
                            </tr>
                        ";
                        $i++;
                    }
                    $jsonArray7=json_encode($sem7grade);
                }
            ?>
            
            </table>
            <button onclick="sgpasem7()" >Submit</button>
            <p>SGPA :</p>
            <output id="sem7result"></output>
            <br><br>
        </div>
        <div class="semeven" id="sem">
            <h2>Semester 8</h2>
            <table id="table">
            <tr>
                <thead>
                    <th id="scode">Scode</th>
                    <th id="sub">Subject</th>
                    <th id="grd">Grade</th>
                </thead>
            </tr>
            <?php
                $sql="SELECT * FROM `$dep` WHERE sem='sem8'";
                $result=mysqli_query($conn,$sql);
                $i=0;
                $sem8grade[]=[];
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $scode=$row['scode'];
                            $sql2="SELECT * FROM `cse` WHERE scode='$scode';";
                            $result2=mysqli_query($conn,$sql2);
                            $subjectrow=mysqli_fetch_assoc($result2);
                        $subject=$subjectrow['subject'];
                        $grade=$subjectrow['grade'];
                        $sem8grade[$i]=$grade;
                        echo"
                            <tr>
                                <td>$scode</td> 
                                <td class='sub'>$subject</td>
                                <td>
                                    <select class='7'>
                                    <option>O</option>
                                    <option>A+</option>
                                    <option>A</option>
                                    <option>B+</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>U</option>
                                    </select>
                                </td>
                            </tr>
                        ";
                        $i++;
                    }
                    $jsonArray8=json_encode($sem8grade);
                }
            ?>
            
            </table>
            <button onclick="sgpasem8()" >Submit</button>
            <p>SGPA :</p>
            <output id="sem8result"></output>
            <br><br>
        </div>
    </div>
    <div id="cgpa">
        <br>
        <label>CGPA :</label>
        <output id="out"></output>
    </div>
    <script>
        let sgpa=[];
        function calc(i,grade,credits){
            let sum=0;
            let csum=0;
            let cgpa=0;
            for(let j=0;j<grade.length;j++){
                sum=sum+(grade[j]*Number(credits[j]));
                csum=csum+Number(credits[j]);
            }
            sgpa[i]=Number((sum/csum).toFixed(2));
            for(let j=0;j<=i;j++){
                cgpa=Number(cgpa)+sgpa[j];
            }
            cgpa=cgpa/(i+1);
            document.getElementById("out").innerHTML=cgpa.toFixed(2);
            
            return sgpa[i];
        }
        function findvalue(g){
            if(g=="O"){
                return 10;
            }
            else if(g=="A+"){
                return 9;
            }
            else if(g=="A"){
                return 8;
            }
            else if(g=="B+"){
                return 7;
            }
            else if(g=="B"){
                return 6;
            }
            else if(g=="C"){
                return 5;
            }
            else{
                return 0;
            }
        }
        function sgpasem1(){
            let id=[];
            let grade=[]; 
            id=document.getElementsByClassName('0');
            for(let i=0;i<id.length;i++){
                grade[i]=findvalue(id[i].value);
            }
            let sem1credits=JSON.parse(('<?php  echo $jsonArray1;?>'));
            document.getElementById('sem1result').innerHTML=calc(0,grade,sem1credits);
        }
        function sgpasem2(){
            let id=[];
            let grade=[]; 
            id=document.getElementsByClassName('1');
            for(let i=0;i<id.length;i++){
                grade[i]=findvalue(id[i].value);
            }
            let sem2credits=JSON.parse(('<?php  echo $jsonArray2;?>'));
            document.getElementById('sem2result').innerHTML=calc(1,grade,sem2credits);
        }
        function sgpasem3(){
            let id=[];
            let grade=[]; 
            id=document.getElementsByClassName('2');
            for(let i=0;i<id.length;i++){
                grade[i]=findvalue(id[i].value);
            }
            let sem3credits=JSON.parse(('<?php  echo $jsonArray3;?>'));
            document.getElementById('sem3result').innerHTML=calc(2,grade,sem3credits);
        }
        function sgpasem4(){
            let id=[];
            let grade=[]; 
            id=document.getElementsByClassName('3');
            for(let i=0;i<id.length;i++){
                grade[i]=findvalue(id[i].value);
            }
            let sem4credits=JSON.parse(('<?php  echo $jsonArray4;?>'));
            document.getElementById('sem4result').innerHTML=calc(3,grade,sem4credits);
        }
        function sgpasem5(){
            let id=[];
            let grade=[]; 
            id=document.getElementsByClassName('4');
            for(let i=0;i<id.length;i++){
                grade[i]=findvalue(id[i].value);
            }
            let sem5credits=JSON.parse(('<?php  echo $jsonArray5;?>'));
            document.getElementById('sem5result').innerHTML=calc(4,grade,sem5credits);
        }
        function sgpasem6(){
            let id=[];
            let grade=[]; 
            id=document.getElementsByClassName('5');
            for(let i=0;i<id.length;i++){
                grade[i]=findvalue(id[i].value);
            }
            let sem6credits=JSON.parse(('<?php  echo $jsonArray6;?>'));
            document.getElementById('sem6result').innerHTML=calc(5,grade,sem6credits);
        }
        function sgpasem7(){
            let id=[];
            let grade=[]; 
            id=document.getElementsByClassName('6');
            for(let i=0;i<id.length;i++){
                grade[i]=findvalue(id[i].value);
            }
            let sem7credits=JSON.parse(('<?php  echo $jsonArray7;?>'));
            document.getElementById('sem7result').innerHTML=calc(6,grade,sem7credits);
        }
        function sgpasem8(){
            let id=[];
            let grade=[]; 
            id=document.getElementsByClassName('7');
            for(let i=0;i<id.length;i++){
                grade[i]=findvalue(id[i].value);
            }
            let sem8credits=JSON.parse(('<?php  echo $jsonArray8;?>'));
            document.getElementById('sem8result').innerHTML=calc(7,grade,sem8credits);
        }
    </script>
</body>
</html>