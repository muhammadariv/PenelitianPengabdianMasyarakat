<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <?php include '../static/template-top.php'; ?>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b> PKM</a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="action.php?table=user&&action=login" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Email" name="email" autocomplete="off">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
          </div>
        </form>
        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#">I forgot my password</a>
        </div>
      </div>
    </div>
    <?php include '../static/template-bot.php'; ?>
  </body>
</html>