<?php
$index="";
include_once "connect.php";
$title="Maroc";
include_once "includes/header.php";
include_once "includes/left.php";
$stmt=$con->prepare("select * from ville_coeur");
$stmt->execute();
$rows=$stmt->fetchAll();
echo '<div id="milieu" class="milieu">';
?>
<div class="w3-content w3-section" style="width: 100%;margin-top: 25px !important;">
  <img class="mySlides w3-animate-fading" onclick="location.href='/miniProject/ville_coeur/fes.php';" src="image/fes.jpg" style="width:100%;cursor: pointer">
  <img class="mySlides w3-animate-fading" onclick="location.href='/miniProject/ville_coeur/casablanca.php';" src="image/casablanca.jpg" style="width:100%;cursor: pointer">
  <img class="mySlides w3-animate-fading" onclick="location.href='/miniProject/ville_coeur/meknes.php';" src="image/meknes.jpg" style="width:100%;cursor: pointer">
  <img class="mySlides w3-animate-fading" onclick="location.href='/miniProject/ville_coeur/sale.php';" src="image/sale.jpg" style="width:100%;cursor: pointer">
  <img class="mySlides w3-animate-fading" onclick="location.href='/miniProject/ville_coeur/marrakech.php';" src="image/marrakech.jpg" style="width:100%;cursor: pointer">
  <img class="mySlides w3-animate-fading" onclick="location.href='/miniProject/ville_coeur/rabat.php';" src="image/rabat.jpg" style="width:100%;cursor: pointer">
</div>
<?php
    foreach($rows as $row){
        echo '<div class="cback">';
        echo '<div class="ssmilieu">';
            echo "<div class='imgcoeur'>";
                echo '<img class="imgville" src="image/'.$row["nameofImage"].'">';
            echo "</div>";
            echo "<div class='postcoeur'>";
                echo '<p class="titleville">'.$row["title_ville"].'</p>';
                echo '<p class="textville">'.$row["text"].'</p>';
            echo "</div>";
        echo '</div>';
        echo '<button class="baota"><a href="ville_coeur/' . strtolower($row["title_ville"]) . '.php">Read More</a></button>';
        echo '</div>';
    }
    echo '</div>';
include_once "includes/right.php";
include_once "includes/footer.php";

?>