
    <div class="container container-min">

      <form class="form-signin" action="../control/register.php" method="post">
        <h2 class="form-signin-heading text-center">Please register</h2>
        <label class="my-4"for="inputPseudo">Pseudo</label>
        <?php if(isset($_SESSION['error']['pseudo'])){ ?>
      <span class="alert alert-danger mx-3" role="alert">pseudo already take</span>
      <?php } ?>
        <input type="text" name="pseudo" id="inputPseudo" class="form-control" placeholder="Pseudo" required autofocus>
        <label class="my-4"for="inputPassword">Password
          <?php if(isset($_SESSION['error']['pass'])){ ?>
        <span class="alert alert-danger mx-3" role="alert">your 2 fields pass do not match</span>
        <?php } ?>
        </label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
        <label class="my-4"for="inputPassword1">Confirm Password</label>
        <input type="password" name="passconf" id="inputPassword1" class="form-control" placeholder="Confirm Password" required>
        <label class="my-4"for="inputEmail">Email address</label>
        <input type="email" name ="email" id="inputEmail" class="form-control" placeholder="Email address" required>
        <button class="btn btn-lg btn-primary btn-block my-4" type="submit" name="submitregister">Register</button>
      </form>

    </div>
