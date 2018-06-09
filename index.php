<?php include_once('db.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>User Posts</title>
	<link rel="stylesheet" type="text/css" href="css/darklybootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/project.css">
</head>
<body>
	<!-- NAV BAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#">Opinions</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newpost.php">New Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categories.php">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
  </div>
</nav>


<!-- JUMBOTRON -->
 <?php
$stmt = $pdo->query("SELECT * FROM posts");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = '<ul>';
foreach ($rows as $row) {
  ?>
   <div class="jumbotron">
       <h1 class="display-3"><?php echo $row['title']; ?></h1>
       <p class="lead"><?php echo $row['category'] . ' Post No: '. $row['id']; ?></p>
       <hr class="my-4">
       <p><?php echo $row['opinion']; ?></p>
       <p class="lead">
     <a class="btn btn-primary btn-lg" href="#" role="button">Edit Post</a>
   </p>
       </div>

  <?php
}
?>






</body>
</html>