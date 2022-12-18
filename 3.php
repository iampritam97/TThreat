<?php
session_start();

$userinfo = array(
                'myuser'=>'mypass'
                );



if(isset($_POST['username'])) {
  if(isset($userinfo[$_POST['username']])){if($userinfo[$_POST['username']] == $_POST['password']) {
      $_SESSION['username'] = $_POST['username'];
  }else {
    header('Location: 3.php?message=wrong user name or password');

  }

}else{header('Location: 3.php?message=wrong user name or password');}




}
?>




<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>

<h1>XSS Challenge 3</h1>



<form name="myForm" action="3.php"  method="post">
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
                    <span>LOG</span>
                    <span>IN</span>
                    </div>
                </div>
            <div class="screen-body-item">
                <div class="app-form">
                    <div class="app-form-group">
                        <input type="text" class="siimple-input siimple-input--fluid" placeholder="username" name="username">
                    </div>

                    <div class="app-form-group">
                        <input type="password" class="siimple-input siimple-input--fluid" placeholder="password" name="password">
                    </div>

                    <?php
          if(isset($_GET['message'])) {
           $status =  '<div class="siimple-alert siimple-alert--error">' . $_GET['message'] . '</div>';
       	echo $status;
       }

           ?>

                    <div class="app-form-group buttons">
                  <button class="app-form-button">Login</button>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
        </br>
        </br>
        <button style="align:right;" class="btnhome"><a href="/xss-labs">Home</a></button>
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
			Check the URL after providing wrong credentials.
		</div>
	</div>



?>
<!-- <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span> -->

            
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
