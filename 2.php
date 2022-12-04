<?php
if(isset($_GET['id'])) {
} else {
header('Location:'.$_SERVER['PHP_SELF'].'?'.'id=TThreat');
die;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>

<form name="myForm">
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
        <div class="screen-body">
            <div class="screen-body-item left">
                <div class="app-title">
                <span>CONTACT</span>
                <span>US</span>
                </div>
            </div>
        <div class="screen-body-item">
            <div class="app-form">
                <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" name="fname">
                </div>
                <div class="app-form-group buttons">
              <button class="app-form-button">SEND</button>
                </div>
            </div>
        </div>
      </div>
      
    </div>
    </br>
    </br>
    <button style="align:right;" class="btnhome"><a href="/xss-labs">Home</a></button> 
    <button style="align:right;" class="btnext"><a href="2.php">Next Task</a></button>
    </div>
    </div>

    </form>
    <?php
echo "<br>Value : ";
if(isset($_GET['id'])) {
$status =  $_GET['id'];
echo $status;
}
?> 
<!-- <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span> -->

            

</body>
</html>
