<?php

	include "../functions/getBlogs.php";
	include "../functions/readBlog.php";
	include "../functions/searchValue.php";
	include "../functions/sortArrayByArray.php";
	include "../classes/blog.php";
	
	$blogs = getBlogs("../posts");
	$sortArray = [];
	$i=0;
	foreach ($blogs as $number => $blog) {
		echo $sortArray[$i] = $blog->date;
		$i++;
	}
	$blogs=sortArrayByArray($blogs,$sortArray);
	

	if (isset($_REQUEST['sort'])){
		$sortArray = [];
		for ($i=0;$i<count($blogs);$i++) {
		$sortArray[$i] = searchValue($blogs[$i],$_REQUEST['sort']);
		}
		$blogs=sortArrayByArray($blogs,$sortArray);
	}
	
	for ($i=0;$i<count($blogs);$i++){
	readBlog($blogs[$i],0);
	}
?>

