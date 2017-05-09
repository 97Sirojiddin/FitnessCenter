<?php
$db = new mysqli('db.webspace.uz','fizmasof_fitness','Fitnesscenter7998872','fizmasof_project');
	if(isset($_POST['save']))
	{
    session_start();
		$Username = $_SESSION['username'];
    $Password = $_SESSION['password'];
    $Password2 = md5($_POST['password']);
    
    $select = $db->query("SELECT id FROM users WHERE username='".$Username."' AND password='".$Password."'");
    $row = mysqli_fetch_array($select);
    
    $id = $row['id'];
      $query = "UPDATE users SET password='".$Password2."' WHERE id='".$id."'";
      $result= mysqli_query($db, $query);
      if ($result)
        $_SESSION['password'] = $Password;
    }
?>