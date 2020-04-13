<?php
function getBlogs($path) {
	
	$blogs = [];
	$i=0;

	$handle = opendir($path); //this opens the directory
	while (false !== ($entry = readdir($handle))) { // this goes through until it reaches the bottom of the dir
		if ($entry != "." && $entry != "..") { //this REQUESTs rid of the dots
			$blog = new blog($entry,$path);
			$blogs[$i] = $blog;
			$i++;
		}
	}
	
	return $blogs;
}
?>