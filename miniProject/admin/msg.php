<html>
    <head>
        <link rel="shortcut icon" href="/miniProject/image/favicon.ico" type="image/x-icon">
        <meta charset="utf-8">
        <title>Message</title>
        <style>
            *{
                border-radius:2%;
				color: #8F8FBC;
            }
            body{
                background-color: #16B5CF;
                font-size: 18px;
                font-family: arial,tahoma;
                font-weight: bold;
                background-image: url(../image/milieu.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                opacity: 1;
            }
            h1{
                text-align: center;
                color: #8f0b0b;
            }
            .btn{
                width: 100%;
                margin: 0px 0px;
                background-color: #ced2d66b;
                height: 100px;
                border: 2px solid;
                cursor: pointer;
                color: blue;
                font-size: 46px;
            }
            .dash{
                width: 100%;
                margin-top: 20px;
            }
            .ss-dash{
				height: 261px;
				opacity: 0.9;
				background-color: rgba(245, 245, 238, 0.38);
				margin-bottom: 30px;
				padding: 20px;
				max-height: 500px;
            }
            label{
                padding-top: 18px;
				color: blue;
            }
            .botona1{
                height: 45px;
                position: absolute;
                right: 1%;
                top: 6px;
                background-color: green;      
            }
            .botona2{
                height: 45px;
                position: absolute;
                right: 1%;
                top: 54px;
                background-color: red;
            }
            .o{
                width: 110px;
                border: none;
                cursor: pointer;
                font-size: 19px;
            }
			textarea{
				width: 100%;
				background-color: rgba(140, 83, 105, 0.19);
				border: medium none;
				height: 26%;
				resize: none;
				}
                </style>
    </head>
    <body>
        <?php
            session_start();
                if(isset($_SESSION['user'])){
                    include_once '../connect.php';
                        echo '<h1 class="test-center" style="text-align:right;font-size: 20px;cursor: pointer;"><a href="logout.php">Logout</a></h1>';
                        echo '<h1 class="test-center" style="text-align:center">Message</h1>';
                        $stmt=$con->prepare("select * from msg order by msg_id desc");
                        $stmt->execute();
                        $rows=$stmt->fetchAll();
                        echo '<div class="dash">';
                        foreach($rows as $row){
                            echo '<div class="ss-dash">';
                            echo '<label>Name : </label>';
                            echo '<p class="article">'.$row["nom"].'</p>';
							echo '<label>email : </label>';
                            echo '<p class="article">'.$row["email"].'</p>';
							echo '<label>contenu : </label>';
                            echo '<textarea readonly class="article">'.$row["contenu"].'</textarea>';
                            echo '</div>';
                        }
                        echo "</div>";
                }
                else{
                    header('location:index.php');
                }
            ?>
    </body>
</html>
