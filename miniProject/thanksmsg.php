<html>
    <head>
        <style>
            .thanks {
                width: 600px;
                margin: 0 auto;
                text-align: center;
            }
            
            .title {
                font: normal normal 30px 'Arial';
                text-transform: uppercase;
                margin-bottom: 20px;
                text-align: center;
                color: #b40101;
            }
        </style>  
    </head>
    <body>
        <div class="thanks">
            <p class="title">Thank You! <?php echo $_POST["name"];?></p>
            <p><strong>Votre Message a ete envoye avec successful</strong></p>
            <p><strong>Nous vous contacterons dans un délai d'un jour ouvrable.</strong></p>
        </div>
    </body>
</html>
<?php
	include_once "connect.php";
	$stmt=$con->prepare("insert into msg (nom,email,contenu) value(:x,:y,:z)");
    $stmt->bindParam(':x',$_POST["name"],PDO::PARAM_STR);
    $stmt->bindParam(':y',$_POST["email"],PDO::PARAM_STR);
    $stmt->bindParam(':z',$_POST["contenu"],PDO::PARAM_STR);
    $stmt->execute();
    header("refresh:5;url=index.php");
?>