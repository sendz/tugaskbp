<?php
	$navigasi = $this->uri->segment(1);
?>
<div class="col-xs-3">
	<ul class="nav nav-pills nav-stacked">
		<li class='<?php if($navigasi == "diagnosa") echo "active"; ?>'><a href="<?php echo base_url(); ?>index.php/diagnosa">Diagnosa</a></li>
		<li class='<?php if($navigasi == "pasien") echo "active"; ?>'><a href="<?php echo base_url(); ?>index.php/pasien">Pasien</a></li>
		<li class='<?php if($navigasi == "dokter") echo "active"; ?>'><a href="<?php echo base_url(); ?>index.php/dokter">Dokter</a></li>
		<li class='<?php if($navigasi == "kamar") echo "active"; ?>'><a href="<?php echo base_url(); ?>index.php/kamar">Kamar</a></li>
		<li class='<?php if($navigasi == "obat") echo "active"; ?>'><a href="<?php echo base_url(); ?>index.php/obat">Obat</a></li>
	</ul>
		<?php
		if ($this->ion_auth->logged_in())
			{
				echo "<a class=\"btn btn-block btn-danger\" href=\"" . base_url() . "index.php/auth/logout\">Log Out</a>";
			}
		?>
</div>