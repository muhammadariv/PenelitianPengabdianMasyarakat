<?php 
  if(isset($_SESSION['user'])) {
?>
<header class="main-header">
  <a href="../../index.php" class="logo"><b>Admin</b> PKM</a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
            <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
              <p>
                <?php echo $_SESSION['nama']; ?>
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="../public/action.php?table=user&&action=logout" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php 
  } else {
?>
<header class="main-header">
  <a href="index.php" class="logo"><b>Admin</b> PKM</a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="../../connector.php?page=login">
            <span class="hidden-xs">Login</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php
  }
?>