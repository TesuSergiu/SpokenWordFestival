<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Spoken Word Festial</title>
<link href="WebRedesign.css" rel="stylesheet" type="text/css"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="ResponsiveSlides.js-master/responsiveslides.js"></script>

<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>

</head>

<body>

<div class="container">
  <header>
    
    <ul class="rslides">
          <li><a href="WebsiteRedesign.html"><img src="Images/logo1r.jpg" alt="logo1" width="450" height="255" id="logo" style="margin: 0 auto; display:block;" /></a></li>
          <li><a href="WebsiteRedesign.html"><img src="Images/logo2r.jpg" alt="logo2" width="450" height="255" id="logo" style="margin: 0 auto; display:block;" /></a></li>
          <li><a href="WebsiteRedesign.html"><img src="Images/logo3r.jpg" alt="logo3" width="450" height="255" id="logo" style="margin: 0 auto; display:block;" /></a></li>
     </ul>
    
  </header>
  <div class="MenuBar">
      <nav>
            <ul>
              <li><a href="WebsiteRedesign.html">HOME</a></li>
              <li><a href="About.html">ABOUT</a></li>
              <li><a href="Events.html">EVENTS</a></li>
              <li><a href="Programme.html">PROGRAMME</a></li>
              <li><a href="Contact.html">CONTACT</a></li>
            </ul>
      </nav>
  </div>
  
  
  <div class="content">   
    <div class="Section1"
    	<p><h9></h9></p>


<?php

$dbc = mysqli_connect('50.62.209.40:3306', 'TesuSergiu' , 'DarkEight1995', 'PhPConnection')
	or die('Could not connect to MySQL.');
	
$email= $_POST['email'];

$query = "INSERT INTO email (email) VALUES ('$email')";
mysqli_query($dbc, $query)
	or die('Error not insterted');
	
	echo 'You successfully became a volunteer!'; 
	echo '<a href="About.html">Back</a>';

?>

    
</br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> 
      </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
      </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>



</div>
      
  <!-- end .content --></div>
  <div class="firstRight">
    <center><h7>FOLLOW US ON SOCIAL MEDIA</h7></center>
    	<div class="SocialMedia">
        	<a href="https://twitter.com/SpokenWord2014"><img class="popup" title="Twitter" src="Images/twitter-logo.png" alt="Twitter" width="80" height="90" id="logoTW" style="margin: 0 auto; display:block;" /></a>
            <a href="https://www.facebook.com/spokenwordfestival"><img class="popup" title="Facebook" src="Images/facebook-logo.png" alt="Facebook" width="80" height="90" id="logoFB" style="margin: 0 auto; display:block;" /></a>
            <a href="https://www.youtube.com/user/OdenseSpokenWord?feature=mhee"><img class="popup" title="YouTube" src="Images/youtube-logo.png" alt="YouTube" width="80" height="90" id="logoYT" style="margin: 0 auto; display:block;" /></a>
        </div>
  </div>
  
  <div class="secondRight">
   	<center><h7>READ US IN:</h7></center>
    </br>
    	<div class="Languages1">
               <center><a href="http://spokenwordfestival.dk/" style="color: #FFFFFF; text-decoration: none; font-weight: 700;">DK /</a> <a href="WebsiteRedesign.html" style="color: #FFFFFF; text-decoration: none; font-weight: 700;">ENG</a></center>
        </div>      
  </div>
  
  <div class="thirdRight">
    	<div class="Languages1">
               <center><h7>Admin shortcuts</h7></center>
               </br>
               
               <h5>Send emails to volunteers</h5>
                <form method="post" action="SendMailsTo.php">
                  	  <label for="subject">Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                      <input type="text" name="subject" id="subject">
                      </br>
                      <label for="mymail">Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                       <textarea name="mymail" id="mymail"></textarea>
                       </br>
                       <input type="submit" data-inline="true" value="Send">
    			</form>
                
                <h5>Remove old volunteers</h5>
                <form method="post" action="DeleteSubscribers.php">
                      <label for="email"></label>
                      <label for="subject">Enter mail here</label>
                      <input type="email" name="email" id="email">
                      <input type="submit" data-inline="true" value="Remove">
   				 </form>
               
        </div>      
  </div>
  
  <footer>
    <center><h11>&copy;Spoken Word Festival '15</h11></center>
  </footer>
  <!-- end .container --></div>

      

</body>
</html>