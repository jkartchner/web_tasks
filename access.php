<?php

/*----------access.php-------------*/
/* checks if already logged in     */
/* if so, no html displayed - valid*/
/* if not, shows login page and    */
/* posts, compares stored hash,    */
/* and opens a session.            */
/*---------------------------------*/

    //ini_set('display_errors', 'On'); // this sets script to print errors to the screen
    //error_reporting(E_ALL | E_STRICT);

    // some code to generate user stats
    //ASSIGN VARIABLES TO USER INFO
    $time = date("M j G:i:s Y");
    $ip = getenv('REMOTE_ADDR');
    $userAgent = getenv('HTTP_USER_AGENT');
    $referrer = getenv('HTTP_REFERER');
    $query = getenv('QUERY_STRING');
     
    //COMBINE VARS INTO OUR LOG ENTRY
    $msg = "IP: " . $ip . "\nTIME: " . $time . "\nREFERRER: " . $referrer . "\nSEARCHSTRING: " . $query . "\nUSERAGENT: " . $userAgent;

	// global variable for correct login bool
	$is_valid_username = true;
     
     // this is the function declaration--not an invocation; can appear in middle of script
    function writeToLogFile($msg) {
     $today = date("Y_m_d");
     $logfile = $today."_log.txt";
     $dir = 'logs';
     $saveLocation=$dir . '/' . $logfile;
     if  (!$handle = @fopen($saveLocation, "a")) {
          exit;
     }
     else {
          if (@fwrite($handle,"$msg\r\n\n") === FALSE) {
               exit;
          }
   
          @fclose($handle);
     }
}

//put sha1() encrypted password here - example is 'hello'
/*$str = "jkartchner@pnalaw.com";
	echo "jkartchner@pnalaw.com: " . sha1($str) . "<br>"; 
$str1 = "scoobysnacks68";
	echo "scoobysnacks68: " . sha1($str1) . "<br>";*/

// session_start assigns a unique random number based on information of the unique connection for this computer
// when a session is saved and not yet destroyed, this id can be retrieved from the client via cookie and continue
session_start(); // creates a session or resumes the current one based on session identifier passed via POST, GET, or cookie
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false; // note: the $_SESSION variable is a server-wide global variable, like $_SERVER
    $_SESSION['lastbug'] = "none";
}

// if user fills in the username and password field and clicks login....
if (isset($_POST['password']) && isset($_POST['username']))  // this ensures the fields have been filled out before submit button
{
   //echo sha1($_POST['password']); // for debugging only; to be removed later
   //echo "scoobysnacks68: " . sha1($_POST['password']) . "<br>";
   $accounts = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/tasks/authaccounts.xml'); // loads an array variable with xml password file
   for($i = 0; $i < count($accounts); $i++)
   {
      $username = $accounts->account[$i]->username;
      $password = $accounts->account[$i]->password;
	  //$email = $accounts->account[$i]->email;
      $privilege = $accounts->account[$i]->privilege;
      $database = $accounts->account[$i]->database;
	  //echo "database version of pass: " . $password . "<br>";  // this is all debugging info; to be removed later
	  //echo "hash function version of input pass: " . hash('sha1', $_POST['password']) . "<br>";
	  //echo "sha1 function version of input pass: " . sha1($_POST['password']) . "<br>";
      if (hash('sha1', $_POST['username']) == $username && hash('sha1', $_POST['password']) == $password) // compares input hashed with stored hash
      {
         $_SESSION['loggedIn'] = true; // if so, validates the session variable
	 	 $_SESSION['username'] = sha1($_POST['username']);
	 	 //$_SESSION['password'] = $_POST['password'];
		 //$_SESSION['email'] = $email;
	 	 $_SESSION['privilege'] = "$privilege";
         $_SESSION['database'] = "$database"; 
         //CALL OUR LOG FUNCTION
	 	 $msg .= "\nDatabase: " . $database;
	 	 //writeToLogFile($msg);  // invocation of the function call above
		  $is_valid_username = true;
	 	 break;
      } 
   }
   if(!$_SESSION['loggedIn'])
   {
      $is_valid_username = false;
   }
} 
if (!$_SESSION['loggedIn']):  ?>

