
        <div id="footer">
            <ul class="foot">
                <li class="li1">Suggestions</li>
                <li class="li2">Condition d’utilisation</li>
            </ul>
            <div class="copyright">Copyright 2017 - 2018</div>
        </div>
        <?php if(isset($ville)) echo '<script src="../js/plugin.js"></script>'; else echo '<script src="js/plugin.js"></script>'; ?>
        <?php if(isset($admin)) echo '<script src="../js/plugin.js"></script>'; ?>
        <?php if(isset($index)) echo '<script src="js/slider.js"></script>'; ?>
        <script>
           <?php if(isset($index)) echo ' document.getElementById("header").style.height=window.innerHeight + "px";'; ?>
           <?php if(isset($index)) echo ' document.getElementById("fa").style.top=window.innerHeight -100 + "px" ;'; ?>
        </script>
       <?php
        if(isset($index)){
            echo' <script>';
                echo'function scrollTo(element) {';
                echo'   window.scroll({';
                echo'     behavior: "smooth",';
                echo'      left: 0,';
                echo'     top: element.offsetTop';
                echo'   });';
                echo' }';
                echo' document.getElementById("fa").addEventListener("click", () => {';
                echo'   scrollTo(document.getElementById("milieu-principal"));';
                echo' });';
            echo' </script>';
            }
        ?>
    </body>
</html>