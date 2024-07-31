<?php
require('./includes/header.php');
require('./includes/footer.php')
?>
<section class="login">
  <div class="row">
    <div class="col-6 part1">

    </div>
    <div class="col-6 part2">
      <h2 class="mb-3 text-center">Welcome to the Culinary Blog</h2>

      <form class="form" action="">
        <label for="username" class="form-label">Username or Email</label>
        <input class="mb-3 form-control" type="text" name="username" id="username" />

        <label for="user_pass" class="form-label">Password</label>
        <input class="mb-3 form-control" type="password" name="user_pass" id="user_pass" />

        <center><button class="my-3 btn btn-primary" type="submit">Login</button></center>
      </form>
    </div>
  </div>
</section>