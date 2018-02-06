<?php include('includes/header.php'); ?>

<form role="form" method="post" action="register.php">
               <div class="form-row">
                   <div class="form-group col-md-6">
                        <label >Name</label>
                        <input name="name" type="text" class="form-control"  placeholder="Enter Your Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label >  Username</label>
                        <input name="username" type="text" class="form-control"  placeholder="Enter Your Username">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6">
                        <label >Confirm Password</label>
                        <input name="password2"type="password" class="form-control"  placeholder="Enter Your Password Again">
                    </div>
                    <div class="form-group ">
                        <label >Upload Avatar</label>
                        <input name="avatar" type="file" class="form-control" >
                        <p class="help-block"></p>
                    </div>
                    <div class="form-group col-md-6">
                        <label >About Me</label>
                        <textarea id="about" rows="6" cols="80" class="form-control" name="about" placeholder="Tell us about yourself (Optional)"></textarea> 
                    </div>
                </div>
   </form>


<?php include('includes/footer.php'); ?>