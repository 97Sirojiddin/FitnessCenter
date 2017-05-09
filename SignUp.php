<?php
$db = new mysqli('db.webspace.uz','fizmasof_fitness','Fitnesscenter7998872','fizmasof_project');
	if(isset($_POST['toSubmit']))
	{
		$Username = $_POST['username'];
    $Password = $_POST['password'];
		$FirstName = $_POST['firstname'];
		$LastName = $_POST['lastname'];
		$ConfPwd = $_POST['ConPassword'];
    $email = $_POST['email'];
    $dob = $_POST['date'];
    $target = "your directory";
    $target = $target . basename( $_FILES['image']['name']);
    $pic=($_FILES['image']['name']);
  $query1 = $db->query("SELECT * FROM users where username = '".$Username."' and password = '".$Password."'") or die(mysql_error());
        $row = mysqli_fetch_array($query1);
  if ($Username != $row["username"]) {

    if($Password == $ConfPwd){
    $ConfPwd = md5($ConfPwd);
              $query = "INSERT INTO users (username, password, firstname, lastname, email, dob, photo) VALUES ('$Username', '$ConfPwd','$FirstName','$LastName','$email', '$dob', '$pic')";
move_uploaded_file($_FILES["image"]["tmp_name"], "User/user_img/" . $_FILES["image"]["name"]);
$result= mysqli_query($db, $query);
header("Location: loginP.php"); 
          }
          else
          {
            echo "<script>alert('Confirm Password is not correct');
                      window.location.href='loginP.php';
            </script>";
          }
      }
else if ($Username == $row["username"])
      {
        echo "<script>alert('Username is exist');</script>
            window.location.href='loginP.php';
          document.getElementById('sign-up').onclick = reply_click;
          </script>";
      }
  }
?>
<script type="text/javascript">
function Login()
    {
        //alert("Login");
        var invocationLogin={
                adapter:"SQL_ADAPTER_Yummy",
                procedure:"procedureLogin",
                parameters:[]
               };

    var optionsLogin={
            onSuccess:succLogin,
            onFailure:failLogin
            };
    WL.Client.invokeProcedure(invocationLogin,optionsLogin);
    }

    function succLogin(result)
    {
        //alert("succLogin");
        var LUname=$("#LUname").val();
        var LPass=$("#LPass").val();
        var flag=0;
        var n;

        var i,
        resultSet = result.invocationResult.resultSet;
        //alert(result.invocationResult.resultSet);
        namesArray = [];

        for (i = 0; i < resultSet.length; i++)
        {
        namesArray[i] = resultSet[i].NAME;
        }

        //alert (JSON.stringify(namesArray));

        for (i = 0; i < resultSet.length; i++)
        {
            n = LUname.localeCompare(namesArray[i]);
            if(n==0)
            flag=1;
        }

        if(flag==1)
            {
            alert("Login Successful");
            //Here the Redirect code/same html page to a particular div or view
           //clicking login button if success then redirect to home div/view

            }
        else
            alert("Try Again!!!");

    }

    function failLogin(result)
    {
         alert(result+"try again Login");
    }
    </script>