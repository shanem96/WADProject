<!-- commenting template - http://startbootstrap.com/template-overviews/agency/ -->
<!DOCTYPE html>
<?xml-stylesheet href="catalogue.xsl" type="text/xsl"?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SouthWest Shoes</title>

    <!-- Bootstrap core CSS -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="project.css" rel="stylesheet">


   
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    

<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp);
    }
  };
  xhttp.open("GET", "shoe.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>name</th><th>description</th><th>price</th></tr>";
  var x = xmlDoc.getElementsByTagName("shoe");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
 
</script>

    
  </head>

  <body>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Southwest Shoes</a>
            </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#products">Products</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
          </form>
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <section id="about" class="about-section">
        <div class="container">     <img src="images/logo.JPG"  alt="Mountain View" style="width:100%;height:400px;">            
        <div class="row">
        
                <div class="col-lg-12">
                    <h1>About Section</h1>
                          
            <div class="row">
        
               
              
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="products" class="products-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Product Section</h1>
                </div>
            </div>
            <button type="button" onclick="loadDoc()">Shoe Catalogue</button>
           
            
<br><br>
<table id="demo"></table>
         </div>
         <div id = "slideShow1">
		
			<script language="javascript" type="text/javascript">
			
					var num=1
						img1  = new Image ();
						img1.src = "images/NikeRosheBlack.jpg";
						
						img2 = new Image ();
						img2.src = "images/NikeRosheGrey.jpg"
						
						img3 = new Image ();
						img3.src = "images/NikeFree.jpg"
						
						img4 = new Image ();
						img4.src = "images/NikeAirMax.jpg"
						
						img5 = new Image ();
						img5.src = "images/NikeC.jpg"
						
						img6 = new Image ();
						img6.src = "images/nikerosheR.jpg"
						
						img7 = new Image ();
						img7.src = "images/NikeDuelFusionRun.jpg"
						
						img8 = new Image ();
						img8.src = "images/NikeDuelFusion2.jpg"
						
						img9 = new Image ();
						img9.src = "images/ADIDAS-ORIGINALS-ZX-FLUX-SATELLITE-BLUE-2.jpg"  
						
						img10 = new Image ();
						img10.src = "images/adidas-zx-flux-core-black-running-white-3_1.jpg" 
						
						img11 = new Image ();
						img11.src = "images/zxfluxnavy.jpg" 
						
						img12 = new Image ();
						img12.src = "images/zxgrey.jpg"
						
						img13 = new Image ();
						img13.src = "images/zxwhite.jpg"
						
						img14 = new Image ();
						img14.src = "images/zxblack.jpeg"
						
						
					
						function slideshowUp()
						{
						num=num+1
						if (num==15)
						{num=1}
						document.mypic.src=eval("img"+num+".src")
					
						
						
						}
						
						function slideshowBack()
						{
						num=num-1
						if (num==0)
						{num=14}
						document.mypic.src=eval("img"+num+".src")
						
					
						
						}


			</script>
		
		
		<center> <img src="images/NikeRosheBlack.jpg" name="mypic"  border="0" height="250px" width="400px" /> </center>
			
			
				

		<center> <a href="JavaScript:slideshowBack()"> Back</A>
				 
				 <a href="JavaScript:slideshowUp()"> Next</A>
		</center>
		
			     <table border="0" cellpadding="0" align="center"> 
<tr> 
<td> 
<b>Full Name : </b> 
</td> 
<td> 
<input type="text" name="fullname" size="20"  >
</td> 
</tr> 
<tr> 
<td> 
<b>Address : </b> 
</td> 
<td> 
<input type="text" name="address" size="20"  >
</td> 
</tr> 
<tr> 
<td> 
<b>Mobile Number : </b> 
</td> 
<td> 
<input type="text" name="Mnumber" size="20" />
</td>
</tr>


<tr>
<td>
<b>What Holidays are you interested in?</b>
<select name="Categories"> 
<option value="WH">Winter Holidays  
<option value="AH">American Holidays
<option value="SH">Summer Holidays 
</select> 
</td> 

</tr> 
</table>
<table border="0" cellpadding="0" align="center"> 
<tr>
<b>Where have you heard about our service ?</b><br> 
Friends<input type="checkbox" name="InformationSource" value="Friend"> 
Television<input type="checkbox" name="InformationSource" value="TV"> 
NewsPaper<input type="checkbox" name="InformationSource" value="NP"> 
Internet<input type="checkbox" name="InformationSource" value="Net"> 
<p></p> 
</tr>
<tr>
<b>How would you rate our service?</b><br> 
Excellent<input type="radio" name="Rating" value="3"> 
Good<input type="radio" name="Rating" value="2"> 
Fair<input type="radio" name="Rating" value="1"> 
Terrible<input type="radio" name="Rating" value="0"> 
<p></p>
</tr>
<tr> 
<input type="submit" name="SubmitButton" value="Submit"> 
<input type="reset" name="ResetButton" value="Reset"> 
<input type="button" name="WelcomeButton" value="Press here" onClick="Welcome()"> 
</tr>
<hr>
</table>

 


			
	

    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                    
                </div>
            </div>
        </div>
        <script src="Contact.js"> </script>
        <ul class="toolbar">
				</ul>

<form name='registration' onSubmit="return Contact();" method="post" action="mailto:jamesredmond96@gmail.com">
<ul>
<li><label for="fname">First name:</label></li>
<li><input type="text" name="fname" size="50" placeholder="i.e: John" /></li>
<li><label for="lname">Last name:</label></li>
<li><input type="text" name="lname" size="50" placeholder="i.e: Smith" /></li>
<li><label for="address">Address:</label></li>
<li><input type="text" name="address" size="50" placeholder="i.e: Complex5PalmspringsUsa" /></li>
<li><label for="Mnumber">Mobile number:</label></li>
<li><input type="text" name="Mnumber"  placeholder="i.e: 00971501234567"/></li>
<li><label for="email">Email:</label></li>
<li><input type="text" name="email" size="50" placeholder="i.e: John.Smith@gmail.com" /></li>
<li><label for="desc">Message:</label></li>
<li><textarea name="Message" id="Message"></textarea></li>
<li><input type="submit" name="submit" value="Submit" /></li>
</ul>




<script language="javascript" type="text/javascript">
// Fetching HTML Elements in Variables by ID.
function Contact()
{
var name1 = document.registration.fname;
var name2 = document.registration.lname;
var addy = document.registration.address;
var mnum = document.registration.Mnumber;
var mailat = document.registration.email;

 if(fname_validation(name1))
{
if(lname_validation(name2))
{
if(alphanumeric(addy))
{ 
if(nums(mnum))
{
if(ValidateEmail(mailat))
{

} 
}
} 
}
}
return false;
} function fname_validation(name1)
{
var name1_len = name1.value.length;
if (name1_len == 3 )
{
alert("Please enter your first name");
name1.focus();
return false;
}
return true;
}
function lname_validation(name2)
{
var name2_len = name2.value.length;
if (name2_len == 3 )
{
alert("Please enter your last name");
name2.focus();
return false;
}
return true;
}
function alphanumeric(addy)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(addy.value.match(letters))
{
return true;
}
else
{
alert('Please enter the adress in format Countrty-City-Streetnumber without spaces');
addy.focus();
return false;
}
}
function nums(mnum)
{ 
var digits = /^[0-9]+$/;
if(mnum.value.match(digits))
{
return true;
}
else
{
alert('Please enter your Mobile number');
mnum.focus();
return false;
}
}
function ValidateEmail(mailat)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(mailat.value.match(mailformat))
{
alert("Thank you for contacting us we will get back you ASAP")
return true;
}
else
{
alert("Please enter a valid email address");
return false;
}




}
</script>
</form>
    </section>
    
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    
    
   

    <div class="container">
      <!-- Example row of columns -->
      
        
          <img src="images/banner.PNG" alt="Mountain View" style="width:100%;height:155px;">
        
      
</div>
      <hr>
 

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"> Facebook</i></a>
                        </li>
                        <li><a href="#">Twitter</i></a>
                        </li>
                        <li><a href="#">Instagram</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>     
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery.minn.js"><\/script>')</script>
    <script src="bootstrap.minn.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
