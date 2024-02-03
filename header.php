<nav>
    <a href="index.html"><img src="" /></a>
  <div class="nav-links" id="navLinks">
   <i class="fa fa-times"></i>
  <ul>
  <li><a href="">HOME</a></li>
  <li><a href="aboutus.html">ABOUT US</a></li>
 <?php 
   $basePath = rtrim(dirname($_SERVER['PHP_SELF']), '/');
    if(!isset($_SESSION['user'])) {
  echo '<li><a href="login.php">LOG IN</a></li>';
  }
 else {
     echo '<li><a href="logout.php">LOG OUT</a></li>';
  }
    ?>
  </ul>
   </div>
 <i class="fa fa-bars"></i>
 </nav>
