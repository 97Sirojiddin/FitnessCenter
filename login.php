<?php
  if(isset($_POST["toLogin"])){
      $Username = $_POST["username"];
      $password = md5($_POST["password"]);
      $res = new mysqli('db.webspace.uz','fizmasof_fitness','Fitnesscenter7998872','fizmasof_project');
      
      if(!$res){
        echo 'Connection lost.. please try again later !!';
        exit;
      }

      if($Username!='' && $password!='')
      {
        $query = $res->query("SELECT * FROM users where username = '".$Username."' and password = '".$password."'") or die(mysql_error());
        $row = mysqli_fetch_array($query);      

        for($i=0;$i<1;$i++)
        {          
          if($Username == $row["username"] && $password==$row["password"]){
            session_start();
          $_SESSION['username'] = $Username;
          $_SESSION['password'] = $password;
            header('Location: User/user_dashboard.php');
          }
          else
          {
          echo "<script>alert('Username or Password is not correct');
          window.location.href='loginP.php';
          document.getElementById('sign-up').onclick = reply_click;
          </script>";
          }
        }
      }
      else
      {
        header("Location: loginP.php");
      }
  }
?>