<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE CONTENT-->
		<h3 class="page-title">
		Sliders&nbsp;
		<a class="btn btn-xs btn-primary" title="Add image" data-toggle="modal" href="#add"><i class="glyphicon glyphicon-plus"></i></a>
		</h3>
		<div class="row">
			<div class="row mix-grid">
				<?php if($records->num_rows()): ?>
					<?php foreach($records->result() as $key => $record): ?>
						<div class="col-md-3 col-sm-4 mix category_<?php echo $key ?>">
							<div class="mix-inner">
								<img class="img-responsive" src="<?php echo base_url() ?>assets/uploads/sliders/thumb_<?php echo $record->filename ?>" alt="">
								<div class="mix-details">
									<h5>ACTIONS</h5>
									<a class="" data-toggle="modal" href="#edit-<?php echo $record->id ?>">
									<i class="glyphicon glyphicon-pencil"></i>
									</a>
									&nbsp;&nbsp;
									<a class="fancybox-button" href="<?php echo base_url() ?>assets/uploads/sliders/thumb_<?php echo $record->filename ?>" title="<?php echo $record->title ?>" data-rel="fancybox-button">
									<i class="glyphicon glyphicon-fullscreen"></i>
									</a>
									&nbsp;&nbsp;
									<a class="" data-toggle="modal" href="#delete-<?php echo $record->id ?>">
									<i class="glyphicon glyphicon-trash"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- BEGIN UPDATE MODAL -->
						<div class="modal fade" id="edit-<?php echo $record->id ?>" tabindex="-1" role="basic" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?php echo base_url() ?>admin/sliders/update/<?php echo $record->id ?>" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Add</h4>
										</div>
										<div class="modal-body">
											 <input type="file" name="image" id="edit-browse-input-<?php echo $record->id ?>" style="display: none" accept="image/*">
											 <div class="form-group">
											 	<label>Title</label>
											 	<input type="text" class="form-control" name="title" data-tabindex="1" placeholder="Title" required value="<?php echo $record->title ?>">
											 </div>
											 <button type="button" class="btn btn-success edit-browse" data-id="<?php echo $record->id ?>">Browse</button>
											 <span id="edit-filename-<?php echo $record->id ?>"><?php echo $record->filename ?></span>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn blue">Save changes</button>
											<span type="button" class="btn default" data-dismiss="modal">Cancel</span>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- END UPDATE MODAL -->
						<!-- BEGIN DELETE MODAL -->
						<div class="modal fade" id="delete-<?php echo $record->id ?>" tabindex="-1" role="basic" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?php echo base_url() ?>admin/sliders/delete/<?php echo $record->id ?>" method="POST">
									<input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Delete</h4>
										</div>
										<div class="modal-body">
											Are you sure you want to delete this record?
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn blue">Yes</button>
											<span type="button" class="btn default" data-dismiss="modal">Cancel</span>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- END DELETE MODAL -->
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<!-- END PAGE CONTENT-->

		<!-- BEGIN CREATE MODAL -->
		<div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
			<div class="modal-dialog">
				<form action="<?php echo base_url() ?>admin/sliders/create" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Add</h4>
						</div>
						<div class="modal-body">
							 <input type="file" name="image" id="add-browse-input" style="display: none" accept="image/*">
							 <div class="form-group">
							 	<label>Title</label>
							 	<input type="text" class="form-control" name="title" data-tabindex="1" placeholder="Title" required>
							 </div>
							 <button type="button" class="btn btn-success" id="add-browse-file">Browse</button>
							 <span id="add-filename"></span>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn blue">Save changes</button>
							<span type="button" class="btn default" data-dismiss="modal">Cancel</span>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END CREATE MODAL -->
	</div>
</div>