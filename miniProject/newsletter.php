<?php
include_once "connect.php";
$title="Casablanca";
include_once "includes/header.php";
include_once "includes/left.php";

?>
<div class="milieu">
    <div class="ville">
        <p class="title"><?php echo $_GET['titre'];?></p>
        <p class="title" style="font-size: 37px;"><?php echo $_GET['resume'];?></p>
        <img src="image-news/<?php echo $_GET['image'];?>">
        <p class="texte"><?php echo $_GET['contenu'];?></p>
    </div>
</div>
<?php
include_once "includes/right.php";
include_once "includes/footer.php";