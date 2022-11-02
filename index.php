

<?php include("header.php")?>

<?php include("bd.php")?>

<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="" action="registrar.php" method="post">

          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control rounded-3" id="floatingInput" placeholder="example@gmail.com" required>
            <label for="floatingInput">Email address</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password.." required>
            <label for="floatingPassword">Password</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control rounded-3" id="floatingInput" placeholder="name..">
            <label for="floatingInput">name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" name="bio" class="form-control rounded-3" id="floatingInput" placeholder="bio..">
            <label for="floatingInput">bio</label>
          </div>

          <div class="form-floating mb-3">
            <input type="tel" name="phone" class="form-control rounded-3" id="floatingInput" placeholder="phone..">
            <label for="floatingInput">phone</label>
          </div>

          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="register">Sign up</button>

          
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>
            Sign up with Twitter
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
            Sign up with Facebook
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"/></svg>
            Sign up with GitHub
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include("registrar.php")?>

<?php include("footer.php")?>
<!-- <div class="b-example-divider"></div> -->




