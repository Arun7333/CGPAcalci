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
            $dep='cse';
        }
    }
    if(isset($_POST['submit'])){
        regulation($_POST['reg']);
        department($_POST['dep']);
        $conn=mysqli_connect("localhost","root","","$reg");                
    }

?>
<!DOCTYPE html>
<head>
    <title>CSE</title>
        <style>
            *{
    margin: 0;
    padding: 0;
    background-repeat: no-repeat;
    background-size: cover;
}
body{
    margin: auto;
}
.head{
    height: 80px;
    width: 100%;
    background-color: rgb(55, 46, 102);
}
.head{
    height: 80px;
    width: 100%;
    background-color: rgb(55, 46, 102);
}
#logo{
    height: 70px;
    width: 70px;
    padding: 2px;
    margin-left: 5px;
    float: left;
}
#idea{
    height: 50px;
    width: 50px;
    padding: 5px;
    padding-top: 10px;
    margin-left: 5px;
    float: right;
 
}
#nba{
    height: 50px;
    width: 50px;
    padding: 5px;
    padding-top: 10px;
    margin-left: 5px;
    float: right;
}
#naac{
    height: 50px;
    width: 50px;
    padding: 5px;
    padding-top: 10px;
    float: right;
}
#iic{
    height: 50px;
    width: 50px;
    padding: 5px;
    padding-top: 10px;
    float: right;
}

.heading{
    color: white;
    width: 560px;
    height: 60px;
    padding: 10px;
    margin-left: px;
    border-left: 0px solid black;
    float: left;
}
.heading h1{
    color: white;
    font-size: 30px;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
}
.body{
    margin: 2%;
    margin-bottom: 0%;
}
.body h1{
    color: black;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-weight: normal;
    font-size: 25px;
    padding-bottom: 2px;
    border-bottom: 2px solid rgb(55, 46, 102);
}
#sem{
    width: 100%;
    height: auto;
    margin-bottom: 0%;
    border-bottom: 2px solid rgb(203, 195, 195);
}
#sem h2{
    padding-top: 0.5%;
    padding-bottom: 0.5%;
    font-size: 20px;
    color: black;
    text-align: center;
    background-color: #CBCBD4;
    font-family: 'Titillium Web', sans-serif;
}
#sem button{
    background-color:rgb(55, 46, 102);
    border-radius: 5px;
    font-size: 18px;
    color: white;
    padding: 8px;
    margin-left: 20%;
    cursor: pointer;
}
#sem button:hover{
    background-color: rgb(253, 253, 255);
    color: rgb(55, 46, 102);
    border-color: white;
    box-shadow: 0 0 3px rgba(0,0,0,15);
}
table{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    margin-left: 20%;
    margin-right: 20%;
    margin-top: 3%;
    margin-bottom: 2%;
    width: 60%;
    border-radius: 5px 5px 2px 2px;
    box-shadow:0 0 5px rgba(0,0,0,15);
 }
 td {
    padding: 10px;
    font-size: 17px;
    text-align: center;
 }
 tbody tr:hover {background-color: #ddd;}  
 th{
    font-size: 17px;
    padding-top: 15px;
    padding-bottom: 15px;
    text-align: center;
    background-color: rgb(55, 46, 102);
    color: #d4af37;
 }
 tr{
    border-bottom: 1px solid lightgray;
 }
 #table select{
    padding: 5px;
    border-radius: 5px;
 }
 #scode{
    border-top-left-radius: 5px;
 }
 #grd{
    border-top-right-radius: 5px;
 }
 .sub{
    text-align: left;
 }

.body p{
    display: inline-block;
    margin-left: 45%;
    font-size: 18px;
}
.body output{
    padding: 8px;
    font-size: 18px;
}
#cgpa{
    background-color: rgb(55, 46, 102);
    height: 60px;
}
#cgpa label{
    color: white;
    margin-left: 45%;
    font-size: 20px;
    margin-top: 15px;
}
#out{
    color: white;
    font-size: 20px;
    margin-left: 0px;
    border-radius: 5px;
}
@media(width<=800px){
    #sem{
        width: 100%;
        float: none;
        height: auto;
    }
    .semodd,.semeven{
        border: none;
    }
    .head h1{
        font-size: 25px;
    }
    .body h1{
        font-size: 25px;
    }
    #sem button{
        margin-left: 10%;
    }
    .body p{
        margin-left: 47%;
    }
}

        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="head">
            <img src="logo.jpg" id="logo">
            <div class="heading"><h1>K.S.Rangasamy College of Technology</h1>
            <p>(Autonomous) | Tiruchengode</p>
            </div>
            <img src="idea.png" id="idea">
            <img src="nba.png" id="nba">
            <img src="naac.png" id="naac">
            <img src="iic.png" id="iic">
    </div>
    <div class="body">
        <h1>Computer Science and Engineering</h1>
        <div class="semodd" id="sem">
            <h2>Semester 1</h2>
            <table id="table">
                <thead>
                    <tr>
                    <th id="scode">Scode</th>
                    <th id="sub">Subject</th>
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
                        $subject=$row['subject'];
                        $grade=$row['grade'];
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
                        $subject=$row['subject'];
                        $grade=$row['grade'];
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
                        $subject=$row['subject'];
                        $grade=$row['grade'];
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
                        $subject=$row['subject'];
                        $grade=$row['grade'];
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
    </script>
</body>
</html>