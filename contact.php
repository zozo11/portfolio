<!doctype html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/wzy_favicon.ico" /> 
    <title>CONTACT</title>
    <script src="js/jquery-2.1.4.min.js"></script>
    <link rel="jquery-ui-1.11.4.custom/jquery-ui.css">
    <script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <script src="js/unslider.js"></script>
    <script src="js/min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
	  <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	  <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css"/>
 	  
    
  </head>
  <body id="home">

      <div class="container-fluid">
  			<nav class="navbar navbar-default navbar-fixed-top">
    				<div class="navbar-header">
     					 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
     					</button>    
    				</div>

    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div id="navbarmain">
              <span><a href="index.html"><img id="logos" src="images/logos.png"></a></span> 
                <ul class="nav navbar-nav">
                    <li><a href="index.htm#">About</a></li>
                    <li><a href="index.htm#skill">Skills</a></li>
                    <li><a href="portfolio.html">Folio</a></li>
                    <li><a href="contact.htm">Contact</a></li>
                </ul>
              </div>
          </div>

        </nav>
  		</div>
            <div class="container-fluid" >
            <div class="row">
              <div class="container" id="form">
                 <div class="vertical-middle">
                     <div class="container">
                       <div class="panel panel-default">
                         <div class="panel-heading">
                             <h2 class="panel-title">Contact Form</h2>
                          </div>
                      <div ng-controller="ContactController" class="panel-body">
                           <form ng-submit="submit(contactform)" name="contactform" method="post" action="" class="form-horizontal" role="form">
                              <div class="form-group" ng-class="{ 'has-error': contactform.inputName.$invalid && submitted }">
                                  <label for="inputName" class="col-lg-2 control-label">Name</label>
                                <div class="col-lg-10">
                                  <input ng-model="formData.inputName" type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name" required>
                                </div>
                             </div>
                            <div class="form-group" ng-class="{ 'has-error': contactform.inputEmail.$invalid && submitted }">
                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputEmail" type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputSubject.$invalid && submitted }">
                            <label for="inputSubject" class="col-lg-2 control-label">Subject</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputSubject" type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
                            <label for="inputMessage" class="col-lg-2 control-label">Message</label>
                            <div class="col-lg-10">
                                <textarea ng-model="formData.inputMessage" class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..." required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-default" ng-disabled="submitButtonDisabled">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                    <p ng-class="result" style="padding: 15px; margin: 0;">{{ resultMessage }}</p>
                </div>
            </div>
        </div>
    </div>
              </div>
            </div>
       </div>
            

       <div class="container-fluid" id="footid" style="background-color:#fff; margin-top:213px; height:auto;">
            <footer class="row" >
              <div class="col-xs-6 col-md-4"></div>
              <div class="col-xs-6 col-md-4">
                <div id="forcenter"></div>
                <a href="index.html"><div id="logofootimg"></div></a>
                <p id="footp"> Design/Build by WangZiyi Welcome to contact me^-^</p>
               </div>
              <div class="col-xs-6 col-md-4"></div>
            </footer>
       </div>
             
  </body>
  
</html>



<!--<?php
    include('Mail.php');

    $recipients = 'joe@example.com';

    $headers['From']    = 'richard@example.com';
    $headers['To']      = 'joe@example.com';
    $headers['Subject'] = 'Test message';

    $body = 'Test message';

    $smtpinfo["host"] = "smtp.server.com";
    $smtpinfo["port"] = "25";
    $smtpinfo["auth"] = true;
    $smtpinfo["username"] = "smtp_user";
    $smtpinfo["password"] = "smtp_password";


    // Create the mail object using the Mail::factory method
    $mail_object =& Mail::factory("smtp", $smtpinfo); 

   ?>-->

<?php
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>




