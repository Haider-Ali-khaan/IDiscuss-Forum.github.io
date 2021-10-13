<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign Up for IDiscuss</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
      </div>
      <div class="modal-body">
      <div class="container my-4">
    <form action="_handleSignup.php" method='post'>
      <h2>Sign Up with Our Website</h2>
      <div class="mb-3">
        <label for="username" class="form-label ">User Name</label>
        <input type="Name" class="form-control maxwidth=11" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="pswd" class="form-label">Password</label>
        <input type="password" class="form-control" id="pswd" name="pswd"></input>
      </div>
      <div class="mb-3">
        <label for="cpswd" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="cpswd" name="cpswd"></input>
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
  </div>
      </div>
    </div>
  </div>
</div>