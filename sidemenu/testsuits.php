<?php
    include('./pages.php');
?>

        <div class="header">
            <h1>Test From Existing Suits</h1>
            <h2>Test your Dlux installation from the existing Test Suits</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Sample Test Suit</h2>
            <p>This test suit is made using Robot Framework and uses selenium2library for testing. Currently changing the contents of the suit below will have no impact on the output.
                The input below is for reference only. However the data is sent, hard-coded data is processed at the backend, output is produced and finally fetched from the server.
            </p>

            <form id="testsuit" method="POST" action="<?php echo $processTestSuit; ?>">
            <textarea name="theData" style="width: 100%; height: 400px;">
                *** Settings ***
                Library       Selenium Library

                *** Testcases ***
                Login Should Succeed When the Correct Username and Password are Entered
                  Start Selenium Server
                  Open Browser  http://localhost:8181/dlux/index.html#/login
                  Maximize Browser Window
                  Input Text  username admim
                  Input Text  password admin
                  Click Button  Login
                  Page Should Contain  Topology
                  Close Browser
                  Stop Selenium Server                
            </textarea>

            <input type="submit" value="Submit test file"></input>
            </form>
            <h2 class="content-subhead">Test Suit Output</h2>
            <p id="testoutput">
                
            </p>
        </div>

