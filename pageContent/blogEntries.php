<?php

	include "../functions/getBlogs.php";
	include "../functions/readBlog.php";
	include "../functions/searchValue.php";
	include "../functions/sortArrayByArray.php";
	include "../classes/blog.php";
	
	$blogs = getBlogs("../posts");
	$sortArray = [];

	if (isset($_REQUEST['sort'])){
		for ($i=0;$i<count($blogs);$i++) {
		$sortArray[$i] = searchValue($blogs[$i],$_REQUEST['sort']);
		}
	}
	
	$blogs=sortArrayByArray($blogs,$sortArray);
	
	for ($i=0;$i<count($blogs);$i++){
	readBlog($blogs[$i],0);
	}
?>

