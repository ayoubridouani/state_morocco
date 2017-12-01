<!DOCTYPE html>
<html>
    <head>     
        <link rel="shortcut icon" href="/miniProject/image/favicon.ico" type="image/x-icon">
        
        <?php if(isset($admin)) echo '<link rel="stylesheet" href="../css/style.css">'; ?>
        <?php if(isset($p)) echo '<link rel="stylesheet" href="../css/style.css">'; ?>
        <?php if(isset($ville)) echo '<link rel="stylesheet" href="../css/style.css">'; ?>
        <?php if(isset($index)) echo '<link rel="stylesheet" href="css/slider.css">'; ?>
        <?php if(isset($index)) echo '<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">'; ?>
        <?php if(!isset($ville) && !isset($p) && !isset($admin)) echo '<link rel="stylesheet" href="css/style.css">'; ?>
        <title><?php if(isset($title)) echo $title; else echo "Maroc"; ?></title>
        
    </head>
    <body onresize="lucy();">
        <div id="header">
            <a href="/miniProject/index.php"><h1 class="drapeau">Maroc</h1></a>
            <div class="sous-header">
                <ul class="s-header">
                    <li class="ss-header"><a href="/miniProject/index.php">Accueil</a></li>
                    <li class="ss-header"><a href="/miniProject/plan.php">Plan de site</a></li>
                    <li class="ss-header"><a href="/miniProject/nous.php">Qui somme-nous ?</a></li>
                    <li class="ss-header"><a href="/miniProject/contact.php">Contact</a></li>
                </ul>
            </div>
                <?php if(isset($index)) echo '<i class="fa fa-angle-double-down fa-5x" id="fa" style="position: absolute;cursor: pointer;left: 48%;" aria-hidden="true" ></i>';  ?>
        </div>








        
        
