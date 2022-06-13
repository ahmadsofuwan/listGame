<?php
$action = 'add';
$display = '';
if (isset($_POST['action']))
	$action = $_POST['action'];
if ($action == 'update')
	$display = 'style="display: none;"'
?>
<div class="row justify-content-center">
	<div class="col-lg-10">
		<div class="row">
			<div class="col-lg">
				<div class="p-5">
					<?php echo $err ?>
					<h3 class="text-center"><b><?php echo strtoupper($title) ?></b></h3>
					<form method="post" enctype="multipart/form-data">
						<input type="hidden" name="pkey" value="">
						<input type="hidden" name="action" value="<?php echo $action ?>">

						<div class="form-group row">
							<label for="name" class="col-sm-3 col-form-label">Nama</label>
							<div class="col-sm">
								<input type="text" class="form-control" name="name" placeholder="Nama">
							</div>
						</div>

						<div class="form-group row">
							<label for="name" class="col-sm-3 col-form-label">Link</label>
							<div class="col-sm">
								<input type="text" class="form-control" name="link" placeholder="Link/Url">
							</div>
						</div>

						<div class="form-group row">
							<label for="groupKey" class="col-sm-3 col-form-label">Group</label>
							<div class="col-sm">
								<select class="form-control" id="groupKey" name="groupKey">
									<?php foreach ($groub as $groubKey => $groubValue) { ?>
										<option value="<?php echo $groubValue['pkey'] ?>"><?php echo $groubValue['name'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="levelKey" class="col-sm-3 col-form-label">Level</label>
							<div class="col-sm">
								<select class="form-control" id="levelKey" name="levelKey">
									<?php foreach ($level as $levelKey => $levelValue) { ?>
										<option value="<?php echo $levelValue['pkey'] ?>"><?php echo $levelValue['name'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="img" class="col-sm-3 ">Img</label>
							<div class="col-sm">
								<input type="file" class="form-control-file" id="img" name="img">
							</div>
						</div>


						<div class="form-group row mt-5">
							<div class="col-sm">
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
							<div class="col-sm">
								<a href="<?php echo base_url($baseUrl . 'List') ?>" class="btn btn-warning btn-block">Cancel</a>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>