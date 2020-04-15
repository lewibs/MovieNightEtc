<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="../stylesheats/radioButtons.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<?php include "../pageContent/header.html" ?>

<!-- Grid -->
<div class="w3-row">

<div class="w3-col l2">
<?php include "../pageContent/advertisement.html" ?>
</div>

<div class="w3-col l8">
<?php include "../functions/readBlog.php"; readBlog($_REQUEST['blog'],1); ?>
<?php include "../pageContent/commentSection.php" ?>
</div>

<div class="w3-col l2">
<?php include "../pageContent/advertisement.html" ?>
</div>


  
<!-- END Grid -->
</div>

</div>

<?php include "../pageContent/footer.html" ?>

</body>
</html>