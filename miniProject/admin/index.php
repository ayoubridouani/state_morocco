<html>
    <head>
        <link rel="shortcut icon" href="/miniProject/image/favicon.ico" type="image/x-icon">
        <style>
            body{
                background-image: url(../image/milieu.jpg);
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body style="background-color: #CACACA;"> 
    <?php
        session_start();
        include_once '../connect.php';
        $admin="";
        $title="admin";
        if(isset($_SESSION['user'])){
            header('Location: dashboard.php');
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username=$_POST['user'];
            $password=$_POST['pass'];
            $x=$username;
            $y=$password;
            $stmt = $con->prepare("SELECT id, user, pass FROM admin WHERE user=:x AND pass=:y");
            $stmt->bindParam(':x',$x,PDO::PARAM_STR);
            $stmt->bindParam(':y',$y,PDO::PARAM_STR);
            $stmt->execute();
            $row=$stmt->fetch();
            if($stmt->rowCount()>0){
                $_SESSION['user']=$username;
                $_SESSION['id']=$row['id'];
                header('Location: dashboard.php');
                }
            }
    ?>
    <div class='login'>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <input type='text' name='user' placeholder='Username' maxlength=10>
            <input type='password' name='pass' placeholder='Password'>
            <input type='submit' name='submit' value='Log In'>
        </form>
    </div>
    
    <?php
    //include_once "../includes/footer.php";
    ?>