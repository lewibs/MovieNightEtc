<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="../stylesheats/radioButtons.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Movie Night etc.</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">The movie night crew</span></p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">

<?php

	$path = "../posts";

	$handle = opendir($path); //this opens the directory
	while (false !== ($entry = readdir($handle))) { // this goes through until it reaches the bottom of the dir
		if ($entry != "." && $entry != "..") { //this REQUESTs rid of the dots
			$handleNext = opendir($path."/".$entry); //opens the dir of the dir
			while (false !== ($entryNext = readdir($handleNext))) {
				if ($entryNext != "." && $entryNext != "..") {
					if (strpos($entryNext,"txt")){
						$text = $path."/".$entry."/".$entryNext;
						
						$fid = fopen($text,"r"); //opens the txt document with the blog
						$content = fgets($fid)." ".fgets($fid)." ".fgets($fid); //gets the first three lines
						list($date,$author,$blogTitle,$category) = explode("-", $entry); // gets information about the blog
					
					} elseif (strpos($entryNext,"jpg")){	
						$image = $path."/".$entry."/".$entryNext;
						$imageName = $entryNext; // sets the path for the image for the blog
					}
				} 							
			}
			echo "
				<!-- Blog entry -->
				  <div class='w3-card-4 w3-margin w3-white'>
				  <img src='$image' alt='$imageName' style='width:100%'>
					<div class='w3-container'>
					  <h3><b>$blogTitle</b></h3>
					  <h5>$author on $category, <span class='w3-opacity'>$date</span></h5>
					</div>
					
					<div class='w3-container'>
					  <p>$content...</p>
					  <div class='w3-row'>
						<div class='w3-col m8 s12'>
						  <p><a href='https://www.google.com/' class='w3-button w3-padding-large w3-white w3-border'><b>READ MORE »</b></a></p>
						</div>
						<div class='w3-col m4 w3-hide-small'>
						  <p><span class='w3-padding-large w3-right'><b>Comments</b> <span class='w3-badge'>0</span></span></p>
						</div>
					  </div>
					</div>
				  </div>";			
		}
	}
	
?>
 
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="/w3images/avatar_g.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>About Us</b></h4>
      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
  </div><hr>
  
  <!-- Sort By -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Sort By:</h4>
    </div>	
	
	<form  method="get" name="categories" id="categories" class="w3-ul w3-hoverable w3-white">
		<p class="w3-padding-16" style="margin-left: 8px;">
			<input type="radio" name="selectedfaucet" id="radio" value="date">
			<label class="w3-large" for="radio">date</label>
		</p>
		
		<p class="w3-padding-16" style="margin-left: 8px;">
			<input type="radio" name="selectedfaucet" id="radio" value="category 1">
			<label class="w3-large" for="radio">category 1</label>
		</p>
		
		<p class="w3-padding-16" style="margin-left: 8px;">
			<input type="radio" name="selectedfaucet" id="radio" value="category 2">
			<label class="w3-large" for="radio">category 2</label>
		</p>
		
		<p class="w3-padding-16" style="margin-left: 8px;">
			<input type="radio" name="selectedfaucet" id="radio" value="category 3">
			<label class="w3-large" for="radio">category 3</label>
		</p>
		
		<p class="w3-padding-16" style="margin-left: 8px;">
			<input type="radio" name="selectedfaucet" id="radio" value="category 4">
			<label class="w3-large" for="radio">category 4</label>
		</p>
		
	</form>
	
  </div>
  <hr> 
  
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

  <script>
   $(document).ready(function() { 
   $('input[name=selectedfaucet]').change(function(){
		$('form').submit();
   });
   });
  </script>
  
  
 
  <!-- small advertisment -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>ADVERTISMENT</h4>
    </div>
    <div class="w3-container w3-white">
    <p>We call this  R E V E N U E</p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
