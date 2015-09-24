<div class="container">

      <?php echo form_open('verifylogin'); ?>
        <h2 class="form-signin-heading">Please sign in</h2>

   
   <?php echo validation_errors(); ?>
  
     <label for="username" lass="sr-only">Username:</label>
     <input type="text" size="20" id="username" name="username" class="form-control" placeholder="Username"/>
     <br/>
     <label for="password" lass="sr-only">Password:</label>
     <input type="password" size="20" id="passowrd" name="password" class="form-control" placeholder="Password"/>
     <br/>
     <input type='submit' class="btn btn-lg btn-primary btn-block" type="submit" value='Sign in' />
   </form>
 </div>