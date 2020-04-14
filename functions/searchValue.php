<?php
function searchValue($blog,$search) {
	$count = 0;
	$count = $count + 2*substr_count($blog->date,$search);
	$count = $count + 5*substr_count($blog->title,$search);
	$count = $count + 5*substr_count($blog->author,$search);
	$count = $count + 5*substr_count($blog->category,$search);
	$count = $count + 1*substr_count($blog->content,$search);
	
	$search = explode(" ",$search);
	
	foreach ($search as $number => $word) {
		$count = $count + 0.2*substr_count($blog->date,$word);
		$count = $count + 0.5*substr_count($blog->title,$word);
		$count = $count + 0.5*substr_count($blog->author,$word);
		$count = $count + 0.5*substr_count($blog->category,$word);
		$count = $count + 0.1*substr_count($blog->content,$word);
	}
		
	return $count;	
}

?>