<html>
    <head>
        <link rel="shortcut icon" href="/miniProject/image/favicon.ico" type="image/x-icon">
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
            <p class="title">cette News_ID :  <?php echo $_GET["mng"];?></p>
            <p><strong>a ete supprimer avec successful</strong></p>
            <p><strong>Attend 5 seconds pour redirecter vers dashboard</strong></p>
        </div>
    </body>
</html>
<?php
include "../connect.php";
$stmt=$con->prepare("delete from news where news_id=:x");
$stmt->bindParam(':x',$_GET["mng"],PDO::PARAM_INT);
$stmt->execute();
header("refresh:5;url=dashboard.php");