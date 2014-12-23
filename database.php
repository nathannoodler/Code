<?php  //starts the session for reading in the username once again.
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!--list different languages here--> 
<head> 
    <title>Music Store</title>
    <meta charset="=8"/>
	<link rel="stylesheet" href="stylesheet.css"        type="text/css"/>
	<meta name="responsetheme"             content="width=device-width, initial-scale=1.0">
  
  </head>
    
<body class="body">
    <header class="mainheader">
       <!-- attempted image link up <img scr="images/logo.png"> -->
       <nav><ul>
           <li><a href="http://users.aber.ac.uk/nas29/cs25010/index.php">Home</a></li>
         <li><a href="http://users.aber.ac.uk/nas29/cs25010/newabout.php">About</a></li>
		<li><a href="http://users.aber.ac.uk/nas29/cs25010/database.php">music store</a></li>
			<li><a href="http://users.aber.ac.uk/nas29/cs25010/shoppingbasket.php">Shopping cart</a></li>
			<li><a href="http://users.aber.ac.uk/nas29/cs25010/checkoutform.php">Check out</a></li>
		<!--	<li><a href="http://users.aber.ac.uk/nas29/cs25010/logout.php">Logout</a></li> -->
          <!--   <li><a href="#">View music</a></li> -->
        </ul></nav>
		
	
    
    </header>
    <!--This is the main content seciton dedicated to articles it's the centre area of the page--> 
    
    <div class="mainContent">
        <div class="content">
	
          
        <article class="topcontent">
                <header>
           <h2><a href="#" title=""></a></h2>
           </header>
            <?php
session_start();
$_SESSION['username']; 
	session_start();
	if(isset($_POST['clear'])){
        session_destroy();
      $_SESSION = array();
      echo "Session Destroyed.";
     header('Location: http://users.aber.ac.uk/nas29/cs25010/index.php');
      exit;
}


	if(isset($_SESSION['username'])){
	echo "Welcome to the Music Store " . $_SESSION['username']; 
//	header('Location: http://users.aber.ac.uk/nas29/cs25010/database.php');

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
			<form name="sortby" form action="database.php" method="post">
			<select name="genres">
			  <option value="Hip-hop">Hip-hop </option>
			  <input type="Submit";
            </select> 
			</form>
			
		  <!-- this deals with the form for submitting the price seter i.e for sorting the data--> 
		  
		  <article> <h2> </h2>
		  <!--<?php echo "Please type the lowest price and highest price you wish to pay";
		  ?>-->
	<form action="database.php" method="get">
	Lowest Number: <input type="text" name="lessthan">
	Greater Number<input type="text" name="greaterthan">
	<input type="submit">
	</form>
    </article>
	
	<article>
		
	</article>

	  <!-- This manages my database, firstly i've declared my greater than and less than variables to get from the form below for sorting--> 	
			  <!-- Basically the first if deals with if there is an empty field.--> 
			  <!-- $conn is the database handle and i'm using this to query my sql as it selects the music, executes the pricing and then orders it in ascending order-->
<!-- I've tried to do the sort by genre however i've got an issue where it isn't displayed-->			  
 <?php
$conn = pg_connect("host=db.dcs.aber.ac.uk port=5432
dbname=teaching user=csguest password=r3p41r3d");
if(!$conn){
 die("couldn't connect");
}
$conn = pg_connect("host=db.dcs.aber.ac.uk port=5432
	dbname=teaching user=csguest password=r3p41r3d");
$sortby= $_POST['sortby'];
$genres= $_POST['genres'];
	
	if(!empty($sortby)){

	$res = pg_query ($conn, "select * from music WHERE genre='$genres' ORDER BY artist ASC");
	}
	else{
		$res = pg_query ($conn, "select * from music");
		
	//	$res = pg_query ($conn, "select * from music WHERE " );
	}
	
	
$res = pg_query ($conn, "select * from music");
$gr=$_GET["greaterthan"];
$les=$_GET["lessthan"];
		if($gr=='') {
	

	$res = pg_query ($conn, "select * from music");
	echo $_GET["lessthan"];
	}
			else{
	

		
		$res = pg_query ($conn, "select * from music WHERE price <=$gr AND price >=$les ORDER BY price ASC;" );
		}
echo "<style#size{padding:10px;height:100px;width:340px;overflow-y:scroll;}</style>";
// This styles my table //
echo "<table border='1'>";
$i=1;
while ($a = pg_fetch_array ($res))
{ 

 for($j=0; $j< pg_num_fields($res); $j++)
 {
  "<td>\n" . $a[$j] . "</td>\n";
 
 }
//echo "<td><input type='checkbox' name='lefthandside".$a['artist'] value='1'; /></td>
echo "<tr>";

$i++;

echo "<input type='hidden' name='num' value='$i'/>";

echo "<td>" . $a["artist"] . "</td>";
echo "<td>" . $a["composer"] . "</td>";
echo "<td>" . $a["genre"] . "</td>";
echo "<td>" . $a["title"] . "</td>";    
echo "<td>" . $a["price"] . "</td>";  
echo "<td> <input type='checkbox' name='selection' value='$reference' /> </td>";
}
echo "</table>\n";
?>
            
	<!-- this selects all of the data from the fields and prints it out ^-->
  

	 <!--This for the side bar content, i can decide to keep these or delete them--> 
       <aside class="top-sidebar">
    <article> <h3>Login</h3> </article>
        <p> Please type in your username.</p>
        <form action="" method="post">
        <input type="text" name="username" value="username"/>
        <input name="submit" type="submit" value=" Login "/>
        <input name="clear" type="submit" value=" Logout "/>
	</form>
  </aside>
	
    <aside class="bottom-sidebar">
	<p> Please click submit after ticking boxes for your order</p>
	<form action="" method="post">
   <input name="checkbox" name="" value="idfortrack">Inputfortrack</input>
    <input name="submit" type="submit" value="submit "/>
   </form>
   
 
 <!-- This was meant to count all of the check boxes ticked in the database--> 
    
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

</html>