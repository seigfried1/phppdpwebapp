<?php include_once('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
</head>
<link rel="stylesheet" type="text/css" href="css/darklybootstrap.css">
<link rel="stylesheet" type="text/css" href="css/categories.css">
<body>
  <!-- NAV BAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="index.php">Opinions</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newpost.php">New Post <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="categories.php">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
  </div>
</nav> 

<br/><br/>
<br/><br/>

<?php 
if(isset($_POST['category'])){
$stmt = $pdo->query("SELECT * FROM posts WHERE category='$_POST[category]'");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="jumbotron">       

<?php
foreach ($rows as $row) {
  echo '<br/><br/><br/>';
  echo '<p class="lead"><b>Title: '.htmlentities($row['title']). '</b></p>';
  echo '<hr class="my-4">';
  echo '<p>Category: '. $row['category']. '</p>';
  echo '<p>Opinion: '. $row['opinion']. '</p>';

}
}
 ?>
</div>