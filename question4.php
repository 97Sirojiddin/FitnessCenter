
<html lang="en-US">
    <!--[if lt IE 7]> <html class="ie ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="ie ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="ie ie8 oldie" lang="en"> <![endif]-->
    <!--[if gt IE 8]> <html class="ie ie9 newest" lang="en"> <![endif]-->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <link rel="shortcut icon" href=""/>
        <link href='//fonts.googleapis.com/css?family=Lato:400,700&subset=latin,cyrillic,cyrillic-ext,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
        <title>FitnessCenter.Uz | Questions</title>
        <link rel='stylesheet' id='bootstrap-css'  href='https://qaengine.enginethemes.com/wp-content/plugins/et_demobar/css/bootstrap.min.css?ver=1482833515' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome-css'  href='https://qaengine.enginethemes.com/wp-content/themes/qaengine/css/libs/font-awesome.min.css?ver=1483511937' type='text/css' media='all' />
        <link rel='stylesheet' id='main-style-css'  href='https://qaengine.enginethemes.com/wp-content/themes/qaengine/css/main.css?ver=1483511937' type='text/css' media='all' />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    
    <link href="css/style5.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
   <link href="css/stylehome.css" rel="stylesheet" type="text/css">
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/card.js"></script>

    </head>

<body class="home page-template page-template-page-questions page-template-page-questions-php page page-id-12 cbp-spmenu-push">
    <br><br><br>
    <nav> 
    <div class="container-fluid navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Nav bar</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    
    <a class="navbar-brand" style="padding-right:170px"><b>Fitness Center</b></a></div>
  <div class="collapse navbar-collapse" id="defaultNavbar1">
  <ul class="nav navbar-nav navbar-left">
      
      <li class=""><a href="home.html">Home<span class="sr-only">(current)</span></a></li>
      <li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup=  "true" aria-expanded="false">Tutorials<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="active"><a href="beginner.html">Beginner</a></li>
          <li><a href="intermediate.html">Intermediate</a></li>
          <li><a href="Advanced.html">Advanced</a></li>
        </ul>
      </li>

      <li><a href="b-timetable.html">Timetable</a></li>
    </ul>

    <ul class="nav navbar-nav">
        <li><a href="wcoach.html">Coach</a></li>
        <li><a href="price.html">Price</a></li>
        <li><a href="question.php"> Q & A Forum</a></li>
        <li><a href="about.html">About Us</a></li>
     </ul>
    
    <form class="navbar-form navbar-left" role="login">
      <button type="login" class="btn btn-default"> <a href="login.html">Log In</a></button>
    </form>
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
       </form>
      </div>
  </div> 
</nav>
        <link itemprop="url" href="https://qaengine.enginethemes.com" style="display: none;"/>
        <div class="clearfix"></div>
        <div class="row select-category">
            <div itemprop="mainEntityOfPage" class="col-md-6 col-xs-6 current-category">
        </div>
        </div><!-- END SELECT-CATEGORY -->
            <div class="col-md-8 col-sm-10 col-xs-10">
                <div class="row">
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <span class="q-f-title">All Questions </span>
                    </div><!-- END TITLE -->
                </div>
            </div>
        </div>
        <div class="main-questions-list">
            <ul id="main_questions_list">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="question-item post-2341 question type-question status-publish hentry question_category-business qa_tag-business-2 qa_tag-technology-2" data-id="2341" >
    <div itemprop="item" itemscope itemtype="http://schema.org/Question">
        <div class="col-md-8 col-xs-8 q-left-content">
            <div class="q-ltop-content">
                <h2 itemprop="name">
                    <a itemprop="url" href="https://qaengine.enginethemes.com/blog/question/what-is-business/" class="question-title"><?php
$conn = new mysqli('localhost', 'root', '','database_site');
$result = $conn->query("select * from questions");
while($row = mysqli_fetch_array($result)){
$user = $row["user_id"];
$result2 = $conn->query("select * from users where id = '".$user."'");
$row1 = mysqli_fetch_array($result2);
    $username = $row1["username"];
    $name = $row1["firstname"];
    $surname = $row1["lastname"];
    $question = $row["question"];

echo "<p><a href=\"submit.php?user_id=".$username."&prop_id=".$question."\">$question </a></p>";
echo "<hr>";?></a>
                </h2>
            </div>
            <?php echo "<div class='q-lbtm-content'><div itemprop='text' class='question-excerpt'>
                    <p><p>$name</p>";
echo "<p>$surname </p>  &nbsp;</p>";
          }

          ?>
           </div>
           <form method="POST" action="question.php">
           Responder:
           <input type="text" name="">
            <textarea></textarea>
            <button name="send"></button>
           </form>
            </div>
        </div><!-- end left content -->
            <div class="pumping">
                            </div>
        </div><!-- end right content -->
        <div class="clearfix"></div>
        </form>
        </div>
                <style type="text/css">
            .post-a-job .step .toggle-title,
            .btn-background,
            .icon-border {
                box-sizing: content-box;
            }

            .et-plugin-demobar .icon:before {
                font-size: 20px;
            }
        </style>


        </body><!-- END BODY -->
</html>
