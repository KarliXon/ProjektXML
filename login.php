<?php 
	$operation = $_GET["op"];
	$xmlFile = simplexml_load_file("users.xml"); 			
	$xmlLocalCopy = new SimpleXMLElement($xmlFile->asXML()); 
		
	if($operation == "login")
	{
	$username = $_GET["username"];
	$password = $_GET["password"];
		foreach ($xmlLocalCopy as $Accounts) 
			{ 
			   $name = $Accounts->username;
			   $pass = $Accounts->password;
			   if($username == $name && $password == $pass)
				{
				echo "Success%Naslovnica.html"; 
				}
			}
	}
	else
	{
		echo "Fail"; 
	}
?>
