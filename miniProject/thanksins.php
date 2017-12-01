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
            <p class="title">Thank You!</p>
            <p><strong>Nous avons bien reçu votre demande d’inscription à notre newsletter et nous vous en remercions.</strong></p>
            <p><strong>Merci et à bientôt !</strong></p>
        </div>
    </body>
</html>
<?php
    header("refresh:5;url=index.php");
?>