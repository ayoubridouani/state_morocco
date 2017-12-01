<html>
    <head>
        <meta charset="utf-8">
        <title>Inscrire</title>
        <link rel="shortcut icon" href="/miniProject/image/favicon.ico" type="image/x-icon">
        <style>
            body{
                font-family: arial,tahoma;
                font-weight: bold;
                background-image: url(image/milieu.jpg);
                background-size: cover;
                background-repeat: no-repeat;
            }
            label{
                float: left;
                margin-right: 24px;
                width: 100px;
                margin-top: 11px;
                margin-bottom: 5px;
                color: #0304038c;
            }
            input{
                display: block;
                width: 666px;
                border-radius: 1%;
                color: #a53e16;
                border: none;
                height: 45px;
                padding: 10px;
                background-color: #a4ab935e;
                font-size: 25px;
            }
            .ss-edit{
                width: 50%;
                height: 51px;
                margin: auto;
                margin-bottom: 30px;
            }
            input[type="submit"]{
                margin-top: 124px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
<?php
include "connect.php";
echo '<form action="inscrire.php?update=1" method="POST">';
    echo "<div class='edit'>";
    
    echo '<div class="ss-edit">';
        echo '<label>Nom : </label>';
        echo '<input type="text" name="nom" value="" required>';
    echo '</div>';
    echo '<div class="ss-edit">';
        echo '<label>Prenom : </label>';
        echo '<input type="text" name="prenom" value="" required>';
    echo '</div>';
    echo '<div class="ss-edit">';
        echo '<label>Email : </label>';
        echo '<input type="email" name="email" value="" required>';
    echo '</div>';
    echo '<div class="ss-edit">';
        echo '<label style="visibility:hidden">hidden :) </label>';
        echo '<input type="submit" value="Inscription">';
    echo '</div>';
echo "</div>";
echo '</form>';
if(isset($_GET["update"])){
    $stmt=$con->prepare("insert into internaute value(:x,:y,:z)");
    $stmt->bindParam(':x',$_POST["nom"],PDO::PARAM_STR);
    $stmt->bindParam(':y',$_POST["prenom"],PDO::PARAM_STR);
    $stmt->bindParam(':z',$_POST["email"],PDO::PARAM_STR);
    $stmt->execute();
    header("refresh:2,url=thanksins.php");
}
?>
    </body>
</html>