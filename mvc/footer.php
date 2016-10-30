
  
      <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>

<script src="assets/jquery.min.js"></script>
    <script src="assets/tether.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    


  <!-- Modal -->
<div class="modal fade container" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="loginModalTitle">Login</h4>
      </div>
            <div id="done" class="alert alert-success" role="alert">
    <strong>Login Successful!</strong> redircting to your home page.
    </div>
    
    <div id="error" class="alert alert-danger" role="alert">
    <strong>candidate error</strong> unable to verfiy your logins.
    </div>
    
    <div id="registerd" class="alert alert-warning" role="alert">
  <strong>Warning!</strong> the Email is already registerd
</div>



      <div class="modal-body">
        <form>
            <input type="hidden" id="loginActive" name="loginActive" value="1">
  <fieldset class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email address">
  </fieldset>
  <fieldset class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </fieldset>
</form>
      </div>
      <div class="modal-footer">
          <a id="toggleLogin">Sign up</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="loginSignupButton" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="inc.js"></script>
  </body>
</html>