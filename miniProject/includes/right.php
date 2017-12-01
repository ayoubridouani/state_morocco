<?php
include_once "header.php";
?>
<div id="right">
<video class="video" <?php if(isset($ville)) echo 'src="../video/Fez-Morocco.mp4"'; else echo 'src="video/Fez-Morocco.mp4"'; ?> controls <?php if(isset($ville)) echo 'poster="../image/posterfez.png"'; else echo 'poster="image/posterfez.png"'; ?> >
Sorry, your browser doesn't support embedded videos
</video>
<form action="allnewsletter.php" style='margin-bottom: 14px;margin-top: 7px;'>
<input type="search" name="search" style="background: #a2a25a;border: none;width: 77%;height: 30px">
<input type="search" hidden name="show" value='10'>
<input type="submit" value="search" style="background: #a2a25a;border: none;width: 20%;height: 30px">
</form>
<?php
if(!isset($right)){
    if(isset($ville)) include_once "../connect.php";
    else include_once "connect.php";
    $stmt=$con->prepare("select * from news order by news_id desc limit 3");
    $stmt->execute();
    $rows=$stmt->fetchAll();
    echo '<div id="rightnews" class="rightnews">';
        foreach($rows as $row){
            echo '<form action="/miniProject/newsletter.php">';
            echo '<div class="rightnewss">';
            echo '<p class="date">'.$row["date_publication"].'</p>';
            echo '<input class="article" type="text" name="titre" readonly value="'.$row["titre"].'">';
            echo '<input class="article" type="text" name="resume" hidden value="'.$row["resume"].'">';
            echo '<input class="article" type="text" name="image" hidden value="'.$row["image"].'">';
            echo '<input class="article" type="text" name="contenu" hidden value="'.$row["contenu"].'">';
            echo '</div>';
            echo '<input class="bota" type="submit" style="cursor:pointer;" value="Cliquez ici pour plus de détails">';
            echo "</form>";
        }
        echo '<a href="/miniProject/allnewsletter.php?show=10"><button class="bota">  >> Toutes les news </button></a>';
        echo '<div style="width: 100%;text-align: center;"><a href="/miniProject/inscrire.php" class="inscrie">S’inscrire à la newsletter</a></div><br>';
        echo '<div style="width: 100%;text-align: center;"><a href="/miniProject/admin" class="inscrie">Se connecter</div></a>';
        echo '</div>';
}
?>
</div>
</div>
