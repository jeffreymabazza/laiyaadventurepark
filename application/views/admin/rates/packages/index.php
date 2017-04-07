<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE CONTENT-->
		<h3 class="page-title">
		Packages
		<a class="btn btn-xs btn-primary" title="Add image" data-toggle="modal" href="#add"><i class="glyphicon glyphicon-plus"></i></a>
		</h3>
		<div class="col-md-12">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
			<div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-scrollable">
						<table class="table table-hover">
						<thead>
						<tr>
							<th>
								 Action
							</th>
							<th>
								 #
							</th>
							<th>
								 Name
							</th>
							<th>
								 Rate
							</th>
						</tr>
						</thead>
						<tbody>
						<?php if($records): ?>
							<?php foreach($records as $key => $record): ?>
								<tr>
									<td style="width: 100px">
										<a href="#edit-<?php echo $record->id ?>" data-toggle="modal" class="btn btn-circle btn-icon-only blue" title="Edit">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="#delete-<?php echo $record->id ?>" data-toggle="modal" class="btn btn-circle btn-icon-only red delete" title="Delete">
											<i class="icon-trash"></i>
										</a>
									</td>
									<td>
										 <?php echo $key + 1 ?>
									</td>
									<td>
										 <?php echo $record->name ?>
									</td>
									<td>
										 <?php echo $record->rate ?>
									</td>
								</tr>

								<!-- BEGIN EDIT MODAL -->
								<div class="modal fade" id="edit-<?php echo $record->id ?>" tabindex="-1" role="basic" aria-hidden="true">
									<div class="modal-dialog">
										<form action="<?php echo base_url() ?>admin/rates/packages/update/<?php echo $record->id ?>" method="POST">
											<input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
													<h4 class="modal-title">Edit</h4>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<label>Name</label>
														<input class="form-control" type="text" data-tabindex="1" placeholder="Package name" value="<?php echo $record->name ?>" name="name" required>
													</div>
													<div class="form-group">
														<label>Rate</label>
														<input class="form-control" type="text" data-tabindex="1" placeholder="Package rate" value="<?php echo $record->rate ?>" name="rate" required>
													</div>
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn blue">Save changes</button>
													<span type="button" class="btn default" data-dismiss="modal">Cancel</span>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- END EDIT MODAL -->
								<!-- BEGIN DELETE MODAL -->
								<div class="modal fade" id="delete-<?php echo $record->id ?>" tabindex="-1" role="basic" aria-hidden="true">
									<div class="modal-dialog">
										<form action="<?php echo base_url() ?>admin/rates/packages/delete/<?php echo $record->id ?>" method="POST">
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
						</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- END SAMPLE TABLE PORTLET-->
		</div>
		<!-- BEGIN CREATE MODAL -->
		<div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
			<div class="modal-dialog">
				<form action="<?php echo base_url() ?>admin/rates/packages/create" method="POST">
					<input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Add</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" type="text" data-tabindex="1" placeholder="Package name" name="name" required>
							</div>
							<div class="form-group">
								<label>Rate</label>
								<input class="form-control" type="text" data-tabindex="1" placeholder="Package rate" name="rate" required>
							</div>
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