<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
<h2>Contact Us</h2>
  
  <?php

if (isset($_POST['fname'])) {

    echo "<div style=\"text-align:left;font-size:1em;\">Hello, " . $_POST['fname'] . "</div>";

}
else{

    echo '<form name="myForm" action="1.php" onsubmit="return validateForm()" method="post">
    <div class="siimple-form">
    <div class="siimple-form-detail">Fill the form to contact us.</div>
    <div class="siimple-form-field">
    <div class="siimple-form-field-label">Your Name</div>
    <input type="text" class="siimple-input siimple-input--fluid" placeholder="John" name="fname" >
    <input class="btn1" type="submit"  value="Submit">
    </div>
    </div>
    </form>';

}

?>

 <br>
    <br>
<br>
<span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span>

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