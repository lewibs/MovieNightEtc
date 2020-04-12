<?php
function getBlogs($path) {
	class blog {
		//properties
		public $date;
		public $title;
		public $author;
		public $category;
		public $path;
		//methods
		function __construct($fileName,$path) {
			list($this->date,$this->author,$this->title,$this->category) = explode("-", $fileName);
			$this->path = $path."/".$fileName;
		}
	}
	
	$blogs = [];
	$i=0;

	$handle = opendir($path); //this opens the directory
	while (false !== ($entry = readdir($handle))) { // this goes through until it reaches the bottom of the dir
		if ($entry != "." && $entry != "..") { //this REQUESTs rid of the dots
			$entry;
			$blog = new blog($entry,$path);
			$blogs[$i] = $blog;
			$i++;
		}
	}
	
	return $blogs;
}
?>