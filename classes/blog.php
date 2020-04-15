<?php
class blog {
	//properties
	public $date;
	public $title;
	public $author;
	public $category;
	public $image;
	public $imageName;
	public $content;
	public $file;
	//methods
	function __construct($fileName,$path) {
			
	$path = $path."/".$fileName;
	
	$handle = opendir($path);
	
	while (false !== ($entry = readdir($handle))) { // this goes through until it reaches the bottom of the dir
		if ($entry != "." && $entry != "..") { //this REQUESTs rid of the dots
			if (strpos($entry,"txt")){
				$text = $path."/".$entry;
				$fid = fopen($text,"r"); //opens the txt document with the blog
				while(!feof($fid)) {
					$content = $content.fgets($fid);
				}					
	
			} elseif (strpos($entry,"jpg")){	
				$image = $path."/".$entry;
				$imageName = $entry; // sets the name for the image for the blog
			}
		}
	}
		
		list($this->date,$this->author,$this->title,$this->category) = explode("-", $fileName);
		$this->image = $image;
		$this->imageName = $imageName;
		$this->content = $content;
		$this->file = $fileName;
	}
}
?>