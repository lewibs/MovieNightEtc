<?php
function readBlog($blog,$type) {
	if ($type === 0) {
	
	$handle = opendir($blog->path);
		while (false !== ($entry = readdir($handle))) {
		if ($entry != "." && $entry != "..") {
			if (strpos($entry,"txt")){
				$text = $blog->path."/".$entry;
				$fid = fopen($text,"r"); //opens the txt document with the blog
				$content = fgets($fid)." ".fgets($fid)." ".fgets($fid); //gets the first three lines
				$date = $blog->date;
				$author = $blog->author;
				$title = $blog->title;
				$category = $blog->category;
				$blogPath = $blog->path; //gets path for next thing
			
			} elseif (strpos($entry,"jpg")){	
				$image = $blog->path."/".$entry;
				$imageName = $entry; // sets the path for the image for the blog
			}
		} 							
	}
	echo "
		<!-- Blog entry -->
		  <div class='w3-card-4 w3-margin w3-white'>
		  <img src='$image' alt='$imageName' style='width:100%'>
			<div class='w3-container'>
			  <h3><b>$title</b></h3>
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
	} elseif ($type === 1) {
		$path = $_REQUEST['blogPath'];
		$dir=str_replace("/","",strrchr($path,"/")); // gets the name of the directory
		$handle = opendir($path); //this opens the directory
	
	
		while (false !== ($entry = readdir($handle))) { // this goes through until it reaches the bottom of the dir
			if ($entry != "." && $entry != "..") { //this REQUESTs rid of the dots
				if (strpos($entry,"txt")){
					$text = $path."/".$entry;
					$fid = fopen($text,"r"); //opens the txt document with the blog
					list($date,$author,$blogTitle,$category) = explode("-", $dir); // gets information about the blog
				
					while(!feof($fid)) {
						$content = $content.fgets($fid);
					}					
		
				} elseif (strpos($entry,"jpg")){	
					$image = $path."/".$entry;
					$imageName = $entry; // sets the path for the image for the blog
				}
			}
		}

	
		echo"
		<!-- Blog entry -->
		  <div class='w3-card-4 w3-margin w3-white'>
		  <img src='$image' alt='$imageName' style='width:100%'>
			<div class='w3-container'>
			  <h3><b>$blogTitle</b></h3>
			</div>
			
			<div class='w3-container'>
			  <p>$content</p>
			  <div class='w3-row'>
			<div class='w3-col m8 s12'>
			  <h5>$author on $category, <span class='w3-opacity'>$date</span></h5>
				</div>
			  </div>
			</div>
		  </div>";
	}
}
?>