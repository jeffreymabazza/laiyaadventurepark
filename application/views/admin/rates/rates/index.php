<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE CONTENT-->
		<h3 class="page-title">
		Rates
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
								 Attraction
							</th>
							<th>
								 Rate
							</th>
							<th>
								Package
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
										 <?php echo $record->attraction ?>
									</td>
									<td>
										 <?php echo $record->rate ?>
									</td>
									<td>
										<?php $package_ids = unserialize($record->package_id) ?>
										<?php if(is_array($package_ids) && $package_ids): ?>
											<?php foreach($package_ids as $package_id): ?>
												<?php echo @array_search($package_id, array_flip($packages_array)) ?>
											<?php endforeach; ?>
										<?php endif; ?>
									</td>
								</tr>

								<!-- BEGIN EDIT MODAL -->
								<div class="modal fade" id="edit-<?php echo $record->id ?>" tabindex="-1" role="basic" aria-hidden="true">
									<div class="modal-dialog">
										<form action="<?php echo base_url() ?>admin/rates/update/<?php echo $record->id ?>" method="POST">
											<input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
													<h4 class="modal-title">Edit</h4>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<label>Attraction Name</label>
														<input class="form-control" type="text" data-tabindex="1" placeholder="Attraction name" name="attraction" value="<?php echo $record->attraction ?>" required>
													</div>
													<div class="form-group">
														<label>Rate</label>
														<input class="form-control" type="text" data-tabindex="1" placeholder="Rate" name="rate" value="<?php echo $record->rate ?>">
													</div>
													<div class="form-group">
														<label>Sub Attraction <span class="badge">this will automatically placed under the Attraction selected</span></label>
														<select name="attraction_id" class="form-control">
															<option value="0"></option>
															<?php if($attractions): ?>
																<?php foreach($attractions as $attraction): ?>
																	<?php if($record->id != $attraction->id): ?>
																		<option value="<?php echo $attraction->id ?>" <?php echo $attraction->id == $record->attraction_id ? 'selected' : '' ?>><?php echo $attraction->attraction ?></option>
																	<?php endif; ?>
																<?php endforeach; ?>
															<?php endif; ?>
														</select>
													</div>
													<div class="form-group">
														<label>Packages</label>
														<div class="input-group">
															<div class="icheck-list">
																<?php if($packages->result()): ?>
																	<?php foreach($packages->result() as $package): ?>
																		<?php $package_record = unserialize($record->package_id); $package_record = is_array($package_record) ? $package_record : array(); ?>
																			<label>
																			<input name="package_ids[]" type="checkbox" class="icheck" value="<?php echo $package->id ?>" <?php echo in_array($package->id, $package_record) ? 'checked' : '' ?>> <?php echo $package->name ?> </label>
																	<?php endforeach; ?>
																<?php endif; ?>
															</div>
														</div>
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
										<form action="<?php echo base_url() ?>admin/rates/delete/<?php echo $record->id ?>" method="POST">
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
				<form action="<?php echo base_url() ?>admin/rates/create" method="POST">
					<input type="hidden" name="<?php echo $csrf['name'] ?>" value="<?php echo $csrf['hash'] ?>">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Add</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Attraction Name</label>
								<input class="form-control" type="text" data-tabindex="1" placeholder="Attraction name" name="attraction" required>
							</div>
							<div class="form-group">
								<label>Rate</label>
								<input class="form-control" type="text" data-tabindex="1" placeholder="Rate" name="rate">
							</div>
							<div class="form-group">
								<label>Sub Attraction <span class="badge">this will automatically placed under the Attraction selected</span></label>
								<select name="attraction_id" class="form-control">
									<option value="0"></option>
									<?php if($attractions): ?>
										<?php foreach($attractions as $record): ?>
											<option value="<?php echo $record->id ?>"><?php echo $record->attraction ?></option>
										<?php endforeach; ?>
									<?php endif; ?>
								</select>
							</div>
							<div class="form-group">
								<label>Packages</label>
								<div class="input-group">
									<div class="icheck-list">
										<?php if($packages->result()): ?>
											<?php foreach($packages->result() as $package): ?>
												<label>
												<input name="package_ids[]" type="checkbox" class="icheck" value="<?php echo $package->id ?>"> <?php echo $package->name ?> </label>
											<?php endforeach; ?>
										<?php endif; ?>
									</div>
								</div>
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