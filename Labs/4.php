<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
<h1>XSS Challenge 4</h1>
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
                <span>FILE</span>
                <span>UPLOAD</span>
                </div>
            </div>
        <div class="screen-body-item">
            <div class="app-form-text">
            File Upload :
</br>
                <input type="file" id="myFile" size="50">

                    <button class="app-form-button" type="button" onclick="myFunction()">Upload</button>

                    <p id="demo"></p>
                    <script>
                    function myFunction() {
                        var x = document.getElementById("myFile").value;
                        document.getElementById("demo").innerHTML = x;
                        }
                    </script>
                   <br>
            </div>
        </div>
      </div>
      
    </div>
    </br>
    </br>
    <button style="align:right;" class="btnhome"><a href="/xss-labs">Home</a></button>
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
</body>
</html>
