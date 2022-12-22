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
<h1>XSS Challenge 2</h1>
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
                <span>ABOUT</span>
                <span>US</span>
                </div>
            </div>
        <div class="screen-body-item">
            <div class="app-form-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim ex dui, non sagittis quam pharetra eget. Morbi porta pretium sollicitudin. Pellentesque sollicitudin, odio id convallis aliquam, sapien orci ornare velit, non dictum massa velit a quam. Quisque turpis orci, hendrerit vel molestie eu, ultrices ut augue. Nunc mauris ipsum, semper at justo vitae, porta bibendum dolor. Pellentesque nibh nulla, convallis eget lorem sed, venenatis tincidunt ex. Quisque pulvinar quam in finibus egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In erat elit, consectetur facilisis iaculis et, congue in libero. Curabitur eu leo commodo orci pharetra porttitor. Nulla fermentum vulputate convallis. Nullam non faucibus leo, ac dignissim diam. Etiam auctor eget leo id fringilla. Morbi tristique malesuada nulla id dignissim. Aenean hendrerit pellentesque mauris.</p>
            </div>
        </div>
      </div>
      
    </div>
    </br>
    </br>
    <button style="align:right;" class="btnhome"><a href="../home.php">Home</a></button>
    <button style="align:right;" class="btnext"><a href="#popup1">Hint ?</a></button> 
    <button style="align:right;" class="btnext"><a href="2.php">Next Task</a></button>
    </div>
    </div>

    </form>

    <div id="popup1" class="overlay">
	<div class="popup">
		<h2>Hint !</h2>
		<a class="close" href="#">&times;</a>
		<div class="contentt">
			Check the URL
		</div>
	</div>
    </div>
    <?php

if(isset($_GET['id'])) {
$status =  $_GET['id'];
echo $status;
}
?> 
<!-- <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span> -->

            

</body>
</html>
