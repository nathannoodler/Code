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
			<!--<li><a href="http://users.aber.ac.uk/nas29/cs25010/logout.php">Logout</a></li>-->
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
				<!-- This is my evaluation -->
           <h2><a href="#" title=Welcome to the about page></a></h2>
            </header>
            <section><h1>Welcome to the about page</h1>  </section>
			<section> Firstly I found it difficult to do my mark up in html 5 as in my previous assignment for web development I used xhtml 1.1 strict.  Using the semantic web was a difficult task but I think it was the right decision it may have take 4-5 hours to mark up, but my website is responsive and dynamic when the browser size changes.  To help me develop my website I used a mixture of w3 schools and YouTube resources.</section>
			<br></br>
			<section> The main problem I had during the development stages was getting my style sheet to actually link, I found out that my file extension was incorrect as it was ‘.csss’ rather than ‘.css’.  Another area I found difficult during mark up as creating my first post-white container.  This is because, I got confused with using div tag I didn’t think that this tag was necessary in html 5 so, I couldn’t figure out how to create my white containers. However after research I found out that div is essential for creating a layout and style to that particular element.  After discovering this it made mark up more manageable and a pleasure to carry out. I’ve learned from this semester to do a bit of each assignment at a time, as I’ve been trying to juggle five assignments during the period with a C assignment due in 2 weeks time.</section>
			<br></br>
		    <section>Another design issue or impracticality is not having a music store navigational button. The reason I didn’t include this button is so that a user can’t just click on the music store tab to gain access to the database without a valid user name entered. This is why a user is required to login every time in the index page. If I had more time I would’ve implemented a navigational button check, of which I’d use php to apply a condition to see whether has set a user name upon the button click, if not I’d have a little script with a document alert saying a username has to be set before accessing the music store.</section>
			<br></br>
			<section> When creating my session I struggled after the initial session start(), as I thought this process would be simple and would take a matter of minutes to implement. However I discovered that I really didn’t understand php when trying to implement this feature as in my first attempt, I didn’t initialise my username variable. This meant when I was testing whether a user inputted a username in the form input box then a variable would never be set, so the if always let the user login even if the field was blank. To correct this mistake I initialised my username variable before the if this then allowed the if to access the variable if a user did type in a username and means if the area is left blank then the user isn’t able to login to the database.</section>
			<br></br>
			<section> I was able to implement the session destroy function competently this is because my username variable was set. I linked this function with a logout button in a form; once the user clicks the logout button then the user is redirected to the index page. I just placed another condition within my session code to check if a user name was set, and if the logout button was clicked then the session destroyed method is called. After this I understood how to link forms with php more thoroughly as previously I found this idea very difficult to grasp.  From issues with php I used the php.net website as a reference and at times I used an online php complier as at times I got errors regarding my if and else blocks due to having extra brackets. From this scenario I realised how useful a complier is for just picking up simple errors which otherwise may have took a number of hours or even days to tackle.</section> 
			<br></br>
			<section> For maintaining the session I just copied and pasted my session code on each page and ensured that the session_start was present on every page to ensure, the session is saved throughout the users web browsing. This was done to trial and error reflecting on this action, I decided to try anything that may work and not be afraid if something errors out as there’s always a way to fix it or simply undo it and start tackling the problem again. </section>
			<br></br>
			<section>With the basket page I’ve found this the most challenging of the whole assignment and never appreciated how great of a task creating a basket is for a website.  I can understand why a lot of companies use pre-existing code to generate a basket page. I even found using checkboxes a challenge as instead of using checkboxes I added another column to the table with a hyperlink for every row saying ‘add to basket’. My idea was that the user clicked adds to basket, I then add had an array, which had my tracks php file which was the database and a cart php file. If the user started to select tracks then the url would state the page=tracks.php while if a user selected checkout it would take them to the cart page.  Allowing them to then to view the tracks they’ve selected on the checkout page which would then leave the user to fill in their credit card number and email address.</section>
			<br></br>
			<section> However after spending 4-5 hours trying to implement this I decided that I was just too complicated I was far better removing the hyperlinks and pages array and just implementing check boxes. From there I could then use a form which collected the checkbox data saved it in a session which could then be accessed by the shopping cart page, which would display all of the tracks saved from the form session on my database.php page.  As I’d use an id for each checkbox, so the relevant record could be pulled using the form. As for removing the track from the cart I’d have used a search to find the relevant Id, a for each loop would be used to then retrieve the track id and remove it from the shopping cart list.</section>
			<br></br>
			<section> I only was able to add the checkboxes to my table and I couldn’t figure out how my form could then read the checkboxes I’d to find out which were clicked. I spent two days trying to get this to work, but just couldn’t code it, I know how to do it theoretically but just can’t code it. To reflect I should’ve spent my time on the Kahn coding academy to learn the basics of php first and then moved onto the assignment but I think with the time I’ve had which is a week, I’ve done the best possible. I’ve spent 8-9 hours daily in b23 trying to implement the requirement specification for the assignment but have just really struggled in certain areas especially the cart. However after the assignment and during Christmas I will learn php to become more competent in the language and improve my skill set. I’ve placed the way I’ve tried to do the shopping basket code in comments, such as the sql for summing.</section>
			
			<section>I found the database section the easier out of the whole assignment, being able to connect to the database was easy as was getting the relevant field such as artist, title, price and description. It was literally just using echo to print out the fields.  The sql was a bit more difficult, as when I was trying to do the <=greaterthan AND >=lessthan I kept getting errors. I then tried using the ORDER BY function in sql followed by price and then my sql started to work, I don’t know whether the sql was throwing errors as it didn’t know what to do with the data once it finished the query or I just deleted a syntax error such as a filed spelled incorrectly. I should’ve known that the database section would be easier for me this is because I studied databases last year and practiced a little bit of sql.
			I tried to order my table by genre I completed the sql statement and created a drop down menu of which the user could organise the results by hip-hop. However the code doesn’t actually work, I don’t understand why this doesn’t work because the code is correct. I got an error initially this is because I didn’t correctly declare my genre variable because it was the same as the genre field name in the table. I thought this was over-riding the variable. However this still didn’t make the code function as it should do, on reflection I understand sql a lot more now than I did previously which is always a redeeming factor. I don’t have the time to review the code any further as I need to get the regular expression form checking to function correctly. 
			</section>
			<br></br>
			<section>
			When validating my code I came across some errors not with the html code itself but in fact due to php being used at the top of the document rather than in a typical html page the DTD being present at the top of the page. I decided to delete my php and then validate my code, my index.php page validates while my database.php doesn’t. I know why this page doesn’t validate this is because I’ve got a lot of php on multiple lines especially with printing the table out, I’ve also got sql present throughout. I’ll have the same issue with my shopping cart page as again I’ve got the same php and sql statements. However for my about page and my checkout page it validates this is because they’re modelled very similar to my index.php page and they don’t contain as much vital php as the database.php and the shopping cart has. If I were to repeat this task, I’d separate my php files into functions and then call them within the html this would stop the validator from picking up so many errors regarding the php. My css validates this is because it doesn’t feature any scripts and i followed standards while writing my css more closely. </section>

			<br></br>
		<section> For the final part of the assignment which is to introduce form checking for an email address and a credit card number. I’ve completed the email address validation using JavaScript it didn’t take at all, once i correctly named and defined the variables. I found JavaScript a much more friendly language in comparison to php, as I find it neater and I’m more used to object oriented approach, although I am aware that php can be object oriented but I just didn’t have time to read object oriented php. My credit card field didn’t work even though the regular expression is correct. I’m not sure why this happens as I’ve used the same code from my email validation as I have with my credit card validation.</section>
 

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