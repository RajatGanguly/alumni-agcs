<nav class="navbar">
  <div class="navbar-container container">
    <input type="checkbox" name="" id="" />
    <div class="hamburger-lines">
      <span class="line line1"></span>
      <span class="line line2"></span>
      <span class="line line3"></span>
    </div>
    <ul class="menu-items">
      <li><a href="./">Home</a></li>
      <li><a href="./about-us.php">About</a></li>
      <li><a href="./gallery.php">Gallery</a></li>
      <li><a href="./contact-us.php">Contacts</a></li>
      <li><a href="./members.php">Membership</a></li>
      <li><a href="./agm.php">AGM</a></li>
      <li><a href="./donation.php">Donate</a></li>
      <li><a href="./enroll.php">Enroll</a></li>
     
    </ul>
    <div class="logo">
      <img src="./pics/logo.jpeg">
    </div>
  </div>
</nav>
<script>
  function logout(){
    <?php
      session_unset();
      session_destroy();  
    ?>
    document.location.reload();
  }
</script>