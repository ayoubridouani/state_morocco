<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="/miniProject/image/favicon.ico" type="image/x-icon">
        <title>Edit News</title>
        <style>
            body{
                font-family: arial,tahoma;
                font-weight: bold;
                background-image: url(../image/milieu.jpg);
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
            .textarea{
                margin: 0px;
                height: 206px;
                display: block;
                width: 666px;
                background-color: #a4ab935e;
                border-radius: 1%;
                color: #a53e16;
                border: none;
                padding: 10px;
                resize: none;
                font-size: 25px;
            }
            input[type="submit"]{
                margin-top: 124px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
<?php
 include "../connect.php";
if(isset($_GET['mng'])){
   
    $stmt=$con->prepare("select news_id,titre,resume,contenu,date_publication,image from news where news_id=:x");
    $stmt->bindParam(':x',$_GET["mng"],PDO::PARAM_INT);
    $stmt->execute();
    $rows=$stmt->fetchAll();
    
    foreach($rows as $row){
        echo '<form action="edit.php?update=' . $row["news_id"] . '" method="POST">';
            echo "<div class='edit'>";
    
                echo '<input type="hidden" name="news_id" value="' . $row["news_id"] . '">';
            echo '</div>';
            echo '<div class="ss-edit">';
                echo '<label>Titre :</label>';
                echo '<input type="text" name="titre" value="' . $row["titre"] . '">';
            echo '</div>';
            echo '<div class="ss-edit">';
                echo '<label>Resume : </label>';
                echo '<input type="text" name="resume" value="' . $row["resume"] . '">';
            echo '</div>';
            echo '<div class="ss-edit">';
                echo '<label>Image : </label>';
                echo '<input type="text" required name="image" value="'. $row["image"] . '">';
            echo '</div>';
            echo '<div class="ss-edit">';
                echo '<label>Contenu :</label>';
                echo '<textarea type="text" class="textarea" name="contenu" value="">' . $row["contenu"] . '</textarea>';
            echo '</div>';
        echo '<input type="text" name="date_publication" value="" style="margin-bottom: 100px;visibility: hidden;">';
        echo '<div class="ss-edit">';
            echo '<label style="visibility: hidden;">hiiden :) </label>';
            echo '<input type="submit" value="Edit Le News">';
        echo '</div>';
        echo "</div>";
        echo '</form>';
    }
}
if(isset($_GET["update"])){
    $stmt=$con->prepare("update news set titre=:x,resume=:y,contenu=:z,image=:p where news_id=:t");
    $stmt->bindParam(':x',$_POST["titre"],PDO::PARAM_STR);
    $stmt->bindParam(':y',$_POST["resume"],PDO::PARAM_STR);
    $stmt->bindParam(':z',$_POST["contenu"],PDO::PARAM_STR);
    $stmt->bindParam(':p',$_POST["image"],PDO::PARAM_STR);
    $stmt->bindParam(':t',$_GET["update"],PDO::PARAM_INT);
    $stmt->execute();
    header("location:editgood.php");
}
?>
    </body>
</html>
