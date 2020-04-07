<div class="register-box">
   <div class="register-logo">
      <a href="#"><b>Button Soft</b></a>
   </div>

   <div class="register-box-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="#" method="post">
         <div class="form-group has-feedback">
            <input type="text" name="full_name" class="form-control" placeholder="Full name" value="<?= set_value('full_name'); ?>">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <?= form_error('full_name', '<small class="text-danger">', '</small>'); ?>
         </div>
         <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
         </div>
         <div class="form-group has-feedback">
            <input type="password" name="password1" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
         </div>
         <div class="form-group has-feedback">
            <input type="password" name="password2" class="form-control" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
         </div>
         <div class="row">
            <div class="col-xs-8">
               <div class="checkbox icheck">
                  <label>
                     <input type="checkbox"> I agree to the <a href="#">terms</a>
                  </label>
               </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
               <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
         </div>
      </form>

      <a href="<?php echo base_url('auth/index'); ?>" class="text-center">I already have a membership</a>
   </div>
   <!-- /.form-box -->
</div>
<!-- /.register-box -->