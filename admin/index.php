<?php include "includes/templates/header.php"; ?>

 <form action="action_page.php">


  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>

  </div>

  <div class="container" style="background-color:#FFF">
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

<?php include "includes/templates/footer.php"; ?>