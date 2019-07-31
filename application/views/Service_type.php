<?php 

$movedata = $this->session->userdata('movedata');

?>

<section class="section" style="padding-top:100px">
	<div class="container">
		
		<?php if($this->session->flashdata('error_message')): ?>
			<p class="text-danger"><?= $this->session->flashdata('error_message'); ?></p>
		<?php endif; ?>
		<div class="row">
			<div class="col-xl-4 text-center">
				<div class="single-price card">
					<div class="card-header bg-success price-title">
						<h4>Silver/Economy</h4>
					</div>
					<div class="card-body">
						<div class="price-tag">
							<h2>$25 <span>month</span></h2>
						</div>
						<div class="price-item">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">100GB Monthly Bandwidth</li>
								<li class="list-group-item">100 Google AdWords</li>
								<li class="list-group-item">100 Domain Hosting</li>
								<li class="list-group-item">SSL Shopping Cart</li>
								<li class="list-group-item">24/7 Live Support</li>
							</ul>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-center">
						<a href="<?= base_url();?>estimate/service_type_select/silver" class="box-btn">Select</a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 text-center">
				<div class="single-price card">
					<div class="card-header bg-success price-title">
						<h4>Bronze/Premium</h4>
					</div>
					<div class="card-body">

						<div class="price-tag center">
							<h2>$125 <span>month</span></h2>
						</div>
						<div class="price-item">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">100GB Monthly Bandwidth</li>
								<li class="list-group-item">100 Google AdWords</li>
								<li class="list-group-item">100 Domain Hosting</li>
								<li class="list-group-item">SSL Shopping Cart</li>
								<li class="list-group-item">24/7 Live Support</li>
							</ul>
						</div>

					</div>
					<div class="card-footer d-flex justify-content-center">
						<a href="<?= base_url();?>estimate/service_type_select/bronze" class="box-btn">Select</a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 text-center">
				<div class="single-price card">
					<div class="card-header bg-success price-title">
						<h4>Gold/Elite</h4>
					</div>
					<div class="card-body">

						<div class="price-tag">
							<h2>$225 <span>month</span></h2>
						</div>
						<div class="price-item">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">100GB Monthly Bandwidth</li>
								<li class="list-group-item">100 Google AdWords</li>
								<li class="list-group-item">100 Domain Hosting</li>
								<li class="list-group-item">SSL Shopping Cart</li>
								<li class="list-group-item">24/7 Live Support</li>
							</ul>
						</div>

					</div>
					<div class="card-footer d-flex justify-content-center">
						<a href="<?= base_url();?>estimate/service_type_select/gold" class="box-btn">Select</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>