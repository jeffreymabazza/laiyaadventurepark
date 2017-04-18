<div class="page-content-wrapper">
	<div class="page-content">
		<div class="portlet-body form">
			<form class="form-horizontal form-bordered" method="POST" action="<?php echo base_url() ?>admin/rates/settings/update">
				<input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>">
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-1">Promo Copy</label>
						<div class="col-md-11">
							<textarea name="promo" id="promo">
								<?php echo $record_promo ? $record_promo->content : '' ?>
							</textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-1">Regular Copy</label>
						<div class="col-md-11">
							<textarea name="regular" id="regular">
								<?php echo $record_regular ? $record_regular->content : '' ?>
							</textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-1"></label>
						<div class="col-md-11">
							<button type="submit" class="btn btn-success">Update</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>