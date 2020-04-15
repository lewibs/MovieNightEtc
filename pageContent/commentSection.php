<!-- coment section -->
<div class='w3-card-4 w3-margin w3-white'>
	<div class="w3-container w3-padding">
		<h4>Enjoy it? Hated it? have something you wanna say? Leave a comment</h4>
	</div>
	<div class='w3-container'>
		<form action="" method="post">
			<input type="text" name="name" placeholder="Name"> <input type="submit" value="Submit">
			<br>
			<br>
			<textarea style="width:100%" cols="60" rows ="5" name="comment"></textarea>
		</form>
	</div>
</div>


<?php
if (isset($_REQUEST['name'])){
	saveComment($_REQUEST['name'],$_REQUEST['comment'],$_REQUEST['blog']);
	$URL = getURL();
	header("Location: $URL");
}

listComments($_REQUEST['blog']);

?>

<?php
function saveComment($name,$comment,$file){
	$comment=$name."-".$comment."&";
	$fid = fopen($file."/comments.txt","a");
	fwrite($fid,$comment);
	fclose($fid);
}

function listComments($file) {
	$fid = fopen($file."/comments.txt","r");
	$comments = fread($fid,1000);
	$comments = explode("&",$comments);
	$i=0;
	foreach($comments as $set){
		$comments[$i] = explode("-",$set);
		$i++;
	}

	for ($i=0;$i<count($comments);$i++){
		for ($j=0;$j<2;$j++){
			if($j==0){
				$name = $comments[$i][$j];
			} else {
				$comment = $comments[$i][$j];
			}
		}
		echo"
		<div class='w3-card-4 w3-margin w3-white'>
			<div class='w3-container w3-padding'>
				<h5>$name</h5>
			</div>
			<div class='w3-container'>
				$comment 	 
			</div>
		</div>";
	}
}

function getURL() {
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
// Here append the common URL characters. 
$link .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 
  
// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI']; 
      
// Print the link 
return $link; 
}
?>
