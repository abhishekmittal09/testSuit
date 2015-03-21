<?php

include('./pages.php');

$page="intro";//possible values "addsuit", "checkinstall", "testsuits"
extract($_GET);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Dlux Test</title>

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">







  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
  


    

    

</head>
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="<?php echo $pages["intro"]; ?>">Test Suit</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="<?php echo $pages["checkinstall"]; ?>" class="pure-menu-link">Check<br>Installation</a></li>
                <li class="pure-menu-item"><a href="<?php echo $pages["testsuits"]; ?>" class="pure-menu-link">Existing<br>Test Suits</a></li>
                <li class="pure-menu-item"><a href="<?php echo $pages["addsuit"]; ?>" class="pure-menu-link">Add Test Suit</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <?php
            if($page==="intro"){
                include('./intro.php');
            } else if($page==="addsuit"){
                include('./addsuit.php');
            } else if($page==="checkinstall"){
                include('./checkinstall.php');
            } else if($page==="testsuits"){
                include('./testsuits.php');
            } else{
                include('./intro.php');                
            }
        ?>
    </div>
</div>





<script src="js/ui.js"></script>
<script src="js/jquery.js"></script>
<script src="js/process.php"></script>


</body>
</html>
