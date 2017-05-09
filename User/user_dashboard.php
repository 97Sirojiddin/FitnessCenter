<?php if(!isset($_GET['page'])){header("Location:?page=dashboard");} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Aniq</title>
	<?php include("includes.html"); ?>
  <link rel="stylesheet" type="text/css" href="css/navbar_fixed.css">
  <style type="text/css">
    @media (min-width: 768px) {
  .sidebar {
    position: absolute;
    top: 57px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; 
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}
  </style>
</head>
<body>
  <div class="header1">
    <?php include("header_dashboard.php"); ?>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row">

        <div class="col-sm-3 col-md-3 well hms-user-well">
          <ul class="nav nav-sidebar">
            <div class="col-md-12 placeholder">
              <img src="images/profile.png" height="150" width="180"  alt="Generic placeholder thumbnail">
              <h4>Sirojiddin Tulanov</h4>
              <span class="text-muted">Rating of the user 5.2</span>
            </div>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="<?= ($_GET['page']=='dashboard')?'active':''; ?>"><a href="?page=dashboard">Notifications <span class="sr-only">(current)</span></a></li>
            <li class="<?= ($_GET['page']=='todo')?'active':''; ?>"><a href="?page=todo">My todo List</a></li>
            <li class="<?= ($_GET['page']=='profile')?'active':''; ?>"><a href="?page=profile">Edit profile</a></li>
          </ul>
        </div>


          <div class="col-sm-9 hms-user-dashboar-body">
          
          <?php if($_GET['page']=='dashboard'){ ?>

          <h1 class="page-header">Notifications <span class="badge">2</span></h1>

          <blockquote class="hms-user-notification-card">
            <div class="col-md-9">
              <h3>Hello world</h3>
              <p class="hms-user-notification-card-message">Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <!-- <hr> -->
              <p class="blog-post-meta hms-user-notification-card-footer"><button><span class="glyphicon glyphicon-comment"></span></button><span style="float: right;">Username </span></p>
            </div>
            <div class="col-md-3">
              <img src="images/profile.png" class="img-responsive">
            </div>
          </blockquote>

          <blockquote class="hms-user-notification-card">
            <div class="col-md-9">
              <h3>Hello world</h3>
              <p class="hms-user-notification-card-message">Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <!-- <hr> -->
              <p class="blog-post-meta hms-user-notification-card-footer"><button><span class="glyphicon glyphicon-comment"></span></button><span style="float: right;">Username</span></p>
            </div>
            <div class="col-md-3">
              <img src="images/profile.png" class="img-responsive">
            </div>
          </blockquote>
          

          <nav aria-label="...">
            <ul class="pagination">
              <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li class="disabled"><a href="#">2 <span class="sr-only">(current)</span></a></li>
              
            </ul>
          </nav>

          <?php } ?>


          <?php if($_GET['page']=='todo'){ ?>

          <h1 class="page-header">To Do List</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                <div class="row">
        <div class="col-xs-12">
            <div class="well" style="max-height: 300px;overflow: auto;">
            <ul class="list-group checked-list-box">
                  <li class="list-group-item" data-checked="true">Working Biceps</li>
                  <li class="list-group-item">Working Triceps</li>
                  <li class="list-group-item">Working Abs</li>
                  <li class="list-group-item">Working Curls</li>
                  <li class="list-group-item">Working Back</li>
                  <li class="list-group-item">Working Calf</li>
                  <li class="list-group-item">Working Chest</li>
                  <li class="list-group-item">Working Forearms</li>
                  <li class="list-group-item">Working Shoulder</li>
                  <li class="list-group-item">Working Legs</li>
                </ul>
            </div>
        </div>
    
              </tbody>
            </table>
          </div>

          <nav aria-label="...">
            <ul class="pagination">
              <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="disabled">2 <span class="sr-only">(current)</span></a></li>
              
            </ul>
          </nav>

          <?php } ?>
          

          <?php if($_GET['page']=='profile'){ ?>
            <h1 class="page-header">My Profile </h1>
            <form class="form-horizontal hms-form-register">
              <fieldset>
                <div class="col-md-12" style="padding-right: 35px;">

                  <div class="form-group">
                    <label class="control-label" for="username">UserName</label>  
                        <input id="username" name="username" type="text" placeholder="Your username . . ." class="form-control hms-form-control input-md" required="">
                         
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="name">Name</label>  
                        <input id="name" name="name" type="text" placeholder="Your name . . ." class="form-control hms-form-control input-md" required="">
                         
                  </div>

                 
                  <div class="form-group">
                    <label class="control-label" for="surname">Surname</label>  
                        <input id="surname" name="surname" type="text" placeholder="Your surname" class="form-control hms-form-control input-md" required="">
                        
                  </div>

                  <div class="form-group">
                   <label class="control-label" for="address1">E-mail</label>  
                    
                      <input id="name" name="name" type="text" placeholder="username@example.com" class="form-control hms-form-control input-md" required="">
                    
                  </div>


                   <div class="form-group">
                         
                       <label class="control-label" for="address1">Password</label>  
                          <span class="help-block well hms-password-well"><a style="color:green" href="#" data-toggle="modal" data-target="#myModal"> Change your password  <span class="glyphicon glyphicon-pencil"></span></a></span>
                         
                       </div>

                    <div class="form-group">
                          <label class="control-label">Photo</label>
                          <img src="images/profile.png" style="width: 100%" class="img-responsive thumbnail hms-user-img-well" alt="Generic placeholder thumbnail">
                          <input type="file" name="user_image" class="form-control hms-form-control" style="padding-top: 4px;">
                    </div>

                      <div class="form-group" style="text-align: right;">
                    <label class="col-md-12 control-label" for="save"></label>
                      <div class="col-md-12">
                        <button id="save" name="save" class="btn btn-success btn-lg hms-btn-success"> Save changes </button>
                    </div>                  
                  </div>
                 
               </fieldset>
              </form>

          <?php } ?>

        </div>
      </div><!--container end-->
    </div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change password</h4>
      </div>

      <div class="modal-body" style="border-radius: 3px !important;">
        <div class="form-group">
          <label class="control-label" for="address1">Current password</label>  
          <input id="name" name="name" type="password" class="form-control hms-form-control input-md" required="">            
        </div>
        <div class="form-group">
          <label class="control-label" for="address1">New password</label>  
          <input id="name" name="name" type="password" class="form-control hms-form-control input-md" required="">            
        </div>
        <div class="form-group">
          <label class="control-label" for="address1">Confirm new password</label>  
          <input id="name" name="name" type="password" class="form-control hms-form-control input-md" required="">            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success hms-btn-success" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-default hms-btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


    </div> 
</body>
</html>