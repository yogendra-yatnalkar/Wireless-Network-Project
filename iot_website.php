<!DOCTYPE html>
<html>
<title>Smart Water Bucket</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>

	<script>
        function abc(){
		var xhttp= new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState==4 && this.status==200){
				var obj=JSON.parse(this.responseText);
				var date=(obj.created_at).split("T");
				var time=(date[1].split("Z"))[0];
				var field_1=obj.field1;
				if(field_1>500){
					field_1="on verge of overflow.";
				}
				else{
					field_1="Acceptable.";
				}
                //document.write(obj.field1);
				var field_2=obj.field3;
				var str=`<h3>The water bucket as of ${date[0]} is: <br/><br/></h3>
				Time of taking the reading ${time} <br> The depth of the water is ${field_1}`;
				document.getElementById('yy').innerHTML=str;
			}
		};
		xhttp.open("GET","https://api.thingspeak.com/channels/584560/feeds/last.json?timezone=Asia/Kolkata",true);
		xhttp.send();
	}
  window.onload=abc;
    setTimeout(function() {
        location.reload();
        }, 5000);
	</script>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Smart Water Bucket</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">Info.</a>
      <a href="#menu" class="w3-bar-item w3-button">Products</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header --><center>
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="bucket.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottommiddle w3-padding-large ">
    <h1 class="w3-xxlarge"><b>Be Smart</b></h1>
  </div>
</header></center>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
    <iframe width="450" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/584560/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Your Product's Analysis:</h1><br>
      <h5 class="w3-center">(Refresh the page to view live data) </h5>
      <p class="w3-large" id="yy"></p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row " id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Products</h1><br>
      <h4>Smart Water Bucket</h4>
      <p class="w3-text-grey">Bucket to indicate the water depth and temperature in bathing room.</p><br>
    
      <h4>Water Quality Tool</h4>
      <p class="w3-text-grey">Tests whether the water is usable or not.</p><br>
    
      <h4>Handy Atmosphere temperature device</h4>
      <p class="w3-text-grey">Anywhere and everywhere temperature tester.</p><br>
    
      <h4>Soil Qulity Tester</h4>
      <p class="w3-text-grey">Helps farmers to test the quality of their soil to plan their next year's plantation.</p><br>
    
      <h4>Car fuel notification sender</h4>
      <p class="w3-text-grey">Gives notification when fuel is low and helps to find where the petrol station is.</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="images.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container " id="contact">
    <h1>Contact</h1><br>
    <p>We offer various IOT-enabled smart products over different domains. We understand your needs and we will cater them with our new innovations to satisfy the biggerst criteria of them all, both ease and cost. Do not hesitate to contact us.</p>
    <p class="w3-text-red w3-large"><b>618 Bhiwandiwalla Terrace, C Block, 4th Floor, Mumbai, Maharashtra, 4000002, India</b></p>
    <p>You can also contact us by phone <b class="w3-large w3-text-red">9167483290</b> or email <b class="w3-large w3-text-red">hanozd1234@gmail.com</b>, or you can send us a message here:<a href='https://www.facebook.com/'><b class="w3-large w3-text-red">Facebook</b></a></p>
  
<!-- End page content -->
</div>

</body>
</html>
