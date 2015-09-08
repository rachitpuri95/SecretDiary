<?php include("login.php") ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    .italic {
   /* font-family: 'Goudy Old Style', Garamond, 'Big Caslon', 'Times New Roman', serif;
    */font-size:2em;

   
    }
    
     #topcontainer {
     background-image:url("back.jpeg");
     height: 1000px;
     position: relative;
     top:-20px;
     width: 100%;
     background-size:cover; 
     
    }
    
    .center {
    margin:0 auto;
    
    }
    
    #toprow {
    text-align:center;
    margin-top: 200px;
    color: #f0edde;
    
    
    }
    .bold {
    font-weight: bold;
   
    
    
  }
  
  #errorbox {
  
  display:none;
  }
  .down {
   position: relative;
   top: 20px;
  
  }
    
    .downmore {
    position:relative;
    top: 30px;
    
    }
    
   
    
    .center {
    text-align: center; 
    
    }
    
    .title {
    
    margin-top: 30px; 
    font-size: 300%;
    }
    
    
  	.marginTop {
  	
  	margin-top:30px;
  	}
 
 
 
 
 
 #footer {
 background-color: #B0D1F8;
 width: 100%;
 
 }
 
 .movedown {
 
 position: relative; 
 top: 50px;
 }
 .downmost {
 
 margin-top: 50px;
 }
 
 
 .downking {
 margin-top: 30px;
 margin-bottom: 0px;
 }
 .marginBottom {
 
 margin-bottom: 30px;
 }
 
 
 .padtop {
 padding-top: 150px;
 
 }
 
 .tops {
 
 margin-top:20px;
 }
 

    </style>
  </head>
  <body> 
  	
  	<div  class="navbar-fixed-top navbar navbar-default" id="navb"> 
    	<div class="container "> 
    	
    	
    	
    		<div class="navbar-header">
    			<a class="navbar-brand italic"> 
    			Secret Diary
    			</a>
    			
    			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
    			 data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         	</div> 
         	 
          <div class="collapse navbar-collapse "> 
         	 
         	 
         	<form class="navbar-form navbar-right " method="post"> 
    
         	 <div class="form-group"> 
         	
         	  <input type="email" name="loginemail" placeholder="Email" class="form-control"/> 
         	 </div> 
         	 
         	 <div class="form-group"> 
         	   <input type="password" name="loginpassword" placeholder="Password" class="form-control" /> 
         	 </div> 
         	
         	   <input type="submit" name="submit" id="login" class="btn btn-success " value="Log In!"/> 
         	
         	 
         	 
         	 </form>
         	 
         	</div> 
    	</div> 	
    	</div> 
    </div>
    
    
    
    
    
    
    <div class="container contentContainer" id="topcontainer"> 
    
		<div class="row">
		
		<div  class="col-md-6 col-md-offset-3" id="toprow">
		
		<h2 class="down">Secret Diary</h2> 
		<p class="lead down" > A Personal Diary to store all your secrets!</p> 
	
	
	
	

	<p class="bold downking "> Interested? Sign up Below  </p> 	 
	

	<?php 
	
	 if($error)
	{
	
		echo '<div class="alert alert-danger down">'.addslashes($error).'</div>';
	
	}
	
	if($message)
	{
	
		echo '<div class="alert alert-success down">'.addslashes($message).'</div>';
	
	}
	
	
	?> 
	

	
	<form class=" down" method="post"> 
	<div class="form-group tops "> 
	<label for="email"> Email Address</label> 
	<input type="email" name="email" class="form-control " placeholder="Your email"/> 	
	</div> 	
	
	<div class="form-group tops "> 
	<label for="password"> Password </label> 
	<input type="password" name="password" class="form-control " placeholder="Password"/> 	
	</div> 	
	
	
<input type="submit" name="submit"  id ="signup" class="btn btn-success" value="Sign Up!">
		</div> 
			
		
		</div> 

    
    
   
    </div>  
    
    

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script> 

var wheight = $(window).height();
wheight=wheight-40;
	$(".contentContainer").css("min-height",wheight);

 
      
    </script> 
  </body>
</html>