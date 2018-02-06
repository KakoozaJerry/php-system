                </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="sidebar">
              <div class="block">
                 <h3>Login Form</h3>
                 <form class="form-signin">
                  
                  
                  <label style="font-weight: bold;" >Username</label>
                  <input name="username" type="text" class="form-control" placeholder="Enter Username" required autofocus>
                  <label  style="font-weight: bold;">Password</label>
                  <input name="password" type="password"  class="form-control" placeholder="Enter Password" required>
                  
                  <button name="do_login" class="btn btn-sm btn-primary " type="submit">Sign in</button><a class="btn btn-light" href="register.html">Create Account</a>
                  
                </form>
              </div>
              <div class="block">
                <h3>Categories</h3>
                <div class="list-group">
                  <a href="topics.php" class="list-group-item <?php echo is_active(null); ?>"   >All Topics <span class="badge badge-pill badge-light float-right"></span></a>
                  	<?php foreach(getCategories() as $category) : ?>
                  		<a href="topics.php?category=<?php echo $category->id; ?>" class="list-group-item <?php echo is_active($category->id); ?>"><?php echo $category->name; ?></a>
                  	<?php endforeach; ?>
                  	
                  
                  
                </div>
                
              </div>
            </div>
          </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.js"></script>
  </body>
</html>