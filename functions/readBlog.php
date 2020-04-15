<?php
function readBlog($blog,$type) {
	
	if ($type === 0) {
	
		$content = substr($blog->content, -strlen($blog->content), strlen($blog->content)/4);
		
		if($blog->comments==null){
			$comments = 0;
		}else{
			$comments = $blog->comments;
		}
		
	
	echo "
		<!-- Blog entry -->
		  <div class='w3-card-4 w3-margin w3-white'>
		  <img src='$blog->image' alt='$blog->imageName' style='width:100%'>
			<div class='w3-container'>
			  <h3><b>$blog->title</b></h3>
			  <h5>$blog->author on $blog->category, <span class='w3-opacity'>$blog->date</span></h5>
			</div>
			
			<div class='w3-container'>
			  <p>$content...</p>
			  <div class='w3-row'>
				<div class='w3-col m8 s12'>
				  <p><a href='blogPost.php?blog=$blog->file' class='w3-button w3-padding-large w3-white w3-border'><b>READ MORE »</b></a></p>
				</div>
				<div class='w3-col m4 w3-hide-small'>
				  <p><span class='w3-padding-large w3-right'><b>Comments</b> <span class='w3-badge'>$comments</span></span></p>
				</div>
			  </div>
			</div>
		  </div>";
	} elseif ($type === 1) {
		
	include "../classes/blog.php";

	$blog = new blog($blog,"../posts");
	
		echo"
		<!-- Blog entry -->
		  <div class='w3-card-4 w3-margin w3-white'>
		  <img src='$blog->image' alt='$blog->imageName' style='width:100%'>
			<div class='w3-container'>
			  <h3><b>$blog->title</b></h3>
			</div>
			
			<div class='w3-container'>
			  <p>$blog->content</p>
			  <div class='w3-row'>
			<div class='w3-col m8 s12'>
			  <h5>$blog->author on $blog->category, <span class='w3-opacity'>$blog->date</span></h5>
				</div>
			  </div>
			</div>
		  </div>";
	}
}
?>