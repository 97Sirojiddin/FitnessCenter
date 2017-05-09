<?php
$db = new mysqli('db.webspace.uz','fizmasof_fitness','Fitnesscenter7998872','fizmasof_project');
	if(isset($_POST['action']))
	{
		$Username = $_POST['username'];
    $Password = $_POST['passwor'];
    $select = "SELECT * FROM users WHERE username=".$Username;
    $row = mysqli_fetch_array($select)
    
    if ($Username == $row["username"]){
      $query = "INSERT INTO users (password) VALUES ('password')";
$result= mysqli_query($db, $query);
echo $result;
            header('Location: loginP.php');

      }
?>