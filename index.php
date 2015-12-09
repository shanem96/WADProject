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
<script src ="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<sciprt src ="script.js"></sciprt>
    <!-- Bootstrap core CSS -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="project.css" rel="stylesheet">


   
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

<style>

table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}


</style>
<!-- moodle notes and w3schools -->
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
                        <a class="page-scroll" href="#about">Products</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#products">Catalogue</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact </a>
                    </li>
                </ul>
            </div>
          </form>
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <section id="about" class="about-section">
        <div class="container">                 
        <div class="row">
        <img src ="images/logo.png" height="500px" width="100%">
                <div class="col-lg-12">
                    <h1>Product Section</h1>
                    </div>
                    </div>
                    
                    <div id="button"><h3>See more about our Business, Southwest Shoes!</h3></div>

<button type="button" onclick="loadTxt()">Click To see Southwest Shoes info!</button>

<script>
function loadTxt() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("button").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "shoe.txt", true);
  xhttp.send();
}
</script>
                    
       <!--     <div class="row">
         <div id = "slideShow1">-->
		
			<script language="javascript" type="text/javascript">
			
					var num=1;
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
						img14.src = "images/zxblack.jpeg";
						
						
					
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
		<div class ="tabel">
		    <script src="Purchase.js"> </script>
			     <form name ='purchase' onSubmit="return Purchase()">
			         <table border="0" cellpadding="0" align="center"> 
<tr> 
<td> 
<b>Name : </b> 
</td> 
<td> 
<input type="text" name="fname"/>
</td> 
</tr> 
<tr> 
<td> 
<b>Address : </b> 
</td> 
<td> 
<input type="text" name="address"/>
</td> 
</tr> 
<tr> 
<td> 
<b>Mobile Number : </b> 
</td> 
<td> 
<input type="text" name="Mnumber"/>
</td>
</tr>
<tr>
<td>
<b>What shoe would you like to buy?</b>
</td>
<td>
<select name="Categories"> 
<option value="AO">Adidas Originals-ZX-Flux</option>
<option value="AZX">Adidas ZX-Flux-Core</option>
<option value="NAM<">Nike Air Max </option>
<option value="NR<">Nike Roche</option>
<option value="NFR<">Nike Free runs</option>
<option value="NDF<">Nike Dual Fusions </option>
</select></td> 
</tr>
<tr>
    <td>
    <b>Colour</b><br>
    </td>
    <td>
    Green<input type="radio" Name="Colour" value="1">
    Red<input type="radio" Name="Colour" value="2">
    Blue<input type="radio" Name="Colour" value="3">
    White<input type="radio" Name="Colour" value="4">    
    Black<input type="radio" Name="Colour" value="5">     
    Grey<input type="radio" Name="Colour" value="6">    
    Orange<input type="radio" Name="Colour" value="7">    
    Navy<input type="radio" Name="Colour" value="8">    
    </td>
</tr>
<tr>
<td>
<b>Size?</b><br> 
</td>
<td>
<select name="Sizes"> 
<option value="one">1</option> 
<option value="two">2</option>
<option value="three">3 </option>
<option value="four">4 </option>
<option value="five">5 </option>
<option value="six">6</option>
<option value="seven">7 </option>
<option value="eight">8 </option>
<option value="nine">9 </option>
<option value="ten">10</option> 
<option value="eleven">11</option>
<option value="twelve">12 </option>
</select>
</td>
</tr>
<tr>
<td>
<b>How would you rate our service?</b><br> 
</td>
<td>
Excellent<input type="radio" name="Rating" value="3"> 
Good<input type="radio" name="Rating" value="2"> 
Okay<input type="radio" name="Rating" value="1"> 
Terrible<input type="radio" name="Rating" value="0"> 
</td>
</tr>
<tr>
<td>

<button type="submit" class="btn btn-primary" name="submit" value="Order">Order Product</button 
</td>
<td>
    
<button type="reset" class="btn btn-primary" name="ResetButton" value="Reset">Reset</button>     
    
</td>

</tr>
<script language="javascript" type="text/javascript">
// Fetching HTML Elements in Variables by ID.
function Purchase()
{
var fullname = document.purchase.fname;
var addr = document.purchase.address;
var numb = document.purchase.Mnumber;


 if(fname_validation(fullname))
{

if(alphanumeric(addr))
{ 
if(nums(numb))
{


}
} 
}

return false;
 function fname_validation(fullname)
{
var fullname_len = fullname.value.length;
if (fullname_len <= 2 )
{        alert("Name must have more than 2 letters");
alert("Please enter your name");
fullname.focus();
return false;
}
return true;
}
function alphanumeric(addr)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(addr.value.match(letters))
{
return true;
}
else
{
alert('Please enter the adress in format Countrty-City-Streetnumber without spaces');
addr.focus();
return false;
}
}
function nums(numb)
{ 
var digits = /^[0-9]+$/;
if(numb.value.match(digits))
{
return alert('Thank you for purchasing our product');
}
else
{
alert('Please enter your Mobile number');


return false;
}
}

}

</script>
</table>
</form>
</div>

  </section>
    <!-- Services Section -->
    <section id="products" class="products-section">
        <div class="close-modal" data-dismiss="modal"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Shoe Catalogue Section</h1>
                </div>
            </div>
             <!-- w3schools source -->
<p><b>See if we stock your brand!</b></p>
<form> 
Search: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Brands we Stock: <span id="txtHint"></span></p>

            <h3> Click The button below to see our Catalogue of Brilliant Shoes!</h3>
            <button type="button" class="btn btn-primary" onclick="loadDoc()">Shoe Catalogue</button>
          
          

<br><br>
<table id="demo"></table>
         </div>
        

    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                    
                </div>
            </div>
        
        <script src="Contact.js"> </script>
        <ul class="toolbar">
				</ul>

<form name='contact' onSubmit="return Contact();" method="post" action="mailto:jamesredmond96@gmail.com">
<ul>
<li><label for="fname">First name:</label></li>
<li><input type="text" name="fname" placeholder="i.e: John" /></li>
<li><label for="lname">Last name:</label></li>
<li><input type="text" name="lname"  placeholder="i.e: Smith" /></li>
<li><label for="address">Address:</label></li>
<li><input type="text" name="address"  placeholder="i.e: Complex5PalmspringsUsa" /></li>
<li><label for="Mnumber">Mobile number:</label></li>
<li><input type="text" name="Mnumber"  placeholder="i.e: 00971501234567"/></li>
<li><label for="email">Email:</label></li>
<li><input type="text" name="email"  placeholder="i.e: John.Smith@gmail.com" /></li>
<li><label for="desc">Message:</label></li>
<li><textarea name="Message" id="Message"></textarea></li>
<li><input type="submit" name="submit" value="Submit" /></li>
</ul>




<script language="javascript" type="text/javascript">
// Fetching HTML Elements in Variables by ID.
function Contact()
{
var name1 = document.contact.fname;
var name2 = document.contact.lname;
var addy = document.contact.address;
var mnum = document.contact.Mnumber;
var mailat = document.contact.email;

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
 function fname_validation(name1)
{
var name1_len = name1.value.length;
if (name1_len <= 2 )
{        alert("First name must have more than 2 letters");
alert("Please enter your first name");
name1.focus();
return false;
}
return true;
}
function lname_validation(name2)
{
var name2_len = name2.value.length;
if (name2_len <= 2)
{
    alert("Last name must have more than 2 letters");
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
alert("Thank you for contacting us we will get back you ASAP");
return true;
}
else
{
alert("Please enter a valid email address");

return false;
}




}
}

</script>
</form>
</div>    </section>
    
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
