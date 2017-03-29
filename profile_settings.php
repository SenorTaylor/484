<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile</title>


    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

      <link href="css/custom.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="static/stylesheets/app.css">
<script src="static/scripts/library.js"></script>
<script src="static/scripts/base.js"></script>
<script src="static/scripts/chart.js"></script>
<script src="static/scripts/initialize.js"></script>




    <link href="custom.css" rel="stylesheet" type="text/css" media="screen">

    <!-- Custom CSS -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="header">
   <ul class="con">
    <div id="header2">
        <li> 
           <a href="profile.php">Jennifer Alba<img src="img/profile-widget-avatar.jpg" height=30px width=30px></a>
         </li>
           <li id="settings">
           <a href="profile_settings.php"><img src="settings.png" class="img-responsive"></a>
       </li>
       <li id="exit">
          
           <a href="/484/log-in/login_2.php"><img src="exit.png" class="img-responsive"></a>
       </li>               

   </ul>
</div>





<!-- NAVIGATION BAR -->
           
<div id="stream">
   <div class="con">
       <div class="tile" id="hello">
        <div class="col-sm-12">
         <h2><span>Hi,</span> Jennifer</h2>
          <p>You last visited <strong>two hours</strong> ago</p>
       </div>
   </div>
   <div>
 </div>



  <div class="row">
    <div class="container">
        <ul id="nav" class="nav">
        <li> 
           <a  class="tile" href="index_admin.php"> 
              <span class="vector"><img src="home.png" class="img-responsive"></span>
           <span class="title"><strong>Home</strong></span>
         </a>
         </li>

            <li> 
           <a  class="tile" href="roster_admin.php"> 
              <span class="vector"><img src="group.png" class="img-responsive"></span>           
              <span class="title"><strong>Roster</strong></span>
         </a>
         </li>

        <li> 
           <a  class="tile" href="dept_admin.php"> 

              <span class="vector"><img src="edit.png" class="img-responsive"></span>
           <span class="title"><strong>Requirements</strong></span>
         </a>
         </li>  

          <li> 
           <a  class="tile" href="shifts_admin.php">
              <span class="vector"><img src="calendar.png" class="img-responsive"></span>
           <span class="title"><strong>Shifts</strong></span>
         </a>
         </li> 

          <li> 
           <a  class="tile" href="applications.php"> 
              <span class="vector"><img src="resume.png" class="img-responsive"></span>
           <span class="title"><strong>Applications</strong></span>
         </a>
         </li>   


   </ul>
</div>
</div>
</div>
</div>
</div>






    <!-- Page Content -->
  

  <div id="dashboard">
      <div class="scroll con">
          <div class="section current" title="Our First Section" id="first_section">
  
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Profile Information</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Address</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Emergency Contact</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Allergies/Physical Limitations?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Multiple Checkboxes -->



<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Have you been rabies vaccinated within the past two years?</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">-Select-</option>
      <option value="2">Yes</option>
      <option value="3">No</option>
    </select>
  </div>
</div>


<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton"></label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Do you hold a valid permit to rehabilitate wildlife in the state of Virginia?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Yes
    </label>
  </div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      No
    </label>
  </div>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton"></label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>


<div id="submitbutton" class="col-sm-10 col-sm-offset-4">
            <a class="btn btn-large btn-info" href="profile.php">Update Profile</a>
            </div>

<form class="form-horizontal">
<fieldset>



<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Upload Photo</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

</fieldset>
</form>


</fieldset>
</form>




          </div>
      </div>
  </div>
  <div id="footer">
      <div class="con">
     
      </div>
  </div>
</body>
</html>







    </div>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
