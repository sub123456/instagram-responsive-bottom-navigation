<!DOCTYPE html>
<html>
<head>

 <title>Instagram</title>
 
 <meta charset="utf-8">
  
   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!----add icon link----> 
  
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 
 <!----add jquery link----> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  
 
 <style>
  *{
	  margin:0;
	  padding:0;
	  box-sizing:border-box;
	  
  }
  .main-container{
	  width:100%;
	  max-width:768px;
	  margin:auto;
	  height:100%;
	  
   }
	   
  .nav-top{
	  
	  width:100%;
	  max-width:768px;
	  margin:auto;
	  top:0;
	  position:fixed;
	   
  }
  .nav-top ul{
	  
	  list-style-type:none;
	  margin:0;
	  padding:0;
	  overflow:hidden;
	  height:50px;
	  background-color:#f0f0f0;
	  
  }
  li{
	  float:left;
  }
  .nav-start{
	  
	  width:15%;
	  
  }
  .nav-img{
	  
	  width:70%;
	  
  }
  .nav-end{
	  
	  width:15%;
	  
  }
  li a{
	  display:block;
	  text-decoration:none;
	  text-align:center;
	  line-height:50px;
	  color:#ccc;
	  cursor:pointer;
	 
  }
  
  
  li a img{
	  
	  width:100px;
	  height:50px;
  }
  
  .container{
	  
	  display:none;
	  
  }
  
  .container.actives{
	  
	  display:inherit;
	  width:768px;
	  margin:auto;
	  height:100%;
	  top:50px;
	  position:fixed;
	  background-color:white;
	  border-left:1px solid #eee;
	  border-right:1px solid #eee;
	  
	  
  }
   p{
	  
	  text-align:center;
	  margin-top:20px;
	  font-size:25px;
  }
  .nav-bottom{
	  
	  width:100%;
	  max-width:768px;
	  position:fixed;
	  margin:auto;
	  bottom:0;
	  
	 
  }
  .nav-bottom ul{
	  
	  list-style-type:none;
	  margin:0;
	  padding:0;
	  overflow:hidden;
	  height:50px;
	  background-color:#f0f0f0;
	  
  }
  .nav-bottom li{
	  float:left;
	  width:20%;
	
  }
  .nav-bottom li a{
	  display:block;
	  text-decoration:none;
	  text-align:center;
	  line-height:50px;
	  color:#ccc;
	  cursor:pointer;
	 
  }
  .tab.active{
	  
	  color:black;
  }
  
</style>
</head>
<body>
   
  <div class="main-container">
 
  <div class="nav-top">
  
   <ul>
   
    <li class="nav-start"><a><i class="fas fa-camera" style="color:black;"></i></a></li>
	
    <li class="nav-img"><a><img src="icon/instagram_name.png"/></a></li>
	
    <li class="nav-end"><a><i class="fas fa-location-arrow" style="color:black;"></i></a></li>
   
   </ul>
   
  </div>
  
  <div id="Home" class="container actives">
      
     <p>Home</p>	  
      
  </div>
  
  <div id="Search" class="container">
   
       <p>Search</p>
	   
   </div>
  
  <div id="Upload" class="container">
        
		 <p>Upload</p>	
		 
  </div>
  
  <div id="Users" class="container">
      
	   <p>Users</p>	
	   
  </div>
  
  <div id="Profile" class="container">
      
	   <p>Profile</p>	

  </div>
  
  
  <div class="nav-bottom">
  
    <ul>
	  <li><a class="tab active"  href="Home"><i class="fas fa-home"></i></a></li>
	  
	 <li><a class="tab"  href="Search"><i class="fas fa-search"></i></a></li>
	 
     <li> <a class="tab" href="Upload" > <i class="fas fa-plus"></i></a></li>
	 
     <li><a class="tab" href="Users"><i class="fas fa-heart"></i></a></li>
	 
     <li><a class="tab" href="Profile"><i class="fas fa-user"></i></a></li>
   
	
	</ul>
  
  </div>
  
 
 </div>
  
  
   <script>
   
     $(document).ready(function(){
		 
		 push = false;
			
		$('ul li a').click(function(){
			
			$(".tab").removeClass("active");
			
		    $(this).addClass("active");
				
           	$(".container").removeClass("actives");
			
			var contentId = $(this).attr("href");
			
			
			$('.container[id="'+contentId+'"]').addClass("actives");
			
			if(!push)
				
			history.pushState({}, '', contentId);
		   
		    push = false;
			
			return false;
		   
		}); 
		
	  
	   $(window).on("popstate", function() {
		   
		 push = true;
		 
		var h = (window.location.href.indexOf("/") > -1) ? window.location.href.split("/").pop() : false;
			
		if(h == 'home.php') {
					
	 	$('ul li a[href="Home"]').click();
				
				
		} else {
				
			$('ul li a[href="'+h+'"]').click();
				
			
			}
			
		});
		
		
 
    
   });
    
</script>
    
</body>
</html> 
		