<html>
	<style>
	@import url(http://fonts.googleapis.com/css?family=Bree+Serif);

/*******************
SELECTION STYLING
*******************/

::selection {
	color: #fff;
	background: #f676b2; /* Safari */
}
::-moz-selection {
	color: #fff;
	background: #f676b2; /* Firefox */
}

/*******************
BODY STYLING
*******************/

* {
	margin: 0;
	padding: 0;
	border: none;
	outline: none;
}

body {
	background: url('http://www.demo.amitjakhu.com/login-form/images/bg.png');
	background-image:url(https://giramondopodroze.files.wordpress.com/2012/05/perito_moreno_glacier_argentina10_high_resolution_desktop_2985x2213_wallpaper-1018814.jpg);
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	font-weight:300;
	text-align: left;
	text-decoration: none;
	height: 500px;
}
	

#wrapper {
	/* Center wrapper perfectly */
	width: 300px;
	height: 400px;
	margin: 70px auto;
}

/* Download Button (Demo Only) */
.download {
	display: block;
	position: absolute;
	float: right;
	right: 25px;
	bottom: 25px;
	padding: 5px;
	
	font-weight: bold;
	font-size: 11px;
	text-align: right;
	text-decoration: none;
	color: rgba(0,0,0,0.5);
	text-shadow: 1px 1px 0 rgba(256,256,256,0.5);
}

.download:hover {
	color: rgba(0,0,0,0.75);
	text-shadow: 1px 1px 0 rgba(256,256,256,0.5);
}

.download:focus {
	bottom: 24px;
}

/*
.gradient {
	width: 600px;
	height: 600px;
	position: fixed;
	left: 50%;
	top: 50%;
	margin-left: -300px;
	margin-top: -300px;
	
	background: url(http://www.demo.amitjakhu.com/login-form/images/gradient.png) no-repeat;
}
*/

.gradient {
	/* Center Positioning */
	width: 600px;
	height: 600px;
	position: fixed;
	left: 50%;
	top: 50%;
	margin-left: -300px;
	margin-top: -500px;
	z-index: -2;
	
	/* Fallback */ 
	background-image: url(http://www.demo.amitjakhu.com/login-form/images/gradient.png); 
	background-repeat: no-repeat; 
	
	/* CSS3 Gradient */
	background-image: -webkit-gradient(radial, 0% 0%, 0% 100%, from(rgba(213,246,255,1)), to(rgba(213,246,255,0)));
	background-image: -webkit-radial-gradient(50% 50%, 40% 40%, rgba(213,246,255,1), rgba(213,246,255,0));
	background-image: -moz-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));
	background-image: -ms-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));
	background-image: -o-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));
}

/*******************
LOGIN FORM
*******************/

.login-form {
	width: 300px;
	margin: 0 auto;
	position: relative;
	
	background: #f3f3f3;
	border: 1px solid #fff;
	border-radius: 5px;
	
	box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
}

/*******************
HEADER
*******************/

.login-form .header {
	padding: 40px 30px 30px 30px;
}

.login-form .header h1 {
	font-family: 'Bree Serif', serif;
	font-weight: 300;
	font-size: 28px;
	line-height:34px;
	color: #414848;
	text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
	margin-bottom: 10px;
}

.login-form .header span {
	font-size: 11px;
	line-height: 16px;
	color: #678889;
	text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
}

/*******************
CONTENT
*******************/

.login-form .content {
	padding: 0 30px 25px 30px;
}

/* Input field */
.login-form .content .input {
	width: 244px;
	padding: 15px 25px;
	
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	font-weight: 400;
	font-size: 14px;
	color: #9d9e9e;
	text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
	
	background: #fff;
	border: 1px solid #fff;
	border-radius: 5px;
	
	box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
	-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
	-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
}

