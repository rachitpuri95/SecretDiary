<?php 
session_start();
include("connection.php");
 $query="SELECT * FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
 
$result = mysqli_query($link, $query);
 $row = mysqli_fetch_array($result);
 $diary=$row["diary"];
 
 
 
 ?> 

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
    margin-top: 100px;
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
    	
    	
    	
    		<div class="navbar-header pull-left">
    			<a class="navbar-brand italic"> 
    			Secret Diary
    			</a>
    			
    			
         	</div> 
         	 
         
         	 
         	 <ul class="navbar-nav nav pull-right">
         	 
         	 <li><a href="index.php?logout=1">Log Out</a>  </li>
         	 
         	 </ul> 
         	
         	 
         	</div> 
    	</div> 	
    	</div> 
    </div>
    
    
    
    
    
    
    <div class="container contentContainer" id="topcontainer"> 
    
		<div class="row">
		
		<div  class="col-md-6 col-md-offset-3" id="toprow">
			
			
			<textarea class="form-control"> <?php echo $diary; ?> </textarea>
				
	
		</div> 
			
		
		</div> 

    
    
   
    </div>  
    
    

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script> 

var wheight = $(window).height();
wheight=wheight-500;
	$(".contentContainer").css("min-height",wheight-100);

 $("textarea").height($(window).height()-180);
      
      
      $("textarea").keyup(function() {
     $.post("updatediary.php",{diary:$('textarea').val()});
        
      });
    
      
      
      
    </script> 
  </body>
</html>