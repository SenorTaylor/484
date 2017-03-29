<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shifts</title>


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


          

<!-- Select Multiple -->
<div id="firstpics" class="row">
        <a data-toggle="modal" href="#demoLightbox"><img src="img/calendar.png" class="img-responsive" alt="calendar" height="400px"
  width="800px"></a>
      <div id="demoLightbox" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
        <div class='modal-dialog'>
          <div class='lightbox-content'>
            
            <form class="form-horizontal">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label id="textinputshift" class="col-md-4 control-label" for="textinput">Shift Type</label>  
  <div class="col-md-4">
  <input id="textinputshift" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label id="textinputshift" class="col-md-4 control-label" for="textinput">Shift Date</label>  
  <div class="col-md-4">
  <input id="textinputshift" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- Multiple Checkboxes -->
<div class="form-group">
  <label id="textinputshift" class="col-md-4 control-label" for="checkboxes">Shift Time</label>
  <div class="col-md-4">
  
<div id="textinputshift" class="form-group">
                                    <div class="controls ">
                                     <div class="servicelog-categories">
                                    <div class="category-select"><div><input id="org-81" type="checkbox" /> 
                                    <label>Shift A</label>
                                    </div>
                                    <div class="category-select"><div><input id="org-81" type="checkbox" /> 
                                     <label >Shift B</label>
                                       </div>
                                     <div class="category-select"><div><input id="org-81" type="checkbox" /> 
                                      <label >Shift C</label>
                                      </div>
                                    </div>  
                                    </div>  
                                    </div>  
                                    </div>  
                                    </div>  


<!-- Button -->
<div id="shiftbutton" class="col-sm-10 col-sm-offset-2">
            <a class="btn btn-large btn-info" href="shifts_admin.php">Create Shift</a>
            </div></div>
 </form>

                                    </div>  
                                    </div>  
                                    </div>  
                                    </div>  
                                  </div>





          </div>
      </div>
  </div>





      <!-- Footer -->
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


