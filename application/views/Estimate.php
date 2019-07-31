<div class="section">
	<?php if($this->session->flashdata('success_message')): ?>
		<div class="alert alert-success text-center"><?= $this->session->flashdata('success_message'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('error_message')): ?>
		<div class="alert alert-danger text-center"><?= $this->session->flashdata('error_message'); ?></div>
	<?php endif; ?>
	<div class="estimate-section container">
		<div class="estimate-form-one py-5">
			<div class="d-flex justify-content-center">
				<img src="<?= base_url();?>includes/img/move-whole.png" class="img" height="200">
			</div>
			<?php echo form_open('estimate/form_one_validate',array('class'=>'form form-horizontal')); ?>
				<!-- <div class="d-flex flex-row justify-content-center align-items-center mt-5">
					<p class="text-center px-2">I am plannig to move my </p>
					<div class="form-group mx-2 text-center <?php if(form_error('property_size')): ?>has-danger<?php endif;?>">
						<select class="form-control" name="property_size" value="<?= set_value('property_size');?>">
							<option value="1 BHK">1 BHK</option>
							<option value="2 BHK">2 BHK</option>
							<option value="3 BHK">3 BHK</option>
							<option value="3+ BHK">3+ BHK</option>
						</select>
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('property_size'); ?></span>
					</div>
					<p class="mx-2">property</p>
				</div> -->
				<h5 class="text-center mt-5">Move details</h5>
					<div class="d-flex flex-row justify-content-center align-items-center mx-auto">
						<p class="px-2">from</p>
						<div class="form-group mx-2 text-center <?php if(form_error('from_area')): ?>has-danger<?php endif;?>">
							<input type="text" name="from_area" class="form-control" value="<?= set_value('from_area');?>">
							<span class="material-icons form-control-feedback">clear</span>
							<span class="text-danger"><?= form_error('from_area'); ?></span>
						</div>
						<p class="px-2">to</p>
						<div class="form-group mx-2 text-center <?php if(form_error('to_area')): ?>has-danger<?php endif;?>">
							<input type="text" name="to_area" class="form-control" value="<?= set_value('to_area');?>">
							<span class="material-icons form-control-feedback">clear</span>
							<span class="text-danger"><?= form_error('to_area'); ?></span>
						</div>
						<p class="px-2">on</p>
						<div class="form-group mx-2 text-center <?php if(form_error('move_date')): ?>has-danger<?php endif;?>">
						    <input type="text" name="move_date" class="form-control datetimepicker" value="<?= set_value('move_date');?>"/>
						    <span class="material-icons form-control-feedback">clear</span>
						    <span class="text-danger"><?= form_error('move_date'); ?></span>
						</div>
						<br>
					</div>

					<div class="text-center mt-3 mb-5">
						<div class="mb-5">
							<h4>House Size</h4>
							<p>Items will be grouped based on the property size.</p>
						</div>
							<div class="row">
								<div class="col">	
									<div class="btn-group-toggle " data-toggle="buttons">
										<label class="btn btn-success btn btn-block btn-radio btn-radio-1 btn-md">
											<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','1 BHK');?>"> 1 BHK
										</label>
									</div>
		
								</div>
								<div class="col">

									<div class="btn-group-toggle " data-toggle="buttons">
										<label class="btn btn-success btn btn-block btn-radio btn-radio-1 btn-md">
											<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','2 BHK');?>"> 2 BHK
										</label>
									</div>
								</div>
								<div class="col">

									<div class="btn-group-toggle " data-toggle="buttons">
										<label class="btn btn-success btn btn-block btn-radio btn-radio-1 btn-md">
											<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','3 BHK');?>"> 3 BHK
										</label>
									</div>
								</div>
								<div class="col">

									<div class="btn-group-toggle " data-toggle="buttons">
										<label class="btn btn-success btn btn-block btn-radio btn-radio-1 btn-md">
											<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','3 + BHK');?>"> 3 + BHK
										</label>
									</div>

									
								</div>
								<div class="col">
									<div class="btn-group-toggle " data-toggle="buttons">
										<label class="btn btn-success btn btn-block btn-radio btn-radio-1 btn-md">
											<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','FEW ITEMS');?>"> FEW ITEMS
										</label>
									</div>
								</div>
							</div>
					</div>

					<div class="d-flex justify-content-center my-5">
						<input type="submit" name="form-one-next" class="btn btn-success btn-raised" value="Next">
					</div>
			</form>
		</div>
	</div>

</div>