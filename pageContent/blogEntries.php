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
						$blogPath = $path."/".$entry; //gets path for next thing
					
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
						  <p><a href='blogPost.php?blogPath=$blogPath' class='w3-button w3-padding-large w3-white w3-border'><b>READ MORE »</b></a></p>
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