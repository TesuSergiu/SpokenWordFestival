<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Connectiont</title>
<link rel="stylesheet" href="themes/theme.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>

<div data-role="page" id="InsertUser" data-theme="d">

	<div data-role="header">

    <a href="#myPanel" data-icon="bars" data-iconpos="no-text">MENU</a>
    <a href="#register" data-icon="user" data-iconpos="notext">Register</a>   		
            
                <div data-role="navbar">
                    <center><img src="Images/Logo.png"  height="170" width="350" alt="logo" /></center>  
                </div>
                
                	<div data-role="panel" data-display="overlay" data-theme="d" id="myPanel">
               
                            <ul data-role="listview" class="ui-listview" data-filter="true" data-input="#myFilter">
                            
                                
                                <li data-icon="delete"> <a href="#" data-rel="close">Close menu</a></li> </br> </br>
                                
                                    <li><a href="#Home">HOME</a></li> </br>
                                    <li><a href="#Programme">PROGRAMME</a></li> </br>
                                    <li><a href="#SpokenWordFestival15">SPOKEN WORD FESTIVAL '15</a></li> </br>
                                    <li><a href="#SpokenWordAwardsWinners">SPOKEN WORD AWARD WINNERS</a></li> </br>
                                    <li><a href="#HighlightsAndHistory">HIGHLIGHTS AND HISTORY</a></li> </br>
                                    
                             </ul>
                      </div>
                      
      
       <div data-role="panel" data-position="right" data-display="overlay" data-theme="d" id="register">
          		
                <form action="InsertUser.php" method="post">
                    <h4>Register Here</h4>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" value="">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" value="">
                    
                    
                    
                    <input type="submit" name="submit" value="Register" data-inline="true">
                  
                    
             	</form>
                
                <h4>Change Your Password</h4>
                <form method="post" action="ChangePass.php">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">      
                    <label for="password">New Password</label>
                    <input type="password" name="password" id="password"> 
                  <input type="submit" data-inline="true" value="Change">
    			</form>
                
               <h4>Subscribe for Information</h4>
                <form method="post" action="InsertEmail.php">
                     <input type="email" name="email" id="email" placeholder="Enter your email here">
                     <input type="submit" data-inline="true" value="Submit">
    			</form>
                
                <h4>Send Emails to Volunteers</h4>
                <form method="post" action="SendMailsTo.php">
                  	  <label for="subject">Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                      <input type="text" name="subject" id="subject">
                      <label for="mymail">Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                       <textarea name="mymail" id="mymail"></textarea>
                       <input type="submit" data-inline="true" value="Send">
    			</form>
                
                <h4>Delete Subscribers</h4>
                <form method="post" action="DeleteSubscribers.php">
                      <label for="email"></label>
                      <input type="email" name="email" id="email">
                      <input type="submit" data-inline="true" value="Remove">
   				 </form>
                
                <div class="ui-grid-a">
                        <div class="ui-block-a"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-b ui-mini">Cancel</a></div>
                    </div>
                                    
                </div>
           </div>

<div data-role="main" class="ui-content">

<?php

	$dbc = mysqli_connect('50.62.209.40:3306', 'TesuSergiu' , 'DarkEight1995', 'PhPConnection')
		or die('Could not connect to MySQL.');
		
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
	mysqli_query($dbc, $query)
		or die('Error not insterted');
		
	echo 'You successfully registred'; 
	echo '<a href="spokenword.html">Back</a>';
		
	mysqli_close($dbc);

?>

</div>

<div data-role="footer" data-position="fixed">
    
        <center><h9>&copy;Spoken Word Festival '15</h9></center>
    
    </div>
    

    
</body>
</html>
