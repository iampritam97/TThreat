<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>

<h1>XSS Challenge 1</h1>

<?php

if (isset($_POST['fname'])) {

    echo "<div style=\"text-align:left;font-size:1em;\">Hello, " . $_POST['fname'] . "</div>";

}
else{

    echo '<form name="myForm" action="1.php" onsubmit="return validateForm()" method="post">
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
    <button style="align:right;" class="btnhome"><a href="../home.php">Home</a></button>
    <button style="align:right;" class="btnext"><a href="#popup1">Hint ?</a></button>  
    <button style="align:right;" class="btnext"><a href="2.php">Next Chall</a></button>
    </div>
    </div>

    </form>

    <div id="popup1" class="overlay">
	<div class="popup">
		<h2>Hint !</h2>
		<a class="close" href="#">&times;</a>
		<div class="contentt">
			Check the text field.
		</div>
	</div>
    ';

}

?>
            
<script>
	function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>

</body>
</html>
