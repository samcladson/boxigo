<section class="section">
  <div class="container">
    <?php if($this->session->flashdata('login_err_msg')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('login_err_msg'); ?></div>
    <?php endif; ?>
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center mb-5">Log In</h5>
            <?php echo form_open('login/login_validate',array('class'=>'form')); ?>
              <div class="form-group mx-2 my-5 text-center <?php if(form_error('phone')): ?>has-danger<?php endif;?>">
                <input type="tel" name="phone" class="form-control" value="<?= set_value('phone');?>" placeholder="Phone number">
                <span class="material-icons form-control-feedback">clear</span>
                <span class="text-danger"><?= form_error('phone'); ?></span>
              </div>
              <div class="form-group mx-2 my-5 text-center <?php if(form_error('login_otp')): ?>has-danger<?php endif;?>">
                <input type="tel" name="login_otp" class="form-control" value="<?= set_value('login_otp');?>" placeholder="OTP">
                <span class="material-icons form-control-feedback">clear</span>
                <span class="text-danger"><?= form_error('login_otp'); ?></span>
              </div>
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Sign in</button>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>