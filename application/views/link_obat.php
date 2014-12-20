<div class="col-xs-9">
	<div class="row">
		<?php echo form_open('obat/suntik'); ?>
		<div class="col-xs-6">
			Kode Diagnosa
			<?php
				echo "<select name='kode_diagnosa' class='form-control'>";
				echo "<option>Kode Diagnosa</option>";
				if ($diagnosa) {
					foreach ($diagnosa as $data) {
						echo "<option value='$data->kode_diagnosa'>$data->kode_diagnosa - $data->nama - $data->diagnosa</option>";
						echo form_hidden('history_obat',$data->history_obat);
					}
				}
				echo "</select>";
			?>
		</div>
		<div class="col-xs-6">
			Kode Obat
			<?php
				echo "<select name='jenis_obat' class='form-control'>";
				echo "<option>Kode Obat</option>";
				if ($obat) {
					foreach ($obat as $data) {
						echo "<option value='$data->kode_obat,$data->qty,$data->obat'>$data->kode_obat - $data->obat</option>";
					}
				}
				echo "</select>";
				echo form_number('qty','','class="form-control" placeholder="Quantity"');
				echo form_textarea('dosis','','class="form-control" placeholder="Isikan Dosis dengan jelas"');
				echo form_submit('submit','Simpan','class="form-control btn btn-default pull-right"');
			?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>