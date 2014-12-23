<?php
// this starts the session
session_start();
//this destroys the session if logout is selected and prints out session destroyed.
if(isset($_POST['clear'])){
session_destroy();
$_SESSION = array();
echo "Session Destroyed.";
}
// this allows the user to access the database once a user name is entered 
// with a welcome message.

// if the field is blank then it will redirect to the index page.
if(isset($_POST['submit'])){
	if(empty($_POST['username'])){

		echo "No username";
		header('Location: http://users.aber.ac.uk/nas29/cs25010/index.php/');
		exit;
	} else{
		$username=$_POST['username'];
		$_SESSION['username']=$username;
		echo "Welcome2 " . $_SESSION['username']; 
	}
//notifies if the form hasn't  been submitted.
} else {
	echo "Form not submitted";
}


?>
<!DOCTYPE html>
<head> 
<!-- This block is literally defining the character encoding and my stylesheet-->
    <title>Music Store </title>
    <meta charset="UTF-8">  
	<link rel="stylesheet" href="stylesheet.css"        type="text/css"/>

	</head>
    <!-- This is displaying my nav bar at the top of the page, complete with links-->
<body class="body">
    <header class="mainheader">
        <!--<img scr="/images/logo.png">-->
        
        <nav><ul>
        <li><a href="http://users.aber.ac.uk/nas29/cs25010/index.php">Home</a></li>
         <li><a href="http://users.aber.ac.uk/nas29/cs25010/newabout.php">About</a></li>
		<li><a href="http://users.aber.ac.uk/nas29/cs25010/database.php">music store</a></li>
			<li><a href="http://users.aber.ac.uk/nas29/cs25010/shoppingbasket.php">Shopping cart</a></li>
			<li><a href="http://users.aber.ac.uk/nas29/cs25010/checkoutform.php">Check out</a></li>
        <!--  <li><a href="http://users.aber.ac.uk/nas29/cs25010/logout.php">Logout</a></li> -->
		  <!--   <li><a href="#">View music</a></li> -->
        </ul></nav>
    
    
    </header>
    <!--This is the main content seciton dedicated to articles it's the centre area of the page--> 
    <!-- This welcomes the user as a message, on my index page from the php variable-->
    <div class="mainContent">
        <div class="content">
            <!--Title for the cotntent of the page--> 
        <article class="topcontent">
                <header>
           <h2><a href="#" title="First Post $username"></a></h2>
            </header>
            <section><h1>Welcome to the store checkout </h1> Please don't purchase anything. Enter your name and credit card number please.
				<form name="emailform" action="" onsubmit="return emailvalidation();" method="post" size=16>
				Email: <input type="text" name="email">
		<input type="submit" value="submit">
		</form>
		  
		  </section>
        </article>
		
		<article class="bottomcontent">
		<form name="creditcardform" action="" onsubmit="return checkcreditcard();" method="post" size=16>
				CardNumber: <input type="text" name="creditcard">
		<input type="Submit" value="Submit">
		</form>
		</article>
		  <!-- This script performs the email valdiaton using the variables i've created in the emaikl form i.e name of form and the name of the input to perform this.-->
		<script> 
		function emailvalidation(){
		var formdata = document.forms["emailform"]["email"].value;
		var checkforat = formdata.indexOf("@");
		var checkfordot = formdata.lastIndexOf(".");
		if(checkforat<1 || checkfordot<checkforat+2 || checkfordot+2>=formdata) {
		 alert("Not a valid e-mail address, please try again");
		 return false;
		}
		}
		</script>
	     <!-- This is my checker for credit card to check whether the user has entered a 16 digit credit card number -->
		<script> 
		function checkcreditcard(){
		var cardnumber=^4[0-9]{12}(?:[0-9]{3})?$
		if(document.creditcardform.creditcard.value.search(cardnumber)==-1)
		alert("please enter a valid 16 digit number inside");
		}
		</script>
		
            
 
     </div>
    </div>
    
    
     

   
       <!-- This creates the login side bar of which the user types in there user name-->
		<!-- This is a form which then reads in the login and logout-->
    <aside class="top-sidebar">
    <section> <h2>Login</h2></section>
        <p> Please type in your username.</p>
        <form action="#" method="post">
        <input type="text" name="username" value="username"/>
        <input name="submit" type="submit" value=" Login "/>
        <input name="clear" type="submit" value=" Logout "/>
 </form>
        
	</aside>
      <!-- this shows that my css3 validates -->
     <footer class="mainFooter">
     <p> Copyright by nathan Sanderson</p>
	 
	 <p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Valid CSS!" />
</a>
</p>
    </footer>

	<?php
$viewmonth=date("n");
if (($viewmonth==12)||($viewmonth<7))
{
if (isset($_POST["viewsource"])) {echo"<hr />";highlight_file(__FILE__);}
else echo('<form action="' . $_SERVER["PHP_SELF"] . '" method="post">
<p><input type="submit" name="viewsource" value="View source"/></p></form>');
}
?>


  
    
</body>


<!-- this is where te footer goes--> 
 


</html>