<?php 

$movedata = $this->session->userdata('movedata');
if($movedata['property_size'] == "1 BHK"){
	$living_room_item = unserialize(ONEBHK_LIVING_ROOM_ITEMS);
	$bed_room_item = unserialize(ONEBHK_BED_ROOM_ITEMS);
	$kitchen_item = unserialize(ONEBHK_KITCHEN_ITEMS);
	$misc_item = unserialize(ONEBHK_MISC_ITEMS);
}elseif ($movedata['property_size'] == "2 BHK") {
	$living_room_item = unserialize(TWOBHK_LIVING_ROOM_ITEMS);
	$bed_room_item = unserialize(TWOBHK_BED_ROOM_ITEMS);
	$kitchen_item = unserialize(TWOBHK_KITCHEN_ITEMS);
	$misc_item = unserialize(TWOBHK_MISC_ITEMS);
}elseif ($movedata['property_size'] == "3 BHK") {
	$living_room_item = unserialize(THREEBHK_LIVING_ROOM_ITEMS);
	$bed_room_item = unserialize(THREEBHK_BED_ROOM_ITEMS);
	$kitchen_item = unserialize(THREEBHK_KITCHEN_ITEMS);
	$misc_item = unserialize(THREEBHK_MISC_ITEMS);
}else{
	$living_room_item = unserialize(THREEPLUSBHK_LIVING_ROOM_ITEMS);
	$bed_room_item = unserialize(THREEPLUSBHK_BED_ROOM_ITEMS);
	$kitchen_item = unserialize(THREEPLUSBHK_KITCHEN_ITEMS);
	$misc_item = unserialize(THREEPLUSBHK_MISC_ITEMS);
}

$living_room_item = filter_array($living_room_item);
$bed_room_item = filter_array($bed_room_item);
$kitchen_item = filter_array($kitchen_item);
$misc_item = filter_array($misc_item);

function filter_array($array) {
   foreach ($array as $key => &$value) {
      if (empty($value)) { unset($array[$key]);}
      else {
         if (is_array($value)) {
            $value = filter_array($value);
            if (empty($value)) { unset($array[$key]);}
         }
      }
   }
   	return $array;
}


?>

