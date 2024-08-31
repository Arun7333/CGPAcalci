<?php
    @include "header.html";
    ?>
<html>
    <head>
        <title>Loginpage</title>
        <link rel="stylesheet" href="log.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=REM:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>

    <body class="body">

        <div class="input">
            <form id="form" method="post">
                <h2>Login to Continue</h2>
                <div class="input-box" id="top">
                    <input id="user" placeholder="Username" name="username" required>
                    <icon class="material-symbols-outlined">
                        person
                    </icon>
                </div>
                <div class="input-box">
                    <input id="pass" type="password" placeholder="Password" name="password" required>
                    <icon class="material-symbols-outlined">
                        lock
                    </icon>
                </div>
                <button id="submit" type="submit" name="btn">Submit</button>
            </form>
            <br> 
        </div>
    </body>
</html>

<?php
    $conn = mysqli_connect("localhost","root","");
    if(isset($_POST['btn'])){
        $username= $_POST['username'];
        $password= $_POST['password'];
        $sql= "SELECT * FROM websitelogin.logindetails WHERE username='$username'";
        $result = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $resultpass=$row['password'];
            if($password==$resultpass){
                echo "<script>
                    document.getElementById('admin').href='admin.php';
                </script>";
                header("Location:admin.php");
                echo"Login Successful";
            }else{
                echo"Login Unsuccessful";
            }
        }
    }
    
?>