<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CIA Access</title>
  
  <link rel="stylesheet" href="<?= base_url('assets/css/reset.min.cs'); ?>'">

  <link rel='stylesheet prefetch' href='<?= base_url('assets/css/font-apis.css'); ?>'>
<link rel='stylesheet prefetch' href='<?= base_url('assets/css/font-awesome.min.css'); ?>'>

      <link rel="stylesheet" href="<?= base_url('assets/css/style_login.css'); ?>">

  
</head>

<body>
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>CIA Access</h1>
  <?= "<h2>".$this->session->flashdata('pesanLogin')."</h2>"; ?>
</div>
<!-- <div class="rerun"><a href="">Rerun Pen</a></div> -->
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form method="POST" action="<?= base_url('index.php/Login/autentikasi'); ?>">
      <div class="input-container">
        <input type="text" name="userId" required/>
        <label>User ID</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="userPassword" required/>
        <label>Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button value="btnLogin"><span>Go</span></button>
      </div>
      <!-- <div class="footer"><a href="#">Forgot your password?</a></div> -->
    </form>
  </div>
  <!-- <div class="card alt"> -->
    <!-- <div class="toggle"></div> -->
    <!-- <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form> -->
  
</div>
<!-- Portfolio--><!-- <a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
 CodePen<a id="codepen" href="https://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a> -->
  <script src='<?= base_url('assets/js/jquery.min.js'); ?>'></script>

    <script src="<?= base_url('assets/js/index.js'); ?>"></script>

</body>
</html>
