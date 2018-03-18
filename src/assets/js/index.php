<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title>Login</title>
	<link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/default.js"></script>
</head>
<body class="bg">

<div class="container">
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-5">
	<div class="aa">
    <h2>Login</h2>
      <form action="login.php" method="post">
        <input type="text" name="username" checked placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input class="btn btn-success" type="submit" value="Submit"> <input class="btn btn-danger" type="reset" value="Clear">
        <br><br>
        <div class="footer"><p> &nbsp;
Forget Password ? <br> &nbsp; <a href="#" >Create new account. </a></p></div>


<br>
      </form>
    </div></div>
    <div class="col-sm-4"></div>
</div>
</div>

</body>
</html>