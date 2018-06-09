

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
        <a class="nav-link active" href="#">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
  </div>
</nav> 
<form method="post" action="categoriesdetail.php">
<div class="container">
  <div class="row">
    
    <input type="submit" value="Category 1" name="category" id="firstBtn"  class="btn btn-primary btn-lg btn-block">
    <input type="submit" value="Category 2" name="category" class="btn btn-primary btn-lg btn-block">
    <input type="submit" value="Category 3" name="category" class="btn btn-primary btn-lg btn-block">
    <input type="submit" value="Category 4" name="category" class="btn btn-primary btn-lg btn-block">
    <input type="submit" value="Category 5" name="category" class="btn btn-primary btn-lg btn-block">
    
  </div>
</div>
</form>




<?php 
// $sql = "SELECT id, title, category, opinion FROM posts";
// $result = $connection->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       if ($row['category'] == $_POST['category1']){
//         echo $row['title'] . '<br/>';
        
//       }

//     }
// }
// $connection->close();
?>

</body>
</html>