<?php $movedata = $this->session->userdata('movedata'); ?>
<section class="section" class="padding-top:100px">
	<div class="container">
		<?php if($this->session->flashdata('success_message')): ?>
			<div class="alert alert-success"><?= $this->session->flashdata('success_message'); ?></div>
		<?php endif; ?>
		<?php if($this->session->flashdata('error_message')): ?>
			<div class="alert alert-danger"><?= $this->session->flashdata('error_message'); ?></div>
		<?php endif; ?>
	</div>
	<div class="personal-info-section py-5 my-5">
		<?php echo form_open('estimate/personal_info_validate',array('class'=>'form form-horizontal')); ?>
		<div class="d-flex flex-row justify-content-center align-items-center">
			<p class="px-2">My first name is</p>
			<div class="form-group mx-2 text-center <?php if(form_error('first_name')): ?>has-danger<?php endif;?>">
				<input type="text" name="first_name" class="form-control" value="<?= set_value('first_name');?>">
				<span class="material-icons form-control-feedback">clear</span>
				<span class="text-danger"><?= form_error('first_name'); ?></span>
			</div>
			<p class="mx-2">and my last name is</p>
			<div class="form-group mx-2 text-center <?php if(form_error('last_name')): ?>has-danger<?php endif;?>">
				<input type="text" name="last_name" class="form-control" value="<?= set_value('last_name');?>">
				<span class="material-icons form-control-feedback">clear</span>
				<span class="text-danger"><?= form_error('last_name'); ?></span>
			</div>
		</div>
		<div class="d-flex flex-row justify-content-center align-items-center">
			<p class="px-2">My email is</p>
			<div class="form-group mx-2 text-center <?php if(form_error('email')): ?>has-danger<?php endif;?>">
				<input type="email" name="email" class="form-control" value="<?= set_value('email');?>">
				<span class="material-icons form-control-feedback">clear</span>
				<span class="text-danger"><?= form_error('email'); ?></span>
			</div>
			<p class="mx-2">and you can contact me on my phone number at</p>
			<div class="form-group mx-2 text-center <?php if(form_error('phone')): ?>has-danger<?php endif;?>">
				<input type="tel" name="phone" class="form-control" value="<?= set_value('phone');?>">
				<span class="material-icons form-control-feedback">clear</span>
				<span class="text-danger"><?= form_error('phone'); ?></span>
			</div>
		</div>
		<div class="d-flex justify-content-center align-items-center mt-5">
			<input type="submit" name="form-three-next" class="btn btn-success btn-raised" value="Next">
		</div>
		
		</form>
	</div>
</section>