/* Second input field */
.login-form .content .password, .login-form .content .pass-icon {
	margin-top: 25px;
}

.login-form .content .input:hover {
	background: #dfe9ec;
	color: #414848;
}

.login-form .content .input:focus {
	background: #dfe9ec;
	color: #414848;
	
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
}

.user-icon, .pass-icon {
	width: 46px;
	height: 47px;
	display: block;
	position: absolute;
	left: 0px;
	padding-right: 2px;
	z-index: -1;
	
	-moz-border-radius-topleft: 5px;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-top-left-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;
}

.user-icon {
	top:153px; /* Positioning fix for slide-in, got lazy to think up of simpler method. */
	background: rgba(65,72,72,0.75) url(http://www.demo.amitjakhu.com/login-form/images/user-icon.png) no-repeat center;	
}

.pass-icon {
	top:201px;
	background: rgba(65,72,72,0.75) url(http://www.demo.amitjakhu.com/login-form/images/pass-icon.png) no-repeat center;
}

.content input:focus + div{
	left: -46px;
}

/* Animation */
.input, .user-icon, .pass-icon, .button, .register {
	transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
}

/*******************
FOOTER
*******************/

.login-form .footer {
	padding: 25px 30px 40px 30px;
	overflow: auto;
	
	background: #d4dedf;
	border-top: 1px solid #fff;
	
	box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
	-moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
	-webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
}

/* Login button */
.login-form .footer .button {
	float:right;
	padding: 11px 25px;
	
	font-family: 'Bree Serif', serif;
	font-weight: 300;
	font-size: 18px;
	color: #fff;
	text-shadow: 0px 1px 0 rgba(0,0,0,0.25);
	
	background: #56c2e1;
	border: 1px solid #46b3d3;
	border-radius: 5px;
	cursor: pointer;
	
	box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
	-moz-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
	-webkit-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
}

.login-form .footer .button:hover {
	background: #3f9db8;
	border: 1px solid rgba(256,256,256,0.75);
	
	box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
	-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
}

.login-form .footer .button:focus {
	position: relative;
	bottom: -1px;
	
	background: #56c2e1;
	
	box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
	-moz-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
	-webkit-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
}

/* Register button */
.login-form .footer .register {
	display: block;
	float: right;
	padding: 10px;
	margin-right: 20px;
	
	background: none;
	border: none;
	cursor: pointer;
	
	font-family: 'Bree Serif', serif;
	font-weight: 300;
	font-size: 18px;
	color: #414848;
	text-shadow: 0px 1px 0 rgba(256,256,256,0.5);
}

.login-form .footer .register:hover {
	color: #3f9db8;
}

.login-form .footer .register:focus {
	position: relative;
	bottom: -1px;
}
	</style>
  <head>
    <title>Glacier</title>
	<link rel="small icon" href="cloud264_16.ico" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  </head>
  <body>
	<div id="wrapper">
    <form method="post" name="login-form" class="login-form" action="">
	  <div class="header">
		<h1>Glacier</h1>
		<span>Because being really slow is exactly what you want in a web service.</span>
		  <?php if(!$is_valid_username): ?>
		  	<div>
				<span style="color:red">Invalid username or password.</span>
		  	</div>
		  <?php endif; ?>
	  </div>
	  <div class="content">
      <div> 
          <input type="text" name="username" id="username" class="input username" placeholder="Username"/>
		  <div class="user-icon"></div>
      </div>
      <div>
          <input type="password" name="password" class="input password" placeholder="Password"/>
		  <div class="pass-icon"></div>	
      </div>  
	  </div>
      <div class="footer">
          <input type="submit" name="submit" value="Login" align="center" class="button">
      </div>
    </form>
	</div>
    <div class="gradient"></div>
  </body>
</html>

<?php
exit();
endif;
?>
