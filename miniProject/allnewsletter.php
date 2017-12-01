<?php
$right="";
include_once "connect.php";
include_once "includes/header.php";
include_once "includes/left.php";
?>
<div class="milieu" style="margin-top:40px">
<?php
if(isset($ville)) include_once "../connect.php";
else include_once "connect.php";
if(isset($_GET["search"])) {
    $x=$_GET["search"];
    $stmt=$con->prepare("select * from news where titre like '%$x%' or resume like '%$x%' or contenu like '%$x%' order by news_id desc");
    }
else $stmt=$con->prepare("select * from news order by news_id desc");
$stmt->execute();
$rows=$stmt->fetchAll();
echo '<div id="rightnews" class="rightnews">';
$i=0;
!isset($_GET["show"]) ? $show=10 : $show=$_GET["show"];
    foreach($rows as $row){
        ++$i;
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
        if($i==$show) break;
    }
    if($show==3) $show=0;
    $showw=$show+10;
    if($show<10){
        if(isset($_GET["search"])) echo '<a href="?show=' . $showw . '&search=' . $_GET["search"] . '"><button class="bota">  >> Toutes les news </button></a>';
        else echo '<a href="?show=' . $showw . '"><button class="bota">  >> Toutes les news </button></a>';
    }
    else{
        if(isset($_GET["search"])) echo '<a href="?show=' . $showw . '&search=' . $_GET["search"] . '"><button class="bota" style="text-align:center">  ... </button></a>';
        else echo '<a href="?show=' . $showw . '"><button class="bota" style="text-align:center">  ... </button></a>';
    }
    echo '<div style="width: 100%;text-align: center;"><a href="/miniProject/inscrire.php" class="inscrie">S’inscrire à la newsletter</a></div><br>';
    echo '<div style="width: 100%;text-align: center;"><a href="/miniProject/admin" class="inscrie">Se connecter</div></a>';
    echo '</div>';
?>
</div>
<?php
include_once "includes/right.php";
include_once "includes/footer.php";