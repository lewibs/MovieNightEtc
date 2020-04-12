<?php

	include "../functions/getBlogs.php";
	include "../functions/readBlog.php";
	
	$blogs = getBlogs("../posts");

	//Sort thoes hoes

	readBlog($blogs[0],0);
?>

