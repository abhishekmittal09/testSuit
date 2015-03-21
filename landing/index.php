<?php

$demo_link = "http://localhost/gsoc/dluxtest/sidemenu/index.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a responsive product landing page.">

    <title>Dlux Test</title>

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">



<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  
<!--<![endif]-->



<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">



  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/marketing.css">
    <!--<![endif]-->

</head>
<body>



<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Dlux Test</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="https://wiki.opendaylight.org/view/OpenDaylight_dlux:Main" class="pure-menu-link">What is DLUX</a></li>
            <li class="pure-menu-item"><a href="http://www.opendaylight.org/" class="pure-menu-link">What is OpenDayLight</a></li>
<!--             <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sign Up</a></li>
 -->        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">Test your Suit</h1>
        <p class="splash-subhead">
            Welcome to Dlux Testing. Here you can test Dlux from pre-defined test suits, modify the existing test suits or upload your own test suits.
        </p>
        <p>
            <a href="<?php echo $demo_link; ?>" class="pure-button pure-button-primary">Get Started</a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Features at a Glance</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-lg-1-3">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Test your Instance
                </h3>
                <p>
                    After you have installed Dlux for opendaylight, you can test your instance using this tool. Please click <a href="<?php echo $demo_link; ?>">here</a>
                    to get started.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-lg-1-3">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Write you own Test Suit
                </h3>
                <p>
                    You can also upload your test suit and test your instance.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-lg-1-3">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Analyze through Visualization
                </h3>
                <p>
                    Visualize your results. This feature is intended as part of future advancements to the tool.
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img class="pure-img-responsive" alt="File Icons" width="300" src="img/common/file-icons.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">Check out the <a href="<?php echo $demo_link; ?>" style="color: white">Demo</a> Website</h2>

            <p>
                Do checkout the <a href="<?php echo $demo_link; ?>" style="color: white">demo</a> website. The project is under construction. You'll be able to find a simple demo of the tool and feel free to mess around.
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Project Details</h2>

        <div class="pure-g">
<!--             <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>

                        <label for="name">Your Name</label>
                        <input id="name" type="text" placeholder="Your Name">


                        <label for="email">Your Email</label>
                        <input id="email" type="email" placeholder="Your Email">

                        <label for="password">Your Password</label>
                        <input id="password" type="password" placeholder="Your Password">

                        <button type="submit" class="pure-button">Sign Up</button>
                    </fieldset>
                </form>
            </div>
 -->
            <div class="l-box-lrg pure-u-1 "><!-- pure-u-md-3-5 -->
                <h4>Aim of the Project</h4>
                <p>
                    DLUX is the user interface for the Opendaylight Controller and the interface for YangUI. The aim of the project is to create
                    a DLUX test Automation Tool to verify NETCONF actions originationg from DLUX.
                </p>
                <h4>Technologies</h4>
                <p>
                    The tool would be web based and will use the following technologies :-
                    <ul>
                        <li>Javascript, HTML, HTML5, CSS, Jquery, AJAX, Pure CSS - for UI rendering
                        <li>Test suites will use the Selenium2Library to automate UI actions</li>
                        <li>PHP for hosting and scripting</li>
                        <li>Robot Framework - for writing test suits</li>
                    </ul>
                </p>
                <h4>How would I proceed, in brief</h4>
                <p>
                <ul>
                    <li>Step 1. Understand Robot framework, write some basic test suits and make them available to test newly installed instances</li> 
                    <li>Step 2. Find out how the facility to change the existing test suits can be provided to the user and make it possible</li>
                    <li>Step 3. Find out how the user can "EASILY" write their own test suits using this tool, with robot framework at the backend</li> 
                </ul>
                </p>
                <h4>Future works</h4>
                <p>
                <ul>
                    <li>Provide visualizations to analyze the results.</li> 
                </ul>
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
        Throw me a mail at abhishekmittaliiit@gmail.com and request for more features :)
    </div>

</div>






</body>
</html>
