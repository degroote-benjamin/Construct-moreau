
    <div class="container container-min">
      <form class="form-signin" method="post" action="../control/login.php">
        <h2 class="form-signin-heading my-4">Please sign in</h2>
        <?php if (isset($_SESSION['error']['formlogin'])): ?>
          <span class="alert alert-danger" role="alert">pseudo or pass wrong</span><br>
        <?php endif; ?>
        <label class="my-4" for="inputEmail" >Pseudo</label>
        <input type="text" id="inputEmail" class="form-control" name ="pseudo" placeholder="Pseudo" required autofocus>
        <label class="my-4" for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block my-4" name="submitlogin" type="submit">Sign in</button>
      </form>

    </div>
