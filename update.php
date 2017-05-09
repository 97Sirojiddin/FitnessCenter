<?php
$db = new mysqli('db.webspace.uz','fizmasof_fitness','Fitnesscenter7998872','fizmasof_project');
	if(isset($_POST['save']))
	{
		$Username = $_POST['username'];
		$FirstName = $_POST['firstname'];
		$LastName = $_POST['lastname'];
    	$email = $_POST['email'];
              $query = "INSERT INTO users (username, firstname, lastname, email) VALUES ('$Username','$FirstName','$LastName','$email')";
$result= mysqli_query($db, $query);
echo $result;
            header('Location: loginP.php');

      }
      if (isset($_POST['action'])) 
      {

      }

?>