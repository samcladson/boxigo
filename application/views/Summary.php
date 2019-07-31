<?php 

$movedata = $this->session->userdata('movedata');

?>

<section class="section" style="padding-top: 100px">
	<div class="container">
		<?php if($this->session->flashdata('items_success_message')): ?>
			<div class="alert alert-success"><?= $this->session->flashdata('items_success_message'); ?></div>
		<?php endif; ?>
			<div class="card-deck user-info-col my-5">
				<div class="card">
					<div class="card-header">Customer Info</div>
					<div class="card-body d-flex justify-content-center align-items-center">
						<div class="text-left">
							<h4 class="title my-0"><?= $movedata['first_name']." ".$movedata['last_name'];?> <small>(ID: <?= $movedata['user_id'];?>)</small></h4>
							<p class="phone my-0"><?= $movedata['phone'];?></p>
							<p class="email my-0"><?= $movedata['email'];?></p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">Moving From</div>
					<div class="card-body d-flex justify-content-center align-items-center">
						<p class="phone my-0"><?= $movedata['moving_from'];?></p>
					</div>
				</div>
				<div class="card">
					<div class="card-header">Property Size</div>
					<div class="card-body d-flex justify-content-center align-items-center">
						<p class="phone my-0"><?= $movedata['property_size'];?></p>
					</div>
				</div>
				<div class="card">
					<div class="card-header">Moving Distance</div>
					<div class="card-body d-flex justify-content-center align-items-center">
						<p class="phone my-0"><?= $movedata['property_size'];?></p>
					</div>
				</div>
			</div>
			<div class="card-deck date-col my-5">
				<div class="card">
					<div class="card-header">Moving Date</div>
					<div class="card-body d-flex justify-content-center align-items-center">
						<p class="phone my-0"><b><?= $movedata['moving_date'];?></b></p>
					</div>
				</div>
				<div class="card">
					<div class="card-header">Moving To</div>
					<div class="card-body d-flex justify-content-center align-items-center">
						<p class="phone my-0"><?= $movedata['moving_to'];?></p>
					</div>
				</div>
				<div class="card">
					<div class="card-header">Total Items</div>
					<div class="card-body d-flex justify-content-center align-items-center">
						<p class="phone my-0"><b><?= $movedata['total_items'];?></b></p>
					</div>
				</div>
				<div class="card">
					<div class="card-header">Order #</div>
					<div class="card-body d-flex justify-content-center align-items-center">
						<h3 class="phone my-0"><b><?= $movedata['estimate_id'];?></b></h3>
					</div>
				</div>
			</div>
			<?php if($this->session->userdata('user_id')): ?>
				<div class="d-flex justify-content-center">
					<a href="<?= base_url();?>dashboard" class="btn btn-success btn-raised">Visit dashboard</a>
				</div>
			<?php else: ?>
				<div class="d-flex justify-content-center">
					<a href="<?= base_url();?>login" class="btn btn-success btn-raised">Login to visit dashboard</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>