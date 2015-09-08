<?php 

session_start();

if($_GET['logout'] ==1 AND $_SESSION['id'])
{

session_destroy();

$message= "You have been logged out, Have a nice day!";
$_GET['logout']="";

session_start();
}

include("connection.php");

if($_POST['submit']=="Sign Up!")
{
	if($_POST['email']=="")
	{
		$error.= "</br> Please enter your email";	
	}
	
	else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
	{ 
  		$error.= "</br> Please enter a valid email" ;
	} 
	
	if($_POST['password']=="")
	{
		$error.= "</br> Please enter a password";	
	}
	
	else 
	{
		if(strlen($_POST['password']) < 8)
		{
		$error.= "</br>  Please enter a password which is atleast 8 charecters" ; 
		
		}
	
		if(!preg_match('`[A-Z]`', $_POST['password']))
		{
			
			$error.= "</br> Please include atleast 1 capital letter in your password"; 
		}
	
	
	}
	
	
	if($error)
	{
	$error ="there were error in your signup details:".$error ;
	
	}
	
	else 
	{
		$link = mysqli_connect("localhost","cl52-example-c4j", "sy3!kgg/9" , "cl52-example-c4j");
		
		if(mysqli_connect_error())
		{
			die("Couldn't connect to database"); 
		}
		
		$query ="SELECT email FROM users";
		$flag = 0; 
		if($result =  mysqli_query($link, $query))
		{
			while($row = mysqli_fetch_array($result))
			{
				if($row[0]== $_POST['email'])
				{	
					$flag = 1; 
				}
			
			} 
			
			if($flag==1)
			{
			echo "This email is already registered, do you want to Log in?"; 
			
			}
			else
			{
		
$query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
			mysqli_query($link, $query);
			
			$_SESSION['error'] ="";	
			$_SESSION['id']= mysqli_insert_id($link);
			
			
			
		header("Location:mainpage.php");
			}
			
		}		
	
	}

}


if($_POST['submit']=="Log In!")
{	



	$query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['loginemail'])."'";
	$result=mysqli_query($link, $query);
	
	if(mysqli_num_rows($result)==1)
	{
		$row =mysqli_fetch_array($result);
		
		
		if($row[2]==md5(md5($_POST['loginemail']).$_POST['loginpassword']))	
		{
			echo "log in compete";
			
			$_SESSION['id']= $row[3];
		
			
			header("Location:mainpage.php");
		
		}
		else
		{
		
		$error ="The username and/or password is Invalid";
		
		}
	
	
	}
	else 
	{
	
		$error="the username and/or password is Invalid";
	
	
	}
	

}





?> 
