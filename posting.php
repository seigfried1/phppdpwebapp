 <?php
//  include_once('db.php');
//     if(isset($_POST['submit'])){
//         $sql = "INSERT INTO posts (title, opinion, category)
//         VALUES ('".$_POST["title"]."','".$_POST["opinion"]."','".$_POST["category"]."')";
//     }
//     $result = mysqli_query($connection, $sql);
//     header('Location: index.php');
// exit;
  ?>
<?php include_once('db.php'); ?>
<?php 
if (isset($_POST['title']) && isset($_POST['opinion']) && isset($_POST['category'])){
		$sql = "INSERT INTO posts (title, opinion, category) 
              VALUES (:title, :opinion, :category)";
        $stmt = $pdo->prepare($sql);
    	$stmt->execute(array(
        ':title' => $_POST['title'],
        ':opinion' => $_POST['opinion'],
    	':category' => $_POST['category']));
	}
header('location: index.php');
exit();
 ?>