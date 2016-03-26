<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta name="IT student alliance" content="IT Student Alliance is a registered student organization(RSO) dedicated to the advancement of IT students at Lansing Community College(LCC) . Our goal is to unite IT/CS students with professors and potential employers and also encourage students to network with each other, and pursue many of the opportunities currently happening at LCC and within the community.">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

  <link rel="shortcut icon" href="images/ITSAlogo.png">
  <title>ITSA LCC | IT Student Alliance | itstudentalliance.com </title>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Oswald:700, 400' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/index.css">

</head>
<body>

  <div class="page-container">
    
    <!-- top navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container">
      <div class="navbar-header navbar-right" id ="socialMedia">
       
       <!-- <a class="navbar-brand" href="#">Project Name</a> -->
       <form role="form" class="form-inline" id="subscribeForm">

        
        <div class="form-group ">
          

          <input id ="email" type="email" name="email" class="form-control input-xs" placeholder="E-mail ID" data-toggle="popover" title="Subscription Successful" trigger="focus" data-placement="top" data-content="Thank you!" required>
          <input  id = "subscribe" class="btn btn-primary btn-sm" type="submit" style="background: #699a33;" value ="Subscribe">

          
                <!--        </div>

                <div class="form-group"> -->
                 

                  <a class="socIcon" href="mailto:lcc-itsa@mail.lcc.edu"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Googlemaillogo.png"> </a> 

                  <a class="socIcon" href="https://www.facebook.com/Information-Technology-Student-Alliance-1630379710529200/"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Farm-Fresh_facebook.png"> </a>

                  <a class="socIcon" href="https://www.linkedin.com/groups/4879806/profile"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/768px-LinkedIn_logo_initials.png" > </a>
                  

                  <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
               </div>
             </form>



           </div>
         </div>
       </div>
       <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
          
          <!-- sidebar -->
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas " id="sidebar" role="navigation">
            <ul id="menu" class="nav">
              <li class="active"><a href="index.html"><i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;&nbsp;HOME</a></li>
              <li><a href="network.html"><i class="fa fa-globe fa-lg"></i>&nbsp;&nbsp;&nbsp;NETWORK</a></li>
              <li><a href="resources.html"><i class="fa fa-life-ring fa-lg"></i>&nbsp;&nbsp;&nbsp;RESOURCES</a></li>
              <li><a href="events.html"><i class="fa fa-bullhorn fa-lg"></i>&nbsp;&nbsp;&nbsp;EVENTS</a></li>   
              <li><a href="contactus.html"><i class="fa fa-comments fa-lg"></i>&nbsp;&nbsp;&nbsp;CONTACT US</a></li>   
            </ul>
            <div id="cal">
              <iframe  class="sidebar" src="https://calendar.google.com/calendar/embed?title=ITSA%20Events&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=lcc-itsa%40mail.lcc.edu&amp;color=%23875509&amp;ctz=America%2FNew_York" style="border-width:0" width="250" height="400" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>

        <!-- main area -->
        <div  id = "content" class="col-xs-12 col-sm-9" >

          <h1>Information Technology Student Alliance</h1>
          <br>
<form class="well form-horizontal" >
          

          <h3 >Thank you! </h3><br>

          <p> Your form has been successfully submitted. <br> <br>
            We will get back to you soon.</p>

      
</form>


                 
                  

        </div><!-- /.col-xs-12 main -->
    </div><!--/.row-->
  </div><!--/.container-->
  <footer >
          <ul class= "list-inline">

            <li>&copy; IT Student Alliance | Lansing Community Collge</li>
            <li><a href="faq.html">FAQ</a> </li>

            <li> 
             <a class="socIcon" href="mailto:lcc-itsa@mail.lcc.edu"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Googlemaillogo.png"> </a> 

             <a class="socIcon" href="https://www.facebook.com/Information-Technology-Student-Alliance-1630379710529200/"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Farm-Fresh_facebook.png"> </a>

             <a class="socIcon" href="https://www.linkedin.com/groups/4879806/profile"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/768px-LinkedIn_logo_initials.png" > </a>
             
           </ul>
         </footer>
</div><!--/.page-container-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>  
            <script src="js/index.js"></script>
 
<!-- <script src="js/index.js"></script>
<script src="js/contactus.js"></script>
 -->
<!-- php script for contact  -->

<?php
  // Change this to YOUR address
  $recipient ='mohames4@mail.lcc.edu';
  $subject ='Website comments';
  $first_name =$_POST['first_name'];
  $last_name =$_POST['last_name'];
  $email =$_POST['email'];
  $comments = $_POST['comment'];



  # We'll make a list of error messages in an array
  $messages = array();
# Allow only reasonable email addresses
if (!preg_match("/^[\w\+\-.~]+\@[\-\w\.\!]+$/", $email)) {
$messages[] = "That is not a valid email address.";
}
# Allow only reasonable real names
if (!preg_match("/^[\w\ \+\-\'\"]+$/", $first_name)) {
$messages[] = "The first name field must contain only " .
"alphabetical characters, numbers, spaces, and " .
"reasonable punctuation. We apologize for any inconvenience.";
}
if (!preg_match("/^[\w\ \+\-\'\"]+$/", $last_name)) {
$messages[] = "The last name field must contain only " .
"alphabetical characters, numbers, spaces, and " .
"reasonable punctuation. We apologize for any inconvenience.";
}
# CAREFUL: don't allow hackers to sneak line breaks and additional
# headers into the message and trick us into spamming for them!
# Make sure the message has a body
if (preg_match('/^\s*$/', $comments)) {
$messages[] = "Your message was blank. Did you mean to say " .
"something?"; 
}
  if (count($messages)) {
    # There were problems, so tell the user and
    # don't send the message yet
    foreach ($messages as $message) {
      echo("<p>$message</p>\n");
    }
    echo("<p>Click the back button and correct the problems. " .
      "Then click Send Your Message again.</p>");
  } else {
    # Send the email - we're done
mail($recipient,
      $subject,
      $comments,
      "From: itsa-admin@itstudentalliance.com \r\n" .
      "Reply-To: $first_name $last_name <$email>\r\n"); 

  }
?>
<!-- php script for contact ends -->


</body>
</html>