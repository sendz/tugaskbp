<?php 
	session_start(); 
	if (!$this->ion_auth->logged_in())
	{
		redirect('auth/login');
	}
?>
<!doctype HTML>
<html>
<head>
	<title><?php echo $this->config->item('app_title'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/style.css">
	<script type="text/javascript" src="<?php echo base_url();?>style/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>style/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>style/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>style/js/script.js"></script>
</head>
	<body>
	<?php
		function HitungUmur($tgllhr) { 
			list($thn,$bln,$tgl) = explode('-',$tgllhr); 
			$lahir = mktime(0, 0, 0, (int)$bln, (int)$tgl, $thn); 
			//jam,menit,detik,bulan,tanggal,tahun 
			$t = time(); 
			$umur = ($lahir < 0) ? ( $t + ($lahir * -1) ) : $t - $lahir; 
			$tahun = 60 * 60 * 24 * 365; 
			$tahunlahir = $umur / $tahun; 
			$umursekarang=floor($tahunlahir) ; 
			return $umursekarang; 
		}
	?>
		<div class="jumbotron">
			<div class="container">
				<h1><?php echo $this->config->item('app_name'); ?></h1>
			</div>
		</div>