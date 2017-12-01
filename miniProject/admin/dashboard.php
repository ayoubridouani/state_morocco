<html>
    <head>
        <link rel="shortcut icon" href="/miniProject/image/favicon.ico" type="image/x-icon">
        <meta charset="utf-8">
        <title>Dashboard</title>
        <style>
            *{
                border-radius:2%;
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
                background-color: #39b7cc61;
                width: 96%;
                margin-bottom: 15px;
                padding: 2px 25px;
                position: relative;
                height: 100px;
                opacity: 0.9;
            }
            label{
                float: left;
                padding-top: 18px;
            }
            p:first-of-type{
                margin-left: 60px;
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
                </style>
    </head>
    <body>
        <?php
            session_start();
                if(isset($_SESSION['user'])){
                    include_once '../connect.php';
						echo '<h1 class="test-center" style="text-align:right;font-size: 20px;cursor: pointer;"><a href="msg.php">Message</a></h1>';
                        echo '<h1 class="test-center" style="text-align:right;font-size: 20px;cursor: pointer;"><a href="logout.php">Logout</a></h1>';
						
                        echo '<h1 class="test-center" style="text-align:center">Dashboard</h1>';
                        
                        echo '<a href="insere.php" ><button class="btn">Inserer New Publication</button></a>';
                        $stmt=$con->prepare("select * from news order by news_id desc");
                        $stmt->execute();
                        $rows=$stmt->fetchAll();
                        echo '<div class="dash">';
                        foreach($rows as $row){
                            echo '<div class="ss-dash">';
                            echo '<label>Title : </label>';
                            echo '<p class="article">'.$row["titre"].'</p>';
                            echo '<p><a href="edit.php?mng=' . $row["news_id"] . '"><button class="o botona1">modifier</button></a></p>';
                            echo '<p onclick="cfm('. $row["news_id"] .')" ><button class="o botona2">supprimer</button></p>';
                            echo '</div>';
                        }
                        echo "</div>";
                }
                else{
                    header('location:index.php');
                }
            ?>

        <script>
            function cfm(i){              
                if(confirm("vous etes sur de supprimer cette news ?")){
                    location.href="delete.php?mng="+i;
                }
            } 
        </script>
    </body>
</html>
