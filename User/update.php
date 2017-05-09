<?php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
$db = new mysqli('db.webspace.uz','fizmasof_fitness','Fitnesscenter7998872','fizmasof_project');
	if(isset($_POST['save']))
	{
    session_start();
		$Username = $_SESSION['username'];
    $Password = $_SESSION['password'];
   
    $select = $db->query("SELECT id FROM users WHERE username='".$Username."' AND password='".$Password."'");

    $row = mysqli_fetch_array($select);
    print_r($row);
    $id = $row['id'];
		$username = $_POST['username'];
        $FirstName = $_POST['name'];
		$LastName = $_POST['surname'];
    	$email = $_POST['email'];
    	$target = "your directory";
    $target = $target . basename( $_FILES['image']['name']);
    $pic=($_FILES['image']['name']);
              $query1 = "UPDATE users SET firstname= '".$FirstName."', lastname= '".$LastName."', email= '".$email."', photo='".$pic."' WHERE id='".$id."'";
            move_uploaded_file($_FILES["image"]["tmp_name"], "./user_img/" . $_FILES["image"]["name"]);
				$result= mysqli_query($db, $query1);

              echo "UPDATE users SET firstname= '".$FirstName."' AND lastname= '".$LastName."' AND email= '".$email."' WHERE id=".$id;
			if ($result)
				$_SESSION['username'] = $username;
			header("Location:user_dashboard.php");
          
      }
?>