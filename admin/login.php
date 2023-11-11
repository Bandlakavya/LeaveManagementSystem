<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
 <style>

body {
	font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
  color:white;
  font-size:12px;
}

   .page-header{
      text-shadow: 3px 2px black;
   }

   @import "compass/css3";

   * { box-sizing: border-box; }


 form {
 	background:#111; 
  width:250px;
  margin:20px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}


form:after {
  content:"";
  display:block;
  position:absolute;
  height:1px;
  width:100px;
  left:20%;
  background:linear-gradient(left, #111, #444, #b6b6b8, #444, #111);
  top:0;
}

form:before {
 	content:"";
  display:block;
  position:absolute;
  width:8px;
  height:5px;
  border-radius:50%;
  left:34%;
  top:-7px;
  box-shadow: 0 0 6px 4px #fff;
}

.login-box {
 	padding:20px; 
  border-top:1px solid #19191a;
}


form h1 {
  font-size:18px;
  text-shadow:0 1px 0 black;
  text-align:center;
  padding:15px 0;
  border-bottom:1px solid rgba(0,0,0,1);
  position:relative;
}

form h1:after {
 	content:"";
  display:block;
  width:250px;
  height:100px;
  position:absolute;
  top:0;
  left:50px;
  pointer-events:none;
  transform:rotate(70deg);
  background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
  
}

label {
 	color:#666;
  display:block;
  padding-left: 10px;
  padding-bottom:8px;
}

.input-group input[type=text],
.input-group input[type=password]{
  padding-left: 10px;
 	width:75%;
  padding:8px 5px;
  background:linear-gradient(#1f2124, #27292c);
  border:1px solid #222;
  box-shadow: 0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
}

.fas{
  padding:8px 5px;
  background:linear-gradient(#1f2124, #27292c);
  border:1px solid #222;
  box-shadow: 0 1px 0 ;
  border-radius:0.3em;
  margin-bottom:20px;
}

.col {
 	padding:0 20px 20px 20px; 
}

.col:after {
 	clear:both;
  display:table;
  content:"";
}

.col span {
  display:block;
  float:left;
  color:#0d93ff;
  padding-top:8px;
}

.btn input[type=submit]{
 	padding:5px 20px;
  border:1px solid rgba(0,0,0,0.4);
  text-shadow:0 -1px 0 rgba(0,0,0,0.4);
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 10px 10px rgba(255,255,255,0.1);
  border-radius:0.3em;
  background:#0184ff;
  color:white;
  float:right;
  font-weight:bold;
  cursor:pointer;
  font-size:13px;
}

.btn input[type=submit]:hover {
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 -10px 10px rgba(255,255,255,0.1);
}

.input-group input[type=text]:hover,
.input-group input[type=password]:hover,
label:hover ~ .input-group input[type=text],
label:hover ~ .input-group input[type=password] {
background:#27292c;
}

 </style>

<body class="hold-transition login-page ">
  <script>
    start_loader()
  </script>
  <h1 class="text-center pb-4 mb-4 text-light page-header" style="padding-top: 5px;"><?php echo $_settings->info('name') ?> <br> Admin Login</h1>
  
<div class="login-box">
  <!-- /.login-logo -->

 
    <div class="card-body">
      <form id="login-frm" action="" method="post">
      <h1> Employee Log in</h1>
        <div class="input-group mb-3">
        <label for="user">UserName</label>
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
           
              <span class="fas fa-user"></span>
   
          </div>
        </div>
        <div class="input-group mb-3">
        <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            
              <span class="fas fa-lock"></span>
    
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col">
            <a href="<?php echo base_url ?>"><span>Go to Portal</span></a>
          </div>
          <!-- /.col -->
          <div class="col text-right">
            <button type="submit" class="btn btn-primary btn-flat btn-sm">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
 
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>