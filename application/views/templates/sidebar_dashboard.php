<div class="col-3">
	<div class="card px-0">
		<div class="card-body px-0">
			<ul class="list-group">
				<li class="list-group-item  align-items-center">
					<a href="<?= base_url();?>dashboard"><i class="fa fa-home"></i> &nbsp; Dashboard</a>
					<!-- <span class="badge badge-primary badge-pill">14</span> -->
				</li>
				<li class="list-group-item  align-items-center">
					<a href="<?= base_url();?>dashboard"><i class="fa fa-user"></i> &nbsp; My Profile</a>
					<!-- <span class="badge badge-primary badge-pill">14</span> -->
				</li>
				<li class="list-group-item  align-items-center">
					<a href="<?= base_url();?>dashboard/cancelled_estimates"><i class="fa fa-ban"></i> &nbsp; Cancelled Moves</a>
					<span class="badge badge-primary badge-pill ml-auto"><?= $cancelled_list['total']; ?></span>
				</li>
				<li class="list-group-item  align-items-center">
					<a href="<?= base_url();?>dashboard/quotations_received"><i class="fa fa-bell"></i> &nbsp; Quotations Received</a>
					<!-- <span class="badge badge-primary badge-pill ml-auto">1</span> -->
				</li>
				<li class="list-group-item  justify-content-between align-items-center">
					<a class="btn btn-info btn-block btn-raised" href="<?= base_url();?>estimate">Make <?php if($estimate_list['total'] > 0): ?>another <?php else : ?>an <?php endif; ?>estimate</a>
				</li>
			</ul>
		</div>
	</div>
</div>