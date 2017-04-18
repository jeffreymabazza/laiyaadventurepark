<script type="text/javascript" src="<?php echo base_url() ?>assets/cms/global/plugins/jquery-mixitup/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/cms/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url() ?>assets/cms/admin/pages/scripts/portfolio.js"></script>

<script type="text/javascript">
	$("#add-browse-file").on("click", function() {
		$("#add-browse-input").trigger("click");
	});

	$("#add-browse-input").on("change", function() {
		add_filename = $(this)[0].files.length ? $(this)[0].files[0].name : "";
		$("#add-filename").html(add_filename);
	});

	$(".edit-browse").on("click", function() {
		var id = $(this).data('id');
		$("#edit-browse-input-" +id).trigger("click");

		$("#edit-browse-input-" + id).on("change", function() {
			edit_filename = $(this)[0].files.length ? $(this)[0].files[0].name : "";

			$("#edit-filename-" + id).html(edit_filename);
		});
	});
</script>