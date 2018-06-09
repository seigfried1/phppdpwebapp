<!DOCTYPE html>
<html>
<head>
  <title>New Post</title>
</head>
<link rel="stylesheet" type="text/css" href="css/darklybootstrap.css">
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
        <a class="nav-link active" href="#">New Post <span class="sr-only">(current)</span></a>
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


<form method="post" action="posting.php">
  <fieldset>
    <legend>Legend</legend>
    
    <div class="form-group">
      <label for="title">Opinion Title</label>
      <input type="text" class="form-control" id="userpost" name="title" placeholder="Post Title">
    </div>
    
    <div class="form-group">
      <label for="opinion">Your Opinion</label>
      <textarea class="form-control" id="opinion" name="opinion" rows="6"></textarea>
    </div>

    <div class="form-group">
      <label for="category">Select Category</label>
      <select class="form-control" id="category" name="category">
        <option>Category 1</option>
        <option>Category 2</option>
        <option>Category 3</option>
        <option>Category 4</option>
        <option>Category 5</option>
      </select>
    </div>

    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
 
</form>

</body>
</html>