<section class="section" style="padding-top:100px">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 border-right">

				<?php echo form_open('estimate/items_data',array('class'=>'form')); ?>
				<ul class="nav nav-pills mb-3 justify-content-center d-block" id="pills-tab" role="tablist">
					<li class="nav-item mt-4 mb-5">
						<a class="nav-link active rounded" id="pills-livingroom-tab" data-toggle="pill" href="#pills-livingroom" role="tab" aria-controls="pills-livingroom" aria-selected="true">Living Room</a>
					</li>
					<li class="nav-item mt-4 mb-5">
						<a class="nav-link rounded" id="pills-bedroom-tab" data-toggle="pill" href="#pills-bedroom" role="tab" aria-controls="pills-bedroom" aria-selected="false">Bed Room</a>
					</li>
					<li class="nav-item mt-4 mb-5">
						<a class="nav-link rounded" id="pills-kitchen-tab" data-toggle="pill" href="#pills-kitchen" role="tab" aria-controls="pills-kitchen" aria-selected="false">Kitchen</a>
					</li>
					<li class="nav-item mt-4 mb-5">
						<a class="nav-link rounded" id="pills-other-tab" data-toggle="pill" href="#pills-other" role="tab" aria-controls="pills-other" aria-selected="false">Other</a>
					</li>
				</ul>

			</div>

			<div class="col-sm-9">
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-livingroom" role="tabpanel" aria-labelledby="pills-livingroom-tab">
						<?php $i=0; foreach ($living_room_item as $key => $value) { ?>
							<h4 class="title"><?= ucwords($key); ?></h4>
							<div class="d-flex flex-column flex-md-row flex-wrap justify-content-center align-items-center">
								<?php if($i++ == 0): ?><p class="mx-2">I have </p><?php endif; ?>
								<?php $j=1; foreach ($value as $k => $v) { ?>
									<?php if($j == count($value)){ echo " <p>and</p> "; } ?>
		 								<div class="form-group mx-2 text-center w-15">
											<div class="input-group input-group-hover">
												<div class="input-group-prepend invisible">
													<span class="input-group-text pointer btn-number bg-info text-white" disabled="disabled" data-type="minus" data-field="<?= $k; ?>">-</span>
												</div>
												<input type="text" min="0" name="<?= $k; ?>" class="form-control input-number text-center text-bold" value="<?= set_value($k,$v);?>">
												<div class="input-group-append invisible">
													<span class="input-group-text pointer btn-number bg-info text-white" data-type="plus" data-field="<?= $k; ?>">+</span>
												</div>
											</div>
										</div>
										<p class="mx-2 "><?= ucwords(str_replace("_", " ", $k)); ?><?php echo ($j++ < count($value)) ? ", " : "."; ?></p>

								<?php } ?>
							</div>
						<?php } ?>
					</div>
					<div class="tab-pane fade" id="pills-bedroom" role="tabpanel" aria-labelledby="pills-bedroom-tab">
						<?php $i=0; foreach ($bed_room_item as $key => $value) { ?>
							<h4 class="title"><?= ucwords($key); ?></h4>
							<div class="d-flex flex-column flex-md-row flex-wrap justify-content-center align-items-center">
								<?php if($i++ == 0): ?><p class="mx-2">I have </p><?php endif; ?>
								<?php $j=1; foreach ($value as $k => $v) { ?>
									<?php if($j == count($value)){ echo " <p>and</p> "; } ?>
										<div class="form-group mx-2 text-center w-15">
											<div class="input-group input-group-hover">
												<div class="input-group-prepend invisible">
													<span class="input-group-text pointer btn-number bg-info text-white" disabled="disabled" data-type="minus" data-field="<?= $k; ?>">-</span>
												</div>
												<input type="text" min="0" name="<?= $k; ?>" class="form-control input-number text-center text-bold" value="<?= set_value($k,$v);?>">
												<div class="input-group-append invisible">
													<span class="input-group-text pointer btn-number bg-info text-white" data-type="plus" data-field="<?= $k; ?>">+</span>
												</div>
											</div>
										</div>
										<p class="mx-2"><?= ucwords(str_replace("_", " ", $k)); ?><?php echo ($j++ < count($value)) ? ", " : "."; ?></p>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
					<div class="tab-pane fade" id="pills-kitchen" role="tabpanel" aria-labelledby="pills-kitchen-tab">
						<?php $i=0; foreach ($kitchen_item as $key => $value) { ?>
							<h4 class="title"><?= ucwords($key); ?></h4>
							<div class="d-flex flex-column flex-md-row flex-wrap justify-content-center align-items-center">
								<?php if($i++ == 0): ?><p class="mx-2">I have </p><?php endif; ?>
								<?php $j=1; foreach ($value as $k => $v) { ?>
									<?php if($j == count($value)){ echo " <p>and</p> "; } ?>
										<div class="form-group mx-2 text-center w-15">
											<div class="input-group input-group-hover">
												<div class="input-group-prepend invisible">
													<span class="input-group-text pointer btn-number bg-info text-white" disabled="disabled" data-type="minus" data-field="<?= $k; ?>">-</span>
												</div>
												<input type="text" min="0" name="<?= $k; ?>" class="form-control input-number text-center text-bold" value="<?= set_value($k,$v);?>">
												<div class="input-group-append invisible">
													<span class="input-group-text pointer btn-number bg-info text-white" data-type="plus" data-field="<?= $k; ?>">+</span>
												</div>
											</div>
										</div>
										<p class="mx-2"><?= ucwords(str_replace("_", " ", $k)); ?><?php echo ($j++ < count($value)) ? ", " : "."; ?></p>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
					<div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
						<?php $i=0; foreach ($misc_item as $key => $value) { ?>
							<h4 class="title"><?= ucwords($key); ?></h4>
							<div class="d-flex flex-column flex-md-row flex-wrap justify-content-center align-items-center">
								<?php if($i++ == 0): ?><p class="mx-2">I have </p><?php endif; ?>
								<?php $j=1; foreach ($value as $k => $v) { ?>
									<?php if($j == count($value)){ echo " <p>and</p> "; } ?>
										<div class="form-group mx-2 text-center w-15">
											<div class="input-group input-group-hover">
												<div class="input-group-prepend invisible">
													<span class="input-group-text pointer btn-number bg-info text-white" disabled="disabled" data-type="minus" data-field="<?= $k; ?>">-</span>
												</div>
												<input type="text" min="0" name="<?= $k; ?>" class="form-control input-number text-center text-bold" value="<?= set_value($k,$v);?>">
												<div class="input-group-append invisible">
													<span class="input-group-text pointer btn-number bg-info text-white" data-type="plus" data-field="<?= $k; ?>">+</span>
												</div>
											</div>
										</div>
										<p class="mx-2"><?= ucwords(str_replace("_", " ", $k)); ?><?php echo ($j++ < count($value)) ? ", " : "."; ?></p>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex flex-row justify-content-center align-items-center mt-5">
			<button type="submit" class="btn btn-success btn-raised">Next</button>
		</div>
		<?php echo form_close(); ?>
	</div>
</section>