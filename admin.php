<?php
    @include "admin_header.php";
    ?>
<html>
    <head>
        <title>Admin Select</title>
        <link rel="stylesheet" href="adminmain.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=REM:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>

    <body class="body">

        <div class="input">
            <h2>CGPA</h2>
            <h3>Select the Items</h3>
            <form id="form" method="post" action="admin_main.php">
                <select id="reg" name="reg" required>
                    <option>Select your Regulation</option>
                    <option>Regulation-2018</option>
               </select>
               <select id="dep" name="dep" required>
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
       <button id="submit" onclick="change2()" type="submit" name="submit">Submit</button>
       <button id="Add_Sub" onclick="change()" name="Add_sub">Add Subject</button>
        </form>
            <br> 
        </div>
        <script>
            function change(){
                let obj=document.getElementById("form");
                    obj.action="subject.php?type=BS";
            }
            function change2(){
                let obj=document.getElementById("form");
                    obj.action="admin_main.php";
            }
        </script>
    </body>
</html>