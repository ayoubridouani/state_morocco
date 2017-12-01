<?php
include_once "connect.php";
$title="Contact";
include_once "includes/header.php";
include_once "includes/left.php";

?>
<div class="milieu">
    <div class="conatct-container">
      <h2>Contact Me</h2>
      <form action="thanksmsg.php" method="POST">
        <input type="text" name="name" required class="contact-input" placeholder="Votre Nom"/>
        <input type="email" name="email" required class="contact-input" placeholder="Votre Email"/>
        <textarea class="contact-area" required name="contenu" placeholder="Saisir Votre Message ici"></textarea>
        <input type="submit" required class="contact-submit" value="Envoyer"/>
      </form>
    </div>
</div>
<?php
include_once "includes/right.php";
include_once "includes/footer.php";