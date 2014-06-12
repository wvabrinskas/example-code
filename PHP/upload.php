<?php

 
$filename = $_FILES["package"]["name"];
$ext = end(explode('.', $filename));

if (((($_FILES["ss"]["type"] == "image/jpeg")
|| ($_FILES["ss"]["type"] == "image/jpg")
|| ($_FILES["ss"]["type"] == "image/png"))
&& ($_FILES["ss"]["size"] < 1000000))
&& ($ext == "zip")
|| ($ext == "bz2")
|| ($ext == "rar"))
  {
  if ($_FILES["ss"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["ss"]["error"] . "<br />";
    }
  else
    {
    if ((file_exists("./uploads/" . $_FILES["ss"]["name"])) || (file_exists("./uploads/" . $_FILES["package"]["name"])))
      {
      echo $_FILES["ss"]["name"] . " already exists. ";
	  echo $_FILES["package"]["name"] . " already exists. ";
      }
    else
      {
	  $location = $_SERVER['DOCUMENT_ROOT'];
 
include ($location . '/wordpress/wp-config.php');
include ($location . '/wordpress/wp-load.php');
include ($location . '/wordpress/wp-includes/pluggable.php');		
global $current_user ,$current_email;
				get_currentuserinfo();
		
				
	  	     

		$Text = $_POST["packagename"];
		$Text_ver = $_POST["packagever"];
		$descr = $_POST["description"];
		$author = $current_user->user_login; 
		
		$email = $current_user->user_email;

		$today = date("l dS \of F Y h:i:s A");

		
		$ourFileName = "./uploads/" . $Text . ".txt";
		$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
		$stringData = $today . "\r";
		fwrite($ourFileHandle, $stringData);
		$stringData = "\r";
		fwrite($ourFileHandle, $stringData);
		$stringData = "Package Name: " . $Text . "\r";
		fwrite($ourFileHandle, $stringData);
		$stringData = "Package Version: " . $Text_ver . "\r";
		fwrite($ourFileHandle, $stringData);
		$stringData = "Description: " . $descr . "\r";
		fwrite($ourFileHandle, $stringData);
		$stringData = "Author: " . $author . "<" . $email . ">" . "\r";
		fwrite($ourFileHandle, $stringData);
		$stringData = "\r";
		fwrite($ourFileHandle, $stringData);
		$stringData = "Screenshot: " . $_FILES["ss"]["name"] . "\r";
		fwrite($ourFileHandle, $stringData);
		$stringData = "Package Uploaded: " . $_FILES["package"]["name"] . "\r";
		fwrite($ourFileHandle, $stringData);
		fclose($ourFileHandle);
		
		$subject = "Package Uploaded";
		$body = $author . " " . "has uploaded a package on " . $today . "\r" . "\r" . "Package Name: " . $Text . "\r" . "Version: " . $Text_ver . "\r" . "Description: " . $descr . "\r" . "\r" . "Email: " . $email;
		
	require_once 'lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('wvabrinskas@gmail.com')
  ->setPassword('');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($subject)
  ->setFrom(array('william@theirepo.com' => 'William <DO-NOT-REPLY>'))
  ->setTo(array('william_vab@live.com'))
  ->setBody($body);

$result = $mailer->send($message);

		move_uploaded_file($_FILES["ss"]["tmp_name"], "./uploads/" . $_FILES["ss"]["name"]);
	  	move_uploaded_file($_FILES["package"]["tmp_name"], "./uploads/" . $_FILES["package"]["name"]);
	
		header("Location: http://www.theirepo.com/uploads.html?submitted=yes"); 
      }
    }
  }
else
  {
  echo "Invalid Entry";
  }
	
?>
