<?php 
//$connection = mysqli_connect('localhost', 'root', 'root', 'opinions');
//if(!$connection){
//	die('Unable to connect');
//}
?>


<?php 
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=opinions', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 ?>
