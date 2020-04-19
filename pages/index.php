<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">


<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

.header {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  background-color: white;
  color: white;
  text-align: center;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: white;
  color: white;
  text-align: center;
}
</style>

<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<?php include "../pageContent/header.html" ?>

<!-- Grid -->
<div class="w3-row">

<!-- Introduction menu -->
<div class="w3-col l3">

  <?php include "../pageContent/aboutUs.php" ?>
  
<!-- END Introduction Menu -->
</div>

<!-- Blog entries -->
<div class="w3-col l7 s12">
<?php include "../pageContent/searchBar.php" ?>
<?php include "../pageContent/blogEntries.php" ?>
<!-- END BLOG ENTRIES -->
</div>

<!-- right side advertisment-->
<div class="w3-col l2">
<?php include "../pageContent/advertisement.html" ?>
</div>
<!-- END right side advertisment -->


<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<?php //include "../pageContent/footer.html" ?>

</body>
</html>
