  <?php
session_start();


	if(isset($_SESSION['username'])){
	echo "Welcome to the Music Store " . $_SESSION['username']; 
	header('Location: http://users.aber.ac.uk/nas29/cs25010/database.php');

		} else{ 
			if(isset($_POST['submit'])){
				if(empty($_POST['username'])){
						echo "No username";
			//	header('Location: http://users.aber.ac.uk/nas29/cs25010/index.php/');
					exit;
		} else{
		$username=$_POST['username'];
		$_SESSION['username']=$username;
		echo "Welcome2 " . $_SESSION['username']; 
		}

		} else {
			echo "Form not submitted";
		}
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
        
				<li><a href="http://users.aber.ac.uk/nas29/cs25010/database.php">Music store</a></li>
			<li><a href="http://users.aber.ac.uk/nas29/cs25010/shoppingbasket.php">Shopping cart</a></li>
			<li><a href="http://users.aber.ac.uk/nas29/cs25010/checkoutform.php">Check out</a></li>
			<li><a href="http://users.aber.ac.uk/nas29/cs25010/logout.php">Logout</a></li>
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
           <h2><a href="#" title=Welcome to the about page></a></h2>
            </header>
            <section><h1>Welcome to the about page</h1> 
			
                </section>
        </article>
            
 
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


  
    
</body>


<!-- this is where te footer goes--> 
 


</html>