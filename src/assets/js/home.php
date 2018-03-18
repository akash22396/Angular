
<?php
include ('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/font-awesome.css">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/default.js"></script>

</head>
<body class="bodybg">
<!--==================header===================-->
<?php
include 'header.php';
?>
<?php
include 'searchopt.php';
?>
<!--===================================-->
<br>
<div class="myhome">
<div class="container">
	<div class="row">
		<div class="col-sm-2 text-left">
			<div class="container-fluid">

  <div  class="list-group">
    <a href="#" class="list-group-item active">Profile</a>
    <a href="#" class="list-group-item">Job</a>
    <a href="#" class="list-group-item">Alerts</a>
    <a href="#" class="list-group-item">Setting</a>
  </div>
</div>


		</div>
		<div class="col-sm-10">
      <div style="margin: 30px;">

<br>
<div class="mainprof">
             <div class="alert alert-warning">
                 <strong> Your profile is incomplete.</strong> With a complete profile, you can learn about opportunities directly from employers by making your profile searchable.
               </div>


<h3>Searchable Status</h3>
<h2>Allow Employers to search and view your profile
                        <div class="btn-group" id="status" data-toggle="buttons">
              <label class="btn btn-default btn-off btn-xs active">
              <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked">No</label>
              <label class="btn btn-default btn-on btn-xs ">
              <input type="radio" value="0" name="multifeatured_module[module_id][status]">Yes</label>
            </div>


</h2>
<a  href="#">What do employers see?</a><br><br>
</div><br>
<div id="prof">
<div class="row">
	<div class="col-sm-3"><h4 style="color: #808080">Last Edited: </h4><h3>Profile</h3></div>
	<div class="col-sm-9 text-right"><a href="#" class="btn btn-default"><i class="fa fa-pencil" ></i> Edit Profile</a></div>
</div><br>
<div class="mainprof">
<div  class="row">
<div class="col-sm-3 text-center">

<img class="profileimg" src="images/man-3.png"  >
</div>
<div class="col-sm-5">
<h2><?php echo $login_session;?></h2>
<p><i class="fa fa-envelope-o"></i> &nbsp;
&nbsp;
Email</p>
   <p><i class="fa fa-phone"></i> &nbsp;
&nbsp;
Contact No.</p>
  <p><i class="fa fa-location-arrow"></i> &nbsp;
&nbsp;
Address, Pincode, Country</p>


  </div>
<div class="col-sm-4"></div>
</div><br></div><br>
<div class="mainprof"><br>
<div class="row">
  <div style="margin-left: 30px;">
  <div class="col-sm-4"><i class="fa fa-facebook"></i><a href="#"> &nbsp;
&nbsp;Facebook</a><br><br>
<i class="fa fa-twitter"></i><a href="#">
&nbsp; Twitter</a>
  </div>

  <div class="col-sm-4"><i class="fa fa-linkedin"></i><a href="#"> &nbsp;
&nbsp;Linkedin</a><br><br>
<i class="fa fa-laptop"></i><a href="#">
&nbsp; Personal website</a>
  </div>
  </div>

</div>

		<br><br></div>
    <div class="mainprof"><br>

<div class="row">
      <div class="col-sm-7">
        <h3>SOFTWARE ENGINEER</h3>
        <h5 style="color: #808080">Full Time</h5>
        <h5><a href="#">Choose willing to travel</a></h5>
        <h5 style="color: #808080">Relocated? , Yes</h5>
        <h5 style="color: #808080">Preferd Location - </h5>
        <h5><a href="#">Add work Authorization</a></h5>
        <h5 style="color: #808080">Resume : &nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
 <a href=""><i class="fa fa-plus-circle"></i> Upload Resume</a> </h5>
 <h5 style="color: #808080">Cover letter : &nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
 <a href="">Cover letter manage </a> </h5>


      </div>
      <div class="col-sm-5"></div>
    </div><br></div><br>
    <div class="mainprof"><br>
      <div class="row">
        <div class="col-sm-12"><STRONG  style="font-size:25px;color: #b32d00">Skill</STRONG>&nbsp;
&nbsp;
&nbsp;
&nbsp;
 <i style="color: #808080">Add 5 Skill</i><br><br>
<a href="#" class="btn btn-default">Add a Skill</a>
</div>
        <!--<div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>-->
      </div><br><br>

    </div>
    <div class="mainprof"><br>
      <div class="row">
        <div class="col-sm-12"><STRONG  style="font-size:25px;color: #b32d00">Work Experience </STRONG>&nbsp;
&nbsp;
&nbsp;
&nbsp;
 <i style="color: #808080">Add 1 work experience</i><br><br>
<a href="#" class="btn btn-default">Add work experiance</a>
</div>
        <!--<div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>-->
      </div><br><br>

    </div>
    <div class="mainprof"><br>
      <div class="row">
        <div class="col-sm-12"><STRONG  style="font-size:25px;color: #b32d00">Education</STRONG>&nbsp;
&nbsp;
&nbsp;
&nbsp;
 <i style="color: #808080"></i><br><br>
<a href="#" class="btn btn-default">Add Education</a>
</div>
        <!--<div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>-->
      </div><br><br>

    </div>



	</div></div>
</div>


</div>

</div></div>
<!-- =====================footer=============================== -->
<?php
include 'footer.php';
?>
</body>
</html>