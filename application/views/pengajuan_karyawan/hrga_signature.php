<div id="small-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-sm" role="document" style="margin-top: 7%;text-align: center;">
		<div class="modal-content">
			<form role="form" method="POST" action="<?php echo site_url('pengajuan_karyawan/approve') ?>" enctype="multipart/form-data">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel2">HR/GA Signature</h4>
				</div>
				<div class="modal-body">
					<input hidden="hidden" type="text" name="idform" id="idform" value="<?php echo $id_form ?>">
					<input type="hidden" name="idcareerposts" id="idcareerposts" value="<?php echo $id_careerposts ?>">
					<p style="float: left;">Beri tanda tangan :</p>
					<button type="button" class="btn btn-danger" onclick="tandaTangan.clear()" style="float: right;">
						<i class="fa fa-eraser fa-fw"></i>Hapus
					</button>
					<br>
					<div id="canvas" style="margin-top: 25px; border: 1px #bbadad solid; border-radius: 2px;">
						Canvas is not supported.
					</div>

					<script>
						tandaTangan.capture();
					</script>
					<br />
					<img hidden="hidden" id="saveSignature" name="saveSignature" alt="Saved image png"/>
					<input hidden="hidden" type="text" name="image" id="image" value="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
					<button onclick="tandaTangan.save()" class="btn btn-primary"><i class="fa fa-check-circle"></i>Approve</button>
				</div>
			</form>
		</div>
	</div>
</div>