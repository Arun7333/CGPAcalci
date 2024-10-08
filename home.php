<?php
    include 'header.html';
?>
<html>
    <head>
        <title>HomePage</title>
        <link rel="stylesheet" href="homee.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=REM:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
    </head>

    <body class="body">
        <div class="input">
            <h2>CGPA</h2>
            <h3>Calculator</h3>
            <form id="form" method="post" action="student.php">
                <select id="reg" name="reg">
                    <option>Select your Regulation</option>
                    <option>Regulation-2018</option>
               </select>
               <select id="dep" name="dep">
                <option>Select your Department</option>
                <option>B.E - Mechanical Engineering</option>
                <option>B.E - Electrical and Electronics Engineering</option>
                <option>B.E - Electronics and Communication Engineering</option>
                <option>B.E - Computer Science and Engineering</option>
                <option>B.E - Mechatronics Engineering</option>
                <option>B.E - Civil Engineering</option>
                <option>B.Tech - Information Technology</option>
                <option>B.Tech - Textile Technology</option>
                <option>B.Tech - Bio Technology</option>
                <option>B.Tech - Food Technology</option>
                <option>B.Tech - Artificial Intelligence and Data Science</option>
                <option>B.Tech - Computer Science and Business Systems</option>
           </select>
           <select id="semester" name="sem">
            <option>Select your Semester</option>
            <option>Semester 1</option>
            <option>Semester 2</option>
            <option>Semester 3</option>
            <option>Semester 4</option>
            <option>Semester 5</option>
            <option>Semester 6</option>
            <option>Semester 7</option>
            <option>Semester 8</option>
       </select>
       <button id="submit" type="submit"  name="submit">Submit</button>
        </form>
            <br> 
        </div>
        <script src="home.js"></script>
    </body>
</html>