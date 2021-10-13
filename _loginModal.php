

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Log In to IDiscuss</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">close</button>
      </div>
      <div class="modal-body">
      <div class="container my-4">
    <form action="_handleLogin.php" method='post'>
      <h2>Log in with Our Website</h2>
      <div class="mb-3">
        <label for="username" class="form-label">User Name</label>
        <input type="Name" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="pswd" class="form-label">Password</label>
        <input type="password" class="form-control" id="pswd" name="pswd"></input>
      </div>
      <button type="submit" class="btn btn-primary">Log In</button>
     </form>
      </div>
      </div>
    </div>
  </div>
</div>